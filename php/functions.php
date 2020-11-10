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

$create_navbar = function($data, $count, $seperator) {
	foreach($data as $page => $link) {
		$count ++;
		if($count < count($data)) {
			echo '<a href="'.$link.'">'.strtoupper($page).'</a>&nbsp;&nbsp;<span class="seperator">'.$seperator.'</span>&nbsp;&nbsp;'.PHP_EOL;
		} else {
			echo '<a href="'.$link.'">'.strtoupper($page).'</a>'.PHP_EOL;
		}
	}
}
?>