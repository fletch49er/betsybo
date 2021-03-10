<?php
/*
*******************************************************************************
 * File:		functions.php
 * Purpose: functions for betsybo website
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
function create_navbar($data, $count, $seperator) {
	foreach($data as $page => $link) {
		$count ++;
		if($count < count($data)) {
			echo '<a href="'.$link.'">'.strtoupper($page).'</a>&nbsp;&nbsp;<span class="seperator">'.$seperator.'</span>&nbsp;&nbsp;'.PHP_EOL;
		} else {
			echo '<a href="'.$link.'">'.strtoupper($page).'</a>'.PHP_EOL;
		}
	}
}

/*
 *******************************************************************************
 * File:		copyright()
 * Purpose:	function to create copyright notice for webpages
 *
 * Author:	Mark Fletcher
 * Date:		18.04.2018
 *
 * Notes:
 *
 * Revision:
 *		18.04.2018	1st issue.
 *
 *******************************************************************************
*/
//create a copyright notice
function copyright($company, $year) {
	if ($year == date('Y')) {
		$date = $year;
	} else {
		$date = $year.' - '.date('Y');
	}
	echo '&copy; '.$date.' '.$company.'. All rights reserved.';
}
?>
