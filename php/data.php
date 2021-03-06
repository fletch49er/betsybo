<?php
/*
*******************************************************************************
 * File:		data.php
 * Purpose: data arrays/ objects for betsybo website
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
// define constants
// company details
define ('COMPANY', 'Betsybo Limited');
define ('COMPANYNO', 'SC627159');
define ('ADDRESS', '48 Leapmoor Drive, Wemyss Bay, Scotland, PA18 6BT');
define ('TELEPHONE','');
define ('EMAIL', 'enquiry@betsybo.com');
define ('VATNO', '');

// navbar seperator
define('SEPERATOR', '|');

//set variables
$count = 0;

// data for navigation bars
$hdr_navbar_data = [
	'home' => 'index.php',
	'about us' => 'about.php',
	'shop' => '#', //'shop.php',
	'contact us' => '#' //'contact.php'
];

//policies t&cs data array
$ftr_navbar_data = [
		'site map' => 'sitemap.php',
		'terms &amp; conditions' => 'policy.php?policy=termsConditions',
		'privacy policy' => 'policy.php?policy=privacyPolicy',
		'disclaimer' => 'policy.php?policy=disclaimer',
		'copyright' => 'policy.php?policy=copyright'
	];
$sub_navbar_data = [
	'contact us' => '#',
	'united kingdom (gbp)' => '#'
];

$displays = [
	'SPECIAL OFFERS' => [
		'0' => ['image1.jpg', 'item Description', 'Item Price'],
		'1' => ['image2.jpg', 'item Description', 'Item Price'],
		'2' => ['image3.jpg', 'item Description', 'Item Price'],
		'3' => ['image4.jpg', 'item Description', 'Item Price']
	],
	'NEW PRODUCTS' => [
		'0' => ['image1.jpg', 'item Description', 'Item Price'],
		'1' => ['image2.jpg', 'item Description', 'Item Price'],
		'2' => ['image3.jpg', 'item Description', 'Item Price'],
		'3' => ['image4.jpg', 'item Description', 'Item Price']
	],
	'FEATURE PRODUCTS' => [
		'0' => ['image1.jpg', 'item Description', 'Item Price'],
		'1' => ['image2.jpg', 'item Description', 'Item Price'],
		'2' => ['image3.jpg', 'item Description', 'Item Price'],
		'3' => ['image4.jpg', 'item Description', 'Item Price']
	]
];

$temp_text = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.';
?>
