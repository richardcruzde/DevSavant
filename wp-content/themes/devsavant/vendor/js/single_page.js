var postHList = [],
    postHIdx = -1,
    postHScrolling= false,
    postHListRev_page = [];
    postLastScrollTop = 0;
jQuery(document).ready(function() {
    if( jQuery('body.page-template-default.sidebar-content').length > 0 && jQuery('.page-block-content').length > 0 ) {
        var count_item = 0,
        countSecs = jQuery('.page-block-content  > *').length;
        
        jQuery('.page-block-content  > *').each(function(idx, el) {
        var heading = '';
            id = jQuery(el).attr('id');
        
        if( countSecs > 2 ) {
            if( jQuery(el).find('h2').length > 0 ) {
                heading = jQuery(el).find('h2:first').get(0);
                postHList.push(heading);
            }else if(jQuery(el).find('h3').length > 0){
                heading = jQuery(el).find('h3:first').get(0);
                postHList.push(heading);
            }
        }
        else {
            if( jQuery(el).find('h2').length > 0 ) {
                jQuery(this).find('h2').each(function(idx, heading) {
                    postHList.push(heading);
                });
            }else if(jQuery(el).find('h3').length > 0){
                jQuery(this).find('h3').each(function(idx, heading) {
                postHList.push(heading);
            });
            }
        }
        });
        
        postHListRev_page = [...postHList];
        postHListRev_page = postHListRev_page.reverse();
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
            jQuery('.page-aside .aside-links').append('<a href="#'+id+'" data-scrollto="'+id+'" class="'+class_hide+'" rel="nofollow">'+title+'</a>');
        }
        count_item++;
        });
        if(count_item >= 8){
        
        jQuery('.page-aside .aside-links').append('<a class="last-show-more">+'+(count_item - 8)+' More ...</a>');
        }
    }
});