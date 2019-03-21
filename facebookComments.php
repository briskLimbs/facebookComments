<?php

/**
* Facebook comments is an addon for BriskLimbs that allows you to
* add Facebook Comments widget for any given video. 
* @version: 1.0
* @BriskLimbs: 1.0^
* @since: 21st March, 2019
* @author: Saqib Razzaq
* @website: https://github.com/saqirzzq
*/

function facebookScript() {
	echo '<div id="fb-root"></div><script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=1170849003031384&autoLogAppEvents=1"></script>';
}

function facebookComments($vkey) {
	$url = CORE_URL . '/watch/' . $vkey;
	echo "<div class='fb-comments' data-href='$url' data-numposts='10'></div>";
}

$addons->addTrigger('facebookScript', 'body_before');