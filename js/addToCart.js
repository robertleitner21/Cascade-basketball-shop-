//$(document).ready(function(data){

    //$(".btn").click(function(){
    $(document).on("click", ".btn", function(e){
        //var product_id = $(this).attr("id");
        var product_id = e.target.id;
        console.log(product_id);
        var product_name = $('#name' + product_id).val();
        var product_price = $('#price' + product_id).val();
        var product_image = $('#image' + product_id).val();
        var action = "add";

        $.ajax({
            url:"action.php",
            method: "POST",
            dataType: "json",
            data:{
                product_id: product_id,
                product_name: product_name,
                product_price: product_price,
                product_image: product_image,
                action: action
            },
            success: function(data)
            {
                $("#order-table.cart").html(data.order_table);
                $(".badge").text(data.cart_item);
                //alert("Product has been added into Cart!");
            }
        });
    });

    $(document).ready(function(data){
        $(document).on("click", ".delete", function(){
            var product_id = $(this).attr("id");
            var action = "remove";

            //if(confirm("Are you sure you want to remove this product?"))
            //{
                $.ajax({
                    url:"action.php",
                    method: "POST",
                    dataType: "json",
                    data:{product_id:product_id, action:action},
                    success:function(data){
                        $("#order-table.cart").html(data.order_table);
                        $(".badge").text(data.cart_item);
                    }
                });
            //}
            //else 
            //{
            //    return false;
            //}
        });
    });

//});