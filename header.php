<?php
/*
*******************************************************************************
 * File:		header.php
 * Purpose: header template for betsybo website
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
// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

/* include data */
include_once 'php/data.php';

/* include functions */
include_once 'php/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Betsybo</title>

	<!-- CDN powered icon kit fontawesome.com -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<!-- favicon -->
	<link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon' />

	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/style.css"  />
	<link rel="stylesheet" type="text/css" href="css/dbmNotice.css"  />
</head>
<body>
	<div id="sub-header">
		<div id="sub-navbar">
	<?php $create_navbar($sub_navbar_data, $count, ''); ?>
		</div>
	</div>
	<div id="header" class="clearfix">
		<a href="#"><img id="hdr_logo" src="images/betsybo_logo2.png" alt="Betsybo Logo" /></a>
		<div id="navbar">
	<?php $create_navbar($navbar_data, $count, $seperator); ?>
		</div><!-- end #navbar -->
	</div><!-- end #header -->
