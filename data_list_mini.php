<?php
$query = "SELECT * FROM products ORDER BY id ASC";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
{
?>
<div class="product product--horizontal">

    <div class="product__img">
        <img src="<?php echo $row["image_mini"]; ?>" alt="">						
    </div>
    <div class="product__content">
        <h6 class="product__title"><a href="#"><?php echo $row["pname"]; ?></a></h6>
        <span class="product__category"><?php echo $row["product_category"]; ?></span>
    </div>
    
    <div class="product__footer sale">
        <span class="price">$ <?php echo $row["price"]; ?></span>
        <span class="pbadge"><img src="<?php echo $row["pbadge"]; ?>" alt=""></span>
        <span class="discount"><?php if($row["discount"] > 0) print('$'); echo $row["discount"]; ?></span>
    </div>
    <div class="product__card">
        <select class="styler">
            <option value="">Size</option>
            <option value="">S</option>
            <option value="">M</option>
            <option value="">L</option>
        </select>
        <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>"  class="btn" value="Add to Cart" />
        <br>
        <a href="#" class="favourite">
            <span class="icon icon-heart-plus"></span>
            Add to wishlist
        </a>
    </div>

</div>
<input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["pname"]; ?>" />  
<input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" />
<input type="hidden" name="hidden_image" id="image<?php echo $row["id"]; ?>" value="<?php echo $row["image"]; ?>" />
<?php	
}
?>