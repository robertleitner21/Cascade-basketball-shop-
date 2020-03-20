<?php

    session_start();
    $connect = mysqli_connect("localhost", "root", "", "product_details");
    //include('database_connection(pdo).php');

    if(isset($_POST["action"]))
    {
        $query = "SELECT * FROM products WHERE product_status = '1'";
        //$query = "SELECT * FROM products";
        if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
        {
            //$query .= " AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."' ";
        }
        if(isset($_POST["category"]))
        {
            $category_filter = implode("','", $_POST["category"]);
            $query .= " AND product_category IN ('".$category_filter."') ";
        }


        $result = mysqli_query($connect, $query);

        /*
        if (!$result) {
            printf("Error: %s\n", mysqli_error($connect));
            exit();
        }
        */
        
        $output = '';
        //$query = "SELECT * FROM products ORDER BY id ASC";
        //$result = mysqli_query($connect, $query);
        while($row = mysqli_fetch_array($result))
        {

        $output .='
        <div class="product product--horizontal">
            <div class="product__img">
                <img src="'. $row["image_mini"] .'" alt="">						
            </div>
            <div class="product__content">
                <h6 class="product__title"><a href="#">'. $row["pname"] .'</a></h6>
                <span class="product__category">'. $row["product_category"] .'</span>
            </div>
            
            <div class="product__footer sale">
                <span class="price">$ '. $row["price"] .'</span>
                <span class="pbadge"><img src="'. $row["pbadge"] .'" alt=""></span>
                <span class="discount">'. $row["discount"] .'</span>
            </div>
            <div class="product__card">
                <select class="styler">
                    <option value="">Size</option>
                    <option value="">S</option>
                    <option value="">M</option>
                    <option value="">L</option>
                </select>
                <input type="button" name="add_to_cart" id="'. $row["id"] .'"  class="btn" value="Add to Cart" />
                <br>
                <a href="#" class="favourite">
                    <span class="icon icon-heart-plus"></span>
                    Add to wishlist
                </a>
            </div>
            <input type="hidden" name="hidden_name" id="name '. $row["id"] .'" value=" '. $row["pname"] .'" />  
            <input type="hidden" name="hidden_price" id="price '. $row["id"] .'" value=" '.$row["price"] .'" />
            <input type="hidden" name="hidden_image" id="image '. $row["id"] .'" value=" '.$row["image"] .'" />
        </div>
        ';
        }
    echo $output;
    }

?>


