<?php
/*
*******************************************************************************
 * File:		index.php
 * Purpose: header template for betsybo website
 *
 * Author:	Mark Fletcher
 * Date:		01.09.2020
 *
 * Notes:
 *
 * Revision:
 *		01.09.2020		1st issue.
 *
*******************************************************************************
*/
include_once 'header.php';
?>
<div id="wrapper" class="clearfix">
	<div id="content">
<?php foreach($displays as $prod => $data) : ?>
		<section id="">
			<h1><?php echo $prod; ?></h1>
			<div id="products">
<?php for($x = 0; $x <= 3; $x++) : ?>
				<div class="product">
					<div class="product_img">
						<img src="images/<?php echo $data[$x][0]; ?>" alt="fashion<?php echo $x; ?>" />
					</div><!-- end .product_img -->
					<div class="product_data">
						<div class="product_desc">
							Item Description
						</div><!-- end .product_desc -->
						<div class="product_rating">
<?php
	$stars = '';
	for($y = 1; $y <= 5; $y++) {
		$stars .= '<i class="fas fa-star" style="color: #ddd;"></i>'.PHP_EOL;
 	}
 	echo $stars;
?>					
						</div><!-- end .product_rating -->
						<div class="product_price">
							<span style="font-weight: bolder">&pound</span> Item Price
						</div><!-- end .product_price -->
					</div><!-- end .product_data -->
				</div><!-- end .product -->
<?php	endfor; ?>
			</div><!-- end .products -->
		</section><!-- end # -->
<?php	endforeach; ?>
	</div><!-- end #content -->
</div><!-- end #wrapper -->
<?php include_once 'footer.php'; ?>
