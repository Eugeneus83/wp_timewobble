TimeWobble is helpful for calculating future times for different remote locations and includes Daylight saving times - for today or any time in the future.

TimeWobble calculates the time for a remote location based on the time of your local location at a specified date. That could be right now, or next week, or next year.

## Demo

A demo of the frontend functionality is available at https://wp.yevhenlysenko.org/time-wobble/.

## Installation

Manual installation works just as for other WordPress plugins:

1. [Download](https://wp.yevhenlysenko.org/downloads/time-wobble.zip) and extract the ZIP file.
2. Move the folder “time-wobble” to the “wp-content/plugins/” directory of your WordPress installation, e.g. via FTP.
3. Activate the plugin “Time Wobble” on the “Plugins” screen of your WordPress Dashboard.
4. Find "Time Wobble" menu item it will bring you to settings page. Enter and save your Google Map key. 
5. To insert a Time Wobble form into a post or page, add a shortcode “[time_wobble]” in the block editor and save the page.

### The next steps are not mandatory but will provide your default location to the plugin    
6. Run "composer install" in command line interface, e.g. via SSH.
7. [Download](https://wp.yevhenlysenko.org/downloads/mmdb.zip) and extract the ZIP file.
8. Move the folder “mmdb” folder to the “wp-content/plugins/time-wobble” directory.

**Requirements?**

In short: WordPress 6.0 or higher, while the latest version of WordPress is always recommended. In addition, the server must be running PHP 7.2 or newer.

## How to use TimeWobble

After installing the plugin and setup your Google Map key in plugin settings, you can put shortcode [time_wobble] to the page you like to display it on. 
When its done you can see the form with different locations on this page and you are able to add new remote locations and calculate the time for them based on your local destination.
