=== I'm A Plugin Developer ===
Contributors: diddledan
Tags: plugin, developer, listing, WordPress.org
Requires at least: 3.5
Tested up to: 4.7.1
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Showcase the plugins you have in the WordPress.org Plugin Directory on your own site

== Description ==

Portions of code are heavily influenced by [I make plugins](https://wordpress.org/plugins/i-make-plugins/) by
[Mark Jaquith](https://profiles.wordpress.org/markjaquith/).

This plugin provides a new post-type to hold your plugin definitions for your plugins hosted on
WordPress.org's Plugin Directory. Just add a new post of this type for each plugin that you have
in the WordPress.org Plugin Directory and everything "Just Works". The plugin archive is
at `example.com/plugins/` and each plugin is at `example.com/plugins/your-plugin-slug`.

You can customise both the archive and the individual post output by copying the files out
of `./templates/` into your theme and modifying to suit. `content-my-plugin.php` is used for the
single post view, and `excerpt-my-plugin.php` is used for each post in the archive/list view.

== Installation ==

You're a plugin developer so you should know how to install a plugin.

Once installed, add your plugins as individual posts in the "My Plugins" post-type.

== Changelog ==

= 1.1.0 =
* Use transients API for storing the readme.txt
* made download link translatable

= 1.0.0 =
* initial release
