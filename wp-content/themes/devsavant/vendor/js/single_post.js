var postHList = [],
    postHIdx = -1,
    postHScrolling= false,
    postHListRev = [];
    postLastScrollTop = 0;
jQuery(document).ready(function() {

    // dynamic sidebar menu link for sections
    if( jQuery('body.single-post').length > 0 && jQuery('.post-content-wrap').length > 0 ) {
        var count_item = 0,
            countSecs = jQuery('.post-content-wrap > section').length;

        jQuery('.post-content-wrap > section').each(function(idx, el) {
            var heading = '';
                id = jQuery(el).attr('id');

            if( countSecs > 2 ) {
                if( jQuery(el).find('h2').length > 0 ) {
                    heading = jQuery(el).find('h2:first').get(0);
                    postHList.push(heading);
                }
            }
            else {

                jQuery(this).find('h2').each(function(idx, heading) {
                    postHList.push(heading);
                });

            }
        });

        postHListRev = [...postHList];
        postHListRev = postHListRev.reverse();
        postHList.forEach(function(el, idx) {
            var title = jQuery(el).text();
                id = jQuery(el).attr('id');

            if( !id ) {
                id = 'heading_' + count_item;
                jQuery(el).attr('id', id);
            }

            var class_hide = 'hide-link';
            if(count_item < 7){
                class_hide = '';
            }
            if( title && id ) {
                jQuery('.post-aside .aside-links').append('<a href="#'+id+'" data-scrollto="'+id+'" class="'+class_hide+'" rel="nofollow">'+title+'</a>');
            }
            count_item++;
        });
        if(count_item >= 8){

            jQuery('.post-aside .aside-links').append('<a class="last-show-more">+'+(count_item - 8)+' More ...</a>');
        }
    }

    // click on sidebar links
    jQuery('.aside-links a').click(function(){
        jQuery('.aside-links a').removeClass('current');
        jQuery(this).addClass('current');
    });

    //open modal sidebar
    jQuery('.open-modal-sidebar').click(function(){
        jQuery('.open-movil-modal').addClass('active-sidebar')
    });
    jQuery('.hide-modal-sidebar, .aside-links a').click(function(){
        if(!jQuery(this).hasClass('last-show-more')){
            jQuery('.open-movil-modal').removeClass('active-sidebar');
        }
    });
    jQuery('.last-show-more').click(function(){
        jQuery('.last-show-more').parent().addClass('show-more-element');
    });

    // table/mobile prev control
    jQuery('.btn-scroll-prev').click(function(){
        var idx = postHIdx - 1;

        if( idx >= 0 ) {

            var deltaY = 145;
            if( jQuery(window).width() <= 580 ) {
                deltaY = 75;
            }
            postHScrolling= true;

            jQuery('.btn-scroll-prev').addClass('disabled');
            jQuery('html,body').animate({
                scrollTop: jQuery(postHList[idx]).offset().top - deltaY
            }, 600, function() {
                jQuery('.btn-scroll-prev').removeClass('disabled');
                postHScrolling= false;
            });

            postHIdx = idx;
        }
    });
    // tablet/mobile next control
    jQuery('.btn-scroll-next').click(function(){
        var idx = postHIdx + 1;

        if( idx < postHList.length ) {

            var deltaY = 145;
            if( jQuery(window).width() <= 580 ) {
                deltaY = 75;
            }
            postHScrolling= true;

            jQuery('.btn-scroll-next').addClass('disabled');
            jQuery('html,body').animate({
                scrollTop: jQuery(postHList[idx]).offset().top - deltaY
            }, 600, function() {
                jQuery('.btn-scroll-next').removeClass('disabled');
                postHScrolling= false;
            });

            postHIdx = idx;
        }
    });

    // mobile blocks section prev/next scrolling controlls
    if( postHList.length > 0 ) {
        
        jQuery(window).scroll(function(e) {
            var wTop = jQuery(window).scrollTop(),
                curIdx = -2,
                delta = wTop - postLastScrollTop;

            if( postHScrolling ) {
                return;
            }

            if( delta > 0 ) {  /* down */
              //  console.log('down');
                postHList.forEach(function(heading, idx) {
                    if( wTop >= jQuery(heading).offset().top ) {
                        curIdx = idx;
                    }
                });
            }
            else {  /* up */
            //    console.log('up');
                postHListRev.forEach(function(heading, idx) {
                    if( wTop <= jQuery(heading).offset().top ) {
                        curIdx = ( postHListRev.length - idx ) - 1;
                    }
                });
            }
            if( curIdx != -2 ) {
                postHIdx = curIdx;
            }
            postLastScrollTop = wTop;
        });
            
    }
});

