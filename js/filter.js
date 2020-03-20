$(document).ready(function(){
								
    //filter_data();

    function filter_data()
    {
        $('.product').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#price_min').val();
        var maximum_price = $('#price_max').val();
        var category = get_filter('category');
        //var category = get_filter('styler');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, category:category},
            success:function(data){
                //$('.product').html(data);
                $("#order_table.box-product").html(data);
            }
        });

    }

    
    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+'.checked').each(function(i, e){
            filter.push($(e).children()[0].value);
        });
        return filter;
    }
    

    /*
   function get_filter(class_name)
   {
       var filter = [];
       $('.'+class_name+':checked').each(function(){
           filter.push($(this).val());
       });
       return filter;
   }
   */
    

    $('.common_selector').on("click", function(){
        filter_data();
    });

});
