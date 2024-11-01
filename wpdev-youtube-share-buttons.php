<?php
/*
Plugin Name: WPDevelopers YouTube Share Buttons
Description: Plugin that automatically creates share buttons over YouTube embeds that appear on hover when viewed on desktop or display on play on mobile devices.
Version: 1.2
Author: Tyler Johnson
Author URI: http://tylerjohnsondesign.com
Plugin URI: http://wpdevelopers.com
*/

// START Add CSS

add_action( 'wp_enqueue_scripts', 'add_youtubeembed_stylesheet' );

function add_youtubeembed_stylesheet() {
    wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
    wp_enqueue_style( 'prefix-style' );
}

// END Add CSS

// START Find YouTube Embeds

function wpdev_youtube_wrapper($postcontent) {
    // Match YouTube iFrames
    $youtubestring = '~<iframe.*youtube.*</iframe>~';
    preg_match_all($youtubestring, $postcontent, $matches);

    foreach ($matches[0] as $match) {
        // Wrap Matched iFrame
    	$permalink = get_permalink();
        $shortlink = wp_get_shortlink();

        $wrappedframe = '<div class="wpdev-youtube-container">
		<div class="wpdev-rollover wpdev-facebook">
		<a href="https://www.facebook.com/sharer/sharer.php?u=' . $permalink . '" target="_blank">Share</a>
		</div>
		<div class="wpdev-rollover wpdev-twitter">
		<a href="https://twitter.com/home?status=' . $shortlink . '" target="_blank">Tweet</a>
		</div>' . $match . '</div>';

        // Replace iFrame with New Content
        $postcontent = str_replace($match, $wrappedframe, $postcontent);
    }

    return $postcontent;    
}
add_filter('the_content', 'wpdev_youtube_wrapper');

// END Find YouTube Embeds

?>
