=== WPDevelopers YouTube Share Buttons ===
Contributors: TylerJohsonDesign
Tags: youtube, share, facebook, twitter
Requires at least: 3.5
Tested up to: 4.3
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin that automatically creates share buttons over YouTube embeds that appear on hover when viewed on desktop or display on play on mobile devices.

== Description ==

This plugin searches your posts for YouTube embeds and then wraps the player with share buttons that appear on hover when view on desktop or display on place when view on mobile devices. There's both a share button for Facebook and for Twitter that share your current post URL. When the post share on Facebook, it share the full URL. When sharing on Twitter however, it uses the shortlink, so that the tweet does not surpass the 180 character limit. It works with both regular YouTube iFrame embeds and the oEmbed system.

View the demo here: http://wpdevelopers.com/wpdeveloper-youtube-share-buttons/

== Installation ==

1. Upload `wpdev-youtube-share-plugin` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. And enjoy share buttons on your YouTube embeds!

== Frequently Asked Questions ==

= Is there a control panel or options page? =

Since this plugin is so straight forward, there isn't a control panel or options page as it truly isn't needed.

= Can I update the styles? =

You can do so using your own stylesheet, whether is be a custom.css file or a child theme stylesheet.

= What size should the YouTube player be? =

It would be best if the player were as wide as it can be. I suggest setting iFrames to be 100% width within the content in order for everything to look great.

== Screenshots ==

1. screenshot-1.jpg
2. screenshot-2.jpg

== Changelog ==

= 1.2 =
* Updated style.css with some styling changes.
* Updated code within youtube-share-plugin.php, so that it better finds YouTube embeds within the_content().

= 1.0 =
* First release.
