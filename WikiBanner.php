<?php
/**
 * WikiBanner Allows top and bottom banners to be added to the wiki as configured 
 * in the LocalSettings.php file.
 *
 *The MIT License (MIT)


 *Copyright (c) 2015 Aleksandr Pavelovich


 *Permission is hereby granted, free of charge, to any person obtaining a copy
 *of this software and associated documentation files (the "Software"), to deal
 *in the Software without restriction, including without limitation the rights
 *to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *copies of the Software, and to permit persons to whom the Software is
 *furnished to do so, subject to the following conditions:
 
 *The above copyright notice and this permission notice shall be included in all
 *copies or substantial portions of the Software.
 
 *THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *SOFTWARE.

 *
 * @file
 * @ingroup Extensions
 * @link https://www.mediawiki.org/wiki/Extension:WikiBanner Documentation
 *
 * @author maelstr0m <spavelovich@lexipedium.org>
 * @license https://opensource.org/licenses/MIT The MIT License (MIT)
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die();
}

$wgExtensionCredits ['other'][] = array(
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
