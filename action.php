<?php
	session_start();
    $connect = mysqli_connect("localhost", "root", "", "product_details");
    
    if(isset($_POST["product_id"]))
    {
        $order_table = '';
        $message = '';
        if($_POST["action"] == "add")
        {
            if(isset($_SESSION["shopping_cart"]))
            {
                $is_available = 0;
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                {
                    if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"])
                    {
                        $is_available++;
                        //$_SESSION["shopping_cart"][$keys]['product_size'] == $_POST["shopping_cart"][$keys]['product_size'];
                    }
                }
                if($is_available < 1)
                {
                    $item_array = array(
                        'product_id'           =>  $_POST["product_id"],
                        'product_image'        =>  $_POST["product_image"],
                        'product_name'         =>  $_POST["product_name"],
                        'product_price'        =>  $_POST["product_price"],
                        //'product_size'       =>  $_POST["product_size"]
                    );
                    $_SESSION["shopping_cart"][] = $item_array;
                }
            }
            else
            {
                $item_array = array(
                    'product_id'           =>  $_POST["product_id"],
                    'product_image'        =>  $_POST["product_image"],
                    'product_name'         =>  $_POST["product_name"],
                    'product_price'        =>  $_POST["product_price"],
                    //'product_size'         =>  $_POST["product_size"]
                );
                $_SESSION["shopping_cart"][] = $item_array;
            }
        }

        if($_POST["action"] == "remove")
        {
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
                if($values["product_id"] == $_POST["product_id"])
                {
                    unset($_SESSION["shopping_cart"][$keys]);
                    $message = '<label class="text-success">Product Removed</label>';
                }
            }
        }
            
        //desc was here before
        
        if(!empty($_SESSION["shopping_cart"]))
        {
            $total = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
                $order_table .= '
                    '.$message.'
                    <body>
                        <div class="main-wrapper">
                            <header class="header">
                                <ul class="profile-menu">
                                    <li class="profile-menu__item dropdown dropdown--right dropdown--white">
                                        <div class="dropdown-content">
                                            <div class="cart">
                                                <ul class="cart-list">
                                                    <li class="cart-list__item">
                                                        <div class="cart-list__img">
                                                            <a href="#"><img src="'.$values["product_image"].'" alt=""></a>
                                                        </div>
                                                        <div class="cart-list__info">
                                                            <h6 class="product__title"><a href="#">'.$values["product_name"].'</a></h6>
                                                            <div class="cart-list__details">
                                                                <span class="price">'.number_format($values["product_price"]).'</span>
                                                                <span class="product__details">

                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="cart-list__delete">
                                                            <!--<a href="" class="js-remove-cart">-->
                                                                <button name="delete" class="icon-close delete" id="'.$values["product_id"].'" ><span class="path1"></span></button>
                                                            <!--</a>-->
                                                        </div>
                                                    </li>
                                                </ul>                       
                ';

                $total = $total + $values["product_price"];
            }
            $order_table .= '
            <div class="cart-footer">
                <span class="total">Total</span>
                <span class="price">'.number_format($total).'</span>
                <span class="btn">Check Out</span>
            </div>
            ';
        }

        $order_table .= '
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </header>
                </div>
            </body>
        ';
        $output = array(
            'order_table'     =>  $order_table,
            'cart_item'       =>  count($_SESSION["shopping_cart"])
        );
        echo json_encode($output);
        
    }
?>