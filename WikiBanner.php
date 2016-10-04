<?php

$wgExtensionCredits['other'][] = array(
        'path' => __FILE__,
        'name' => "WikiBanner",
        'description' => "Allows top and bottom banners to be added to the wiki as configured in the LocalSettings.php file.",
//      'descriptionmsg' => "",
        'version' => 1.1,
        'author' => "maelstr0m",
        'url' => "http://www.mediawiki.org/wiki/Extension:WikiBanner",
);


//Explicitly defining global variables

$wgTopBannerCode = '<!-- No Top Banner -->';
$wgBottomBannerCode = '<!-- No Bottom Banner -->';

//Code for adding the top and bottom banners to the wiki

$wgHooks['BeforePageDisplay'][] = 'WikiBanner';
function WikiBanner( OutputPage &$out, Skin &$skin ) {
	global $wgTopBannerCode, $wgBottomBannerCode;

	$out->prependHTML( $wgTopBannerCode );
	$out->addHTML( $wgBottomBannerCode );

	return TRUE;
}
