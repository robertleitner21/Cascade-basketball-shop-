
<?php 
session_start();  
$connect = mysqli_connect("localhost", "root", "", "product_details");  
?>



<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/jquery.formstyler.css">
	<link rel="stylesheet" href="css/jquery.formstyler.theme.css">
	<title>Cascade</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />		
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			
</head>

<body>
		
<div class="main-wrapper">

	<header class="header">

		<button class="toggle-menu">
			<span class="icon icon-menu"></span>
		</button>
		<div class="dropdown-content dropdown-content__menu">
			<div class="dropdown-content__item">
				<h4 class="dropdown-content__title">Men</h4>
				<ul class="dropdown-menu">
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Shoes</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Bags</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">T-shirts</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Jackets</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Trousers</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Socks</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Shorts</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Hoodies</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Caps</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Slippers</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Protection</a>
					</li>
				</ul>
			</div>
			<div class="dropdown-content__item">
				<h4 class="dropdown-content__title">Women</h4>
				<ul class="dropdown-menu">
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Shoes</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Bags</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">T-shirts</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Jackets</a>
					</li>
				</ul>

				<h4 class="dropdown-content__title">Accessories</h4>
				<ul class="dropdown-menu">
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Sleeves</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Snap-backs</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Bandanas</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Keychains</a>
					</li>
				</ul>
			</div>
			<div class="dropdown-content__item">
				<h4 class="dropdown-content__title">Kids</h4>
				<ul class="dropdown-menu">
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Shoes</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Bags</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">T-shirts</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Jackets</a>
					</li>
				</ul>
				<h4 class="dropdown-content__title"><span class="text-error">Sale -70%</span><br>LookBook<br>
				Blog</h4>
				<div class="hr"></div>

				<ul class="dropdown-menu">
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Shipping</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Payment</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Help?</a>
					</li>
				</ul>
			</div>
			<div class="dropdown-content__item"></div>
			
		</div>
		<div class="logo">
			<a href="#">
				<img src="img/logo.png" alt="" class="hidden-mobile">
				<img src="img/logo-mobile.png" alt="" class="hidden-tablet">
			</a>
		</div>

		<ul class="main-menu">
			<li class="main-menu__item dropdown">	
				<a href="" class="main-menu__link">Men<span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Shoes</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Bags</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">T-shirts</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Jackets</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Trousers</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Socks</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Shorts</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Hoodies</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Caps</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Slippers</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="main-menu__item dropdown">	
				<a href="" class="main-menu__link">Women<span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Shoes</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Bags</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">T-shirts</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Jackets</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Pants</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Socks</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="main-menu__item dropdown">	
				<a href="" class="main-menu__link">Kids<span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Shoes</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Bags</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">T-shirts</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Jackets</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="main-menu__item dropdown">	
				<a href="" class="main-menu__link">Accessories<span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Sleeves</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Snap-backs</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Bandanas</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Keychains</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="main-menu__item">
				<a href="" class="main-menu__link">Sale</a>
			</li>
			<li class="main-menu__item">
				<a href="" class="main-menu__link">LookBook</a>
			</li>
			<li class="main-menu__item">
				<a href="" class="main-menu__link">Blog</a>
			</li>
		</ul>

		<div class="search">
			<form action="#">
				<input type="text" class="form-control search__input" placeholder="Search">
				<input type="submit" value="&#xe90b" class="search__button">
			</form>
		</div>

		<div class="location">
			<span class="icon-pin"></span>
			<a href="#" class="location__link">Boston / $</a>
		</div>

		<ul class="profile-menu">
			<li class="profile-menu__item dropdown dropdown--right dropdown--white">
				<a href="" class="profile-menu__link">
					<span class="basket">
						<span class="icon-bag"></span>
						<span class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0'; } ?></span>
					</span>
					<span class="b-price">$ 397</span>
				</a>

				<div id="cart" class="dropdown-content">
					<div id="order-table" class="cart">
						
						<!--
						<ul class="cart-list">
							<li class="cart-list__item">
								<div class="cart-list__img">
									<a href="#"></a>
								</div>
								<div class="cart-list__info">
									<h6 class="product__title"><a href="#"></a></h6>
									<div class="cart-list__details">
										<span class="price"></span>
										<span class="product__details">

										</span>
									</div>
								</div>
								<div class="cart-list__delete">
									<a href="" class="js-remove-cart">
										
									</a>
								</div>
							</li>
						</ul>
						-->
						 
						<?php 
						if(!empty($_SESSION["shopping_cart"]))
						{
							$total = 0;
							foreach($_SESSION["shopping_cart"] as $keys => $values)
							{
						?>
						
						<ul class="cart-list">
							<li class="cart-list__item">
								<div class="cart-list__img">
									<a href="#"><img src="<?php echo $values["product_image"]; ?>" alt=""></a>
								</div>
								<div class="cart-list__info">
									<h6 class="product__title"><a href="#"><?php echo $values["product_name"]; ?></a></h6>
									<div class="cart-list__details">
										<span class="price">$ <?php echo $values["product_price"]; ?></span>
										<span class="product__details">

										</span>
									</div>
								</div>
								<div class="cart-list__delete">
									<!--<a href="" class="js-remove-cart">-->
										<button name="delete" class="icon-close delete" id="<?php echo $values["product_id"]; ?>"><span class="path1"></span></button>
									<!--</a>-->
								</div>
							</li>
						</ul> 

						<?php
								$total = $total + $values["product_price"];
							}
						?>
						<div class="cart-footer">
							<span class="total">Total</span>
							<span class="price">$ <?php echo number_format($total); ?></span>
							<span class="btn"><a href="#">Check Out</a></span>
						</div>
						<?php
						}
						?>
					</div>    
				</div>
			</li>	

			

			
			<li class="profile-menu__item dropdown dropdown--right dropdown--white">
				<a href="#" class="profile-menu__link">
					<span class="icon-user"></span>
				</a>
				<div class="dropdown-content">
					<ul class="user-menu">
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-user"></span>
								Profile
							</a>
						</li>
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-heart"></span>
								Wishlist <span class="badge">2</span>
							</a>
						</li>
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-basket"></span>								
								Orders
							</a>
						</li>
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-gear"></span>
								Settings
							</a>
						</li>
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-power"></span>
								Logout
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>

	</header>

	<main class="main">
		<section class="header-inner" style="background-image: url('img/header-inner.png');">
		
			<ul class="bread-crambs">
				<li class="bread-crambs__item">
					<a href="#" class="bread-crambs__link">Home</a> /
				</li>
				<li class="bread-crambs__item">
					<a href="#" class="bread-crambs__link">Men</a> /
				</li>
			</ul>
			
			<span class="category">men</span>
			<h1 class="header-inner__title">Hoop Store</h1>
		</section>

		<div class="tab-wrap">
			<div class="filter">
				<div class="filter-sidebar">
					<button class="toggle-filter">
						<span class="icon-sliders"></span>
						<span class="sr-only">Filters</span>
					</button>
					<span class="filter__title">9 items found</span>
				</div>
				<div class="filter-content">
					<span class="filter__title">Sort by</span>
					<div class="sort">
						<input type="radio" id="sort1" name="sort">
						<label for="sort1" class="sort__item">Price<span class="icon-arrow-up-down">
						<span class="path1"></span>
						</span></label>
						<input type="radio" id="sort2" name="sort" checked="">
						<label for="sort2" class="sort__item">Name<span class="icon-arrow-up-down">
						<span class="path1"></span>
						</span></label>
						<input type="radio" id="sort3" name="sort">
						<label for="sort3" class="sort__item">Date<span class="icon-arrow-up-down">
						<span class="path1"></span>
						</span></label>
					</div>

					<ul class="filter-list tabs">
						<li class="filter-list__item active"><a href="#tab_1" class="filter-list__link">
							<span class="icon-list-2"></span>
						</a>
						</li>
						<li class="filter-list__item"><a href="#tab_2" class="filter-list__link">
							<span class="icon-list"></span>
						</a>
						</li>
					</ul>

					
				</div>
			</div>

			<div class="box-main">
				<aside class="sidebar">
					<div class="accordion">
						<div class="accordion__head open">
							<h5 class="accordion__title">Category</h5>
							<span class="icon-minus"></span>
						</div>
						<div class="accordion__body">
							<ul class="check-list">

								<?php


								include('database_connection(pdo).php');


								$query1 = "SELECT DISTINCT(product_category) FROM products ORDER BY id DESC";
								$statement1 = $connect1->prepare($query1);
								$statement1->execute();
								$result1 = $statement1->fetchAll();
								foreach($result1 as $row1)
								{
								?>
								<li class="check-list__item">
									<input type="checkbox" class="styler common_selector category" id="check-list1" value="<?php echo $row1['product_category']; ?>">
									<label for="check-list1" class="check-list__text"><?php echo $row1['product_category']; ?></label>
								</li>
								<?php
								}
								?>
								<!--
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Bags</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">T-shirts</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Pants</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Socks</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Sleeves</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Bandanas</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Snap-backs</label>
								</li>
								-->
							</ul>
						</div>
						<div class="accordion__head">
							<h5 class="accordion__title">Brand</h5>
							<span class="icon-minus"></span></div>
						<div class="accordion__body" style="display: none;">
							<ul class="check-list">
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Nike</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for=""check-list1 class="check-list__text">Adidas</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="" check-list1 class="check-list__text">Jordan Brand</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="" check-list1 class="check-list__text">Under Armour</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="" check-list1 class="check-list__text">Puma</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="" check-list1 class="check-list__text">Reebok</label>
								</li>
							</ul>
						</div>
						<div class="accordion__head">
							<h5 class="accordion__title">Size</h5>
							<span class="icon-minus"></span></div>
						<div class="accordion__body" style="display: none;">
							<ul class="check-list check-list__column">
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">S</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for=""check-list1 class="check-list__text">XL</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="" check-list1 class="check-list__text">M</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="" check-list1 class="check-list__text">XXL</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="" check-list1 class="check-list__text">L</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="" check-list 1class="check-list__text">XXXL</label>
								</li>
							</ul>
						</div>
						<div class="accordion__head">
							<h5 class="accordion__title">Price</h5>
							<span class="icon-minus"></span></div>
						<div class="accordion__body" style="display: none;">
							<div id="slider-range"></div>
							<input type="text" id="price_min" readonly style="border:0; color:#f6931f; font-weight:bold;">
							<input type="text" id="price_max" readonly style="border:0; color:#f6931f; font-weight:bold;">
						</div>
						<div class="accordion__head">
							<h5 class="accordion__title">Color</h5>
							<span class="icon-minus"></span></div>
						<div class="accordion__body" style="display: none;">22</div>
						

						<!--
						<style>
						#loading
						{
							text-align:center; 
 							background: url('img/loader.gif') no-repeat center; 
 							height: 150px;
						}
						</style>
						-->
					


					</div>
				</aside>
				<div class="content">
					<div class="box-tab-cont">
						<div class="tab-cont " id="tab_1">
							<div class="box-product" id="order_table">
								
								<?php
									include('data_list_mini.php');
								?>

							</div>
						</div>
						<div class="tab-cont hide" id="tab_2">
							<div class="box-product" id="order_table">
								
								<?php
									include('data_list.php');
								?>
								
							</div>
						</div>
					</div>
					<div class="paginator">
						<span class="paginator__item">1 page of 1</span>
						<span class="paginator__item load"><span class="icon icon-reload"></span>Lode more</span>
						<span class="paginator__item">9 items</span>
					</div>
				</div>
			</div>
		</div>

	</main>		
	
	<footer>
		
	</footer>
	
</div>

<script src="js/addToCart.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery.formstyler.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/filter.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>
</html>
