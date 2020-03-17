$(function(){

    $('.tabs a').click(function(){
        $(this).parents('.tab-wrap').find('.tab-cont').addClass('hide');
        $(this).parent().siblings().removeClass('active');
        var id = $(this).attr('href');
        $(id).removeClass('hide');
        $(this).parent().addClass('active');
        return false;
    });

    $('.accordion__head').on('click', function(){
        var el = $(this);
        el.next('.accordion__body').slideToggle();
        el.toggleClass('open');
        return false;
    });

    $('.toggle-filter').click(function(){
        $(this).toggleClass('active');
        $('.sidebar').toggleClass('open');
        $('.box-product').toggleClass('full');
    });

    $('.toggle-menu').click(function(){
        $(this).toggleClass('active');
        $('.dropdown-content__menu').toggleClass('open');
    });

    $('.styler').styler();

    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 75, 300 ],
        slide: function( event, ui ) {
          $( "#price_min" ).val( "$" + ui.values[ 0 ] );
          $( "#price_max" ).val( "$" + ui.values[ 1 ] );
        }
      });
      $( "#price_min" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) );
      $( "#price_max" ).val( "$" + $( "#slider-range" ).slider( "values", 1 ) );

      $('.dropdown-content__title').click(function(){
            $(this).toggleClass('d-open'); 
      });

});

   


