=== Plugin Name ===
Contributors: TJ Stein
Donate link: http://tjstein.com
Tags: apc, php, php-fpm, nginx, cache, fastcgi, opcode
Requires at least: 2.0.2
Tested up to: 3.2.1
Stable tag: 0.1

This is a simple, single purpose plugin to flush the APC opcode cache.

== Description ==

Currently, the easiest ways to flush the APC cache are to either restart the web server (Apache/Nginx) or configure a plugin like W3 Total Cache. If you would like to prevent minor service interruptions without restarting your web server or PHP daemon, this plugin will gracefully flush the opcode cache.

== Installation ==

1. Upload `apc-cache-purge.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. When needed, flush the cache by clicking on 'Purge APC' under the Tools section.

== Frequently Asked Questions ==

= What version of APC do I need? =

This should work on any version of APC.

== Changelog ==

= 0.1 =
* Initial commit.
* Added favorite actions dropdown