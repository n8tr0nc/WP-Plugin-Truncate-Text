==Truncate Text WordPress Plugin==
Contributors: nchisley
Donate link: https://natechisley.com/donate
Tags: text truncation, shortcodes, content formatting, ellipsis
Requires at least: 5.0
Tested up to: 6.1
Stable tag: 1.0.0
License: GPLv2 or later (or compatible)
License URI: https://www.gnu.org/licenses/gpl-2.0.html

==Description==
Truncate Text is a simple WordPress plugin that allows you to truncate the text of your posts and pages. This plugin can be used to create short versions of content, like usernames, crypto wallet addresses, etc.

==Installation==
-Log in to your WordPress site as an administrator.
-Go to the "Plugins" section in the WordPress dashboard.
-Click "Add New" and then click the "Upload Plugin" button.
-Choose the truncate-text.zip file from your computer and click "Install Now."
-After the installation is complete, click the "Activate Plugin" button.

==Usage==
-Use the [truncate-text] shortcode in your post or page content to truncate the text.
-Specify the number of characters you want to display using the limit attribute. For example: [truncate-text limit="8"]Text to truncate[/truncate-text]. The defult is 6.
- Specify the encoding you would like to use by using the encoding attribute. For example: [truncate-text limit="8" encoding="ISO-8859-1"]. The default is UTF-8.
-This plugin will also process other shortcodes in the content before truncating it. To use the truncate-shortcode feature, use [truncate-shortcode][another-shortcode][/truncate-shortcode].
- Use the same attributes when truncating shortcode.

==Support==
If you have any questions or issues with this plugin, please reach out to us through our support channel. We'll be happy to help!

Contributing
We welcome contributions to this plugin. If you would like to contribute, please follow our guidelines for contributing.

==Screenshots==
1-Truncate Text Example
2-Truncate Shortcode Example

==Changelog==
1.0.0
-Initial release of the Truncate Text plugin.
-Includes the [truncate-text] shortcode and the [truncate-shortcode] shortcode.
