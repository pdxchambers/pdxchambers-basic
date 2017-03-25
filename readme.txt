=== PDXChambers Basic ===
Contributors: pdxchambers
Tags: two-columns, right-sidebar, custom-background, custom-colors, custom-header, custom-menu, featured-images, blog 
Requires at least: 4.6.1
Tested up to: 4.6.1
Stable tag: 4.6.1
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
 
PDXChambers Basic is a simple blog theme.
 
== Description ==
 PDXChambers Basic is, as the name suggest, a simple blog theme. It supports a variety of WordPress customization 
 options allowing flexibility in presentation.
 
 ==Design Notes==
 Some specific design decisions were made in developing this theme.
 
 1. Top level elements in the site's navigation menu don't go anywhere. This is to accommodate touch devices which don't have a "hover" 
 function. Tapping (or clicking) the top level element will display the sub-menu items for that element. Tapping it again will hide them.
 1. Nested comments are only displayed up to three levels deep for small devices (such as smartphones and small tablets). This was done
 because at that level the container becomes too small and the contents spill out of their container. These hidden comments will display
 as expected when the theme is viewed on a device with a width greater than 767 pixels.

 
== Installation ==
To install download the theme's .zip file, then use one of the following methods to install:

=The Easy Way=
The simplest way to install the theme is to do the following:
1. In your WordPress site's admin panel, go to "Appearance" -> "Themes".
1. Click the "Add New" button.
1. Click "Upload Theme"
1. Click "Choose File", browse to the theme's .zip file and select it.
1. Click "Install Now"

=The Less Easy Way=
1. Extract the .zip file. You should have a folder called "pdxchambers-basic" with the theme's files inside.
1. Log onto your WordPress site using FTP.
1. Upload the extracted folder to your wp-content/themes directory.

Once the files have been installed, go your your WordPress site's 
admin panel and activate it under "Apperance" -> "Themes" 

== Screenshots ==
No screen shots at present time. 

==Licensing==
PDXChambers Basic, Copyright 2017 Julien Chambers. PDXChambers Basic 
is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see < http://www.gnu.org/licenses/ >.

The following third-party resources are bundled with PDXChambers Basic:

Header image train.jpg and train_thumbnail.png, Copyright 2016 Julien A. Chambers License: CC0 1.0 Universal (CC0 1.0) https://www.gnu.org/licenses/license-list.html#CC0

== Changelog ==
=1.0.2=
Fixed the following issues:

-In functions.php
--provided unique prefix for global constants
--set $content_width as a global
--wrapped add_editor_style() in a function and hooked into after_setup_theme instead if init
--changed get_stylesheet_directory_uri() to get_stylesheet_uri() when enqueueing style.css
--added support for translation
--escaped the URL for the header image

-In footer.php
--added support for translation

-Removed @package wordpress from all templates

-in header.php
--wrapped comment-reply in a function and hooked to wp_enqueue_scripts()
--replaced the echo with just bloginfo('description')

-fixed the_time() in index.php and search.php to respect user time settings

-Added translation support in search.php, index.php, and single.php

-removed exe file that somehow made its way into the images folder

-fixed licensing information in readme.txt

=1.0.1=
Fixed the following issues:
-Default menu did not display with any styles applied
-Removed author, date, and empty category from static pages
-Enlarged post navigation links to make navigation on mobile devices easier
-Fixed search.php so author, date, and empty category is not displayed for pages in search results
-Moved wp_footer() to correct location
-Added overflow-x to CSS so <pre> tags scroll if the text overflows the element
-Fixed default color issue in the customizer
 =1.0=
 Initial version.

