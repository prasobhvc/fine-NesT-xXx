﻿=== Wordpress Meta Data and Taxonomies Filter ===
Contributors: RealMag777
Donate link: http://codecanyon.net/item/wordpress-meta-data-taxonomies-filter/7002700?ref=realmag777
Tags: ​filter, meta, taxonomies, taxonomies filter, meta filter, taxonomies filter widget, ​taxonomy filter, meta, metadata filter,search,wordpress search form, woocommerce products filter,marketing,widget,plugin,shortcode,woocommerce
Requires at least: 3.8.0
Tested up to: 4.5.1
Stable tag: 1.2.1

The main idea of the plugin – make your site content is searchable by meta fields and taxonomies on the same time.

== Description ==

The main idea of the plugin – make your site content is searchable by meta fields and taxonomies.

The plugin is ready to work as woocommerce products filter.

The plugin has very high flexibility and for now it is the most comprehensive solution for making content 
is searchable by meta fields AND taxonomies among wordpress plugins on codecanyon and wordpress.org!

With this plugin you will be able to filter posts/pages/custom types by the meta fields and/or 1 taxonomy on the same time.

DOCUMENTATION: http://wp-filter.com/documentation/

* You want to make searchable – car’s, homes for sale,rent,hotels,ships, woocommerce products and any other things on your site – the plugin is for you!
* You are Real Estate agency – the plugin is for you!
* You are Car Dealer – the plugin is for you!
* You have Culinary site with tons of recipes – the plugin is for you!
* Your site is a Showcase or your Portfolio – the plugin is for you!
* Your site is WooCommerce shop and you want to make products are searchable by meta fields and taxonomies – the plugin is for you!
* If your site has metafields already, and you want make them searchable – the plugin is for you!


Quick start:
http://www.youtube.com/watch?v=t_u4uRkmGwo

Easy entry:
https://www.youtube.com/watch?v=z31-zvX8TfM

Creating complex cars dealer site:
http://www.youtube.com/watch?v=-aRcFkVn4Eg


WATCH MORE VIDEOS HERE: http://wp-filter.com/

CODECANYON VERSION FEATURES:

* SEARCH SHORTCODES
* UNLIMITED TAXONOMIES PER WIDGET
* AJAX SEARCHING


NOT IN THE FREE VERSION OF THE PLUGIN:

* No one search shortcode
* Not available shortcode [mdf_custom], using which you can create for example: http://cars.wordpress-filter.com/
* Only 1 taxonomy per a widget is possible


FROM VERSION 1.2.0 - AJAX FUNCTIONALITY FOR WOOCOMMERCE IS ACTIVATED!!


Look more here: http://codecanyon.net/item/wordpress-meta-data-taxonomies-filter/7002700?ref=realmag777


LOOKING JUST ONLY FILTER FOR WOOCOMMERCE? LOOK HERE PLEASE: https://wordpress.org/plugins/woocommerce-products-filter/


#Important note: if you have troubles with empty result page, and you sure that it must be, do next please:
* open your theme header.php
* at the same bottom of the file drop this &lt;?php do_shortcode('[mdf_force_searching]') ?&gt;
* save file

== Installation ==
* Download to your plugin directory or simply install via Wordpress admin interface.
* Activate.
* Use.


== Frequently Asked Questions ==

Q: Where can I see demos?
R: http://cars.wordpress-filter.com/ AND http://demo2.wordpress-filter.com/

Q: Where can see I woocommerce demo?
R: http://woocommerce.wordpress-filter.com/

Q: Where can see I ajax search demo by title/content?
R: http://miscellaneous.wordpress-filter.com/

Q: Where can I read documentation?
R: http://wordpress-filter.com/documentation/

Q: Where can I watch video tutorials?
R: http://wordpress-filter.com/video/


== Screenshots ==

1. Settings


== Changelog ==

= 1.2.1 =
- Minor fixes
- New filter item: Multiple checkbox select - in premium only for taxonomies
- New option: Range slider skin
- New option: Init plugin scripts on the next site pages only
- New option: JavaScript code after AJAX is done
- New option: Sort options by alphabetical order
- New option: Custom CSS code
- New feature: Cache terms
- mdf_search_is_going - CSS class in tag body if searching is going
- $args = apply_filters('mdf_custom_shortcode_query_args', $args, $custom_id); - wp-filter for shortcode [mdf_custom] 
- //require plugin_dir_path(__FILE__) . 'ext/utilities.php'; - not documented extension in index.php

= 1.2.0 =
- WordPress 4.3 compatibility
- New shortcode mdf_select_title for drop-down in meta constructor
Example: echo do_shortcode('[mdf_select_title post_id=117 meta_key=medafi_fashion]');
print_r(MetaDataFilterCore::get_val_as_select_title(139,'medafi_fashion', 'africa'));
- Cron for cleaning dynamic recount cache
- Different overlay skins in the plugin options for front of site
- Sort options by alphabetical order for drop-down in meta constructor
- Keys in drop-down in meta constructor can be with spaces, any customer wants

= 1.1.9 =
A lot of improvements. Attention for codecanyon customers - do not update to this version - it is the free one and have less functionality!!! Download your copy of the plugin you bought from codecanyon site only!

= 1.0.7 =
Search links became short

= 1.0.6 =
Some fixes and improvements

= 1.0.5 =
A lot of fixes and improvements

= 1.0.4 =
Fixed bug with empty result page. To resolve it added new shortcode 
<?php do_shortcode('[mdf_force_searching]') ?>. It is just enough open in your theme header.php in wordpress editor and drop this shortcode on the same bottom of the file.

= 1.0.3 =
Added auto submit for meta fileds. Added ion.range-slider javascript for beauty range-sliders

= 1.0.2 =
Some php notices are removed. Reset button is added.

= 1.0.1 =
1 bug is fixed

= 1.0.0 =
Plugin is released. Operate all the basic functions.
If you want more functionality, look here: http://codecanyon.net/item/wordpress-meta-data-taxonomies-filter/7002700?ref=realmag777



== License ==

This plugin is copyright pluginus.net ɠ2014 with [GNU General Public License][] by realmag777.

This program is free software; you can redistribute it and/or modify it under
the terms of the [GNU General Public License][] as published by the Free
Software Foundation; either version 2 of the License, or (at your option) any
later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY. See the GNU General Public License for more details.

  [GNU General Public License]: http://www.gnu.org/copyleft/gpl.html


== Upgrade Notice ==
Look here for full functionality plugin and updates: http://codecanyon.net/item/wordpress-meta-data-taxonomies-filter/7002700?ref=realmag777
