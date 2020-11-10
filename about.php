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
		<section id="bio">
			<h1><?php echo strtoupper('about us'); ?></h1>
<?php echo $temp_text; ?>
		</section><!-- end #bio -->
	</div><!-- end #content -->
</div><!-- end #wrapper -->
<?php include_once 'footer.php'; ?>
