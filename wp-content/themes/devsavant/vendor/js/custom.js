
jQuery(document).ready(function($){
    //collapse
    jQuery('.event-collapse-title').click(function(){
        if(jQuery(this).parent().hasClass('active-collapse')){
            jQuery(this).parent().removeClass('active-collapse');
        }else{
            jQuery(this).parent().addClass('active-collapse');
        }
    });

    //collapse
    jQuery('.event-collapse-title-3').click(function(){
        if(jQuery(this).parent().hasClass('active-row')){
            jQuery(this).parent().removeClass('active-row');
        }else{
            jQuery(this).parent().addClass('active-row');
        }
    });
    //collapse 2
    jQuery('.event-collapse-title_2').click(function(){
        if(jQuery(this).parent().hasClass('active-collapse')){
            jQuery(this).parent().removeClass('active-collapse');
        }else{
            var collapse_block = jQuery(this).closest('.event-collapse-2');//.removeClass('active-collapse');
            collapse_block.find('.collapse-section').removeClass('active-collapse');
            jQuery(this).parent().addClass('active-collapse');
        } 
    });
        
 
    jQuery('.menu-movil .icon-menu').click(function(){
        if(jQuery(this).parent().hasClass('active-menu')){
            jQuery(this).parent().removeClass('active-menu');
            jQuery(this).removeClass('active-menu-close');
        }else{
            jQuery(this).parent().addClass('active-menu');
            jQuery(this).addClass('active-menu-close');
        }
    });
    jQuery('.menu-movil li.menu-item-has-children').click(function(){
        if(jQuery(this).hasClass('active-menu-mobile')){
            jQuery(this).removeClass('active-menu-mobile');
        }else{
            jQuery(this).addClass('active-menu-mobile');
        }
    });

    

    // Breadcrumbs mobile popup
    jQuery('.breadcrumbs .home-link').click(function(e) {
        if( jQuery(window).width() <= 650 ) {
            e.preventDefault();
            jQuery('.breadcrumbs .breadcrumbs-inner').toggleClass('show-popup');
        }
    });


  //share
  
  $.fn.customerPopup = function (e, intWidth, intHeight, blnResize) {
    
    // Prevent default anchor event
    e.preventDefault();
    
    // Set values for window
    intWidth = intWidth || '500';
    intHeight = intHeight || '400';
    strResize = (blnResize ? 'yes' : 'no');

    // Set title and open popup with focus on it
    var strTitle = ((typeof this.attr('title') !== 'undefined') ? this.attr('title') : 'Social Share'),
        strParam = 'width=' + intWidth + ',height=' + intHeight + ',resizable=' + strResize,            
        objWindow = window.open(this.attr('href'), strTitle, strParam).focus();
  }
  
  /* ================================================== */
  
  $(document).ready(function ($) {
    $('.share').on("click", function(e) {
      $(this).customerPopup(e);
    });
  });



  /* ================================================== */
  var ppp = 20; // Post per page Catetories
  var pageNumber = 1;
  function load_posts(termId, taxonomy){
      pageNumber++;
      var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=load_post_ajax'+ "&nonce=" + ajax_var.nonce + "&catid=" + termId + "&taxonomy=" + taxonomy;
      $.ajax({
          type: "POST",
          dataType: "json",
          url: ajax_var.url,
          data: str,
          success: function(data){
            console.log(data.max);
            if(pageNumber >= data.max) {
                $('.load-more').hide();
            }
            console.log(data);
            $(".loop_post_cpt .row").append(data.html);
          },
          error : function(jqXHR, textStatus, errorThrown) {
              //$loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
          }

      });
      return false;

  }

    //piechart
    jQuery('.circle-progress').pieChart({
        lineWidth: 10,
        rotate: 180,
        size: 220,
        lineCap: 'round',
        shadowColor: 'red',
        animate: {
            duration: 500,
            enabled: true
        },
    });


    
    // scroll to animated
    jQuery(document).on('click', '[data-scrollto]',function(e) {
        var targetId = jQuery(this).attr('href');
        if( !targetId ) {
            targetId = '#' + jQuery(this).attr('data-scrollto');
        }
            
        if( targetId ) {
            e.preventDefault();
            var deltaY = 145;
            if( jQuery('.page-topbar').length > 0 ) {
                deltaY = 180;
            }

            if( jQuery(window).width() <= 580 ) {
                deltaY = 80;
                if( jQuery('.page-topbar').length > 0 ) {
                    deltaY = 140;
                }
            }

            jQuery('html,body').animate({
                scrollTop: jQuery(targetId).offset().top - deltaY
            }, 500);
        }
    });

    //Popups
    $('.open-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        mainClass: 'mfp-fade',
        closeMarkup: '<span title="%title%" class="mfp-close ic-close"></span>'
    });

});