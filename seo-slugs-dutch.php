<?php
/*
Plugin Name: SEO Slugs Dutch
Plugin URI: http://www.stephanmuller.nl/blog/seo-slugs-dutch/
Description: Removes common Dutch words like 'de', 'het', 'bij' from post slugs to improve SEO. Based on the original by Andrei Mikrukov.
Version: 1.0
Author: Stephan Muller, Andrei Mikrukov
Author URI: http://www.stephanmuller.nl/
*/

/*
Copyright Andrei Mikrukov 2007, Stephan Muller 2012

Licensed under the terms of the GPL version 2, see:
http://www.gnu.org/licenses/gpl.txt

Provided without warranty, inluding any implied warrant of merchantability or fitness for purpose.
*/

add_filter('name_save_pre', 'seo_slugs', 0);

function seo_slugs($slug) {
    // We don't want to change an existing slug
	if ($slug) return $slug;

	global $wpdb;
	$seo_slug = strtolower(stripslashes($_POST['post_title']));

	$seo_slug = preg_replace('/&.+?;/', '', $seo_slug); // kill HTML entities
    // kill anything that is not a letter, digit, space or apostrophe
    $seo_slug = preg_replace ("/[^a-zA-Z0-9 \']/", "", $seo_slug);
    // Turn it to an array and strip common words by comparing against c.w. array
    $seo_slug_array = array_diff (split(" ", $seo_slug), seo_slugs_stop_words());
    // Turn the sanitized array into a string
    $seo_slug = join("-", $seo_slug_array);

	return $seo_slug;
}

function seo_slugs_stop_words () {
    return array ("aan", "af", "al", "alles", "als", "altijd", "andere", "ben", "bij", "daar", "dan", "dat", "de", "der", "deze", "die", "dit", "doch", "doen", "door", "dus", "een", "eens", "en", "enz", "er", "etc", "ge", "geen", "geweest", "haar", "had", "heb", "hebben", "heeft", "hem", "hen", "het", "hier", "hij", "hoe", "hun", "iemand", "iets", "ik", "in", "is", "ja", "je", "jouw", "jullie", "kan", "kon", "kunnen", "maar", "me", "meer", "men", "met", "mij", "mijn", "moet", "na", "naar", "niet", "niets", "nog", "nu", "of", "om", "omdat", "ons", "onze", "ook", "op", "over", "reeds", "te", "ten", "ter", "tot", "tegen", "toch", "toen", "tot", "u", "uit", "uw", "van", "veel", "voor", "want", "waren", "was", "wat", "we", "wel", "werd", "wezen", "wie", "wij", "wil", "worden", "zal", "ze", "zei", "zelf", "zich", "zij", "zijn", "zo", "zonder", "zou");
}
?>
