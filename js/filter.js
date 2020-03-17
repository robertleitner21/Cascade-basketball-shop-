$(document).ready(function(){
								
    filter_data();

    function filter_data()
    {
        $('.product').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#price_min').val();
        var maximum_price = $('#price_max').val();
        var category = get_filter('category');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, category:category},
            success:function(data){
                $('.product').html(data);
            }
        });

    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.styler').click(function(){
        filter_data();
    });

});
