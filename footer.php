<?php
/*
*******************************************************************************
 * File:		footer.php
 * Purpose: footer template for betsybo website
 *
 * Author:	Mark Fletcher
 * Date:		01.01.2020
 *
 * Notes:
 *
 * Revision:
 *		01.09.2020		1st issue.
 *
*******************************************************************************
*/
/*
<div id ="ftrButtons">
<div class="ftrBox"><!-- Twitter button -->
<a href="https://www.twitter.com/dbm_web"><span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x" style="color: #28170b;"></i>
<i class="fa fa-twitter fa-stack-1x fa-inverse" title="Follow Us on Twitter" style="color: #664C06;"></i>
</span></a>
</div><!-- end .ftrBox -->

<div class="ftrBox"><!-- Facebook button -->
<a href="https://www.facebook.com/designsbymark"><span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x" style="color: #28170b;"></i>
<i class="fa fa-facebook fa-stack-1x fa-inverse" title="Follow Us on Facebook" style="color: #664C06;"></i>
</span></a>
</div><!-- end .ftrBox -->

<div class="ftrBox"><!-- LinkedIn button -->
<a href="https://uk.linkedin.com/in/fletch49er"><span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x" style="color: #28170b;"></i>
<i class="fa fa-linkedin fa-stack-1x fa-inverse" title="Follow Us on LinkedIn" style="color: #664C06;"></i>
</span></a>
</div><!-- end .ftrBox -->
</div><!-- end #ftrButtons -->
*/
?>
<div id="footer" class="clearfix">
	<div id="ftr_logo">
		<a href="#"><img src="images/betsybo_logo5.jpg" alt="Betsybo Logo" /></a>
	</div><!-- end #ftr_logo -->
	<div id="ftr_address">
		<address>
			<?php echo COMPANY; ?><br />
			<?php echo ADDRESS; ?><br />
			<a href="tel:<?php echo TELEPHONE; ?>">+44 tel-number</a><br />
			<a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a><br />
		</address>
	</div><!-- end #ftr_address -->
	<div id=""></div>
	<div id="copyright"><?php copyright(COMPANY, 2020); ?></div>
	<div id="ftr_navbar">
<?php create_navbar($ftr_navbar_data, $count, SEPERATOR); ?>
	</div><!-- end #ftr_navbar -->
</div><!-- end #footer -->

<?php include_once('templates/dbmNotice.php'); ?>
</body>
</html>
