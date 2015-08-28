=== Woocommerce PayBox Payment Gateway ===
Contributors: CASTELIS (SWO), Vincent Pintat (Wallie)
Tags: woocommerce, commerce, e-commerce, ecommerce, payment, payment gateway, paybox
Requires at least: 4.0
Tested up to: 4.3
Stable tag: 1.0.1
License: GPLv2 or later 
License URI: http://www.gnu.org/licenses/gpl-2.0.html

PayBox payment gateway for woocommerce.

== Description ==

Payment gateway using Paybox System

== Installation ==

0. Download the appropritate executable at http://www1.paybox.com/telechargement_focus.aspx?cat=3
    Please note that Plug-in uses the CGI as a regular executable, not through a browser

1. Upload to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. copy Paybox CGI (downloaded at step 0) to a directory visible by Apache on your server
4. Be careful to setup permissions for this file (readable, executable by Apache)
5. Change parameters in the Admin dedicated screen (testing Paybox platform by default)
6. Create paybox landing pages using the dedicated button

== Frequently Asked Questions ==

None so far ...

== Upgrade Notice ==

Please desactivate and remove files from old version of this plugin (0.4.6 by SWO Open Boutique) before install ! 

== Changelog ==

= 0.1.0 =
first version.

= 0.2.0 =
Check compatibility wih WooCommerce 2.0

= 0.2.1 =
Improve autoresponse controls and allow webmaster testing.

= 0.2.2 =
Solve an issue blocking parameters saving on Payment Gateways back office.

= 0.2.3 =
Add 2 paybox parameters for callback Cancel or Failed (dedicated URL)

= 0.2.4 =
Change default response code for autoresponse
Empty basket on shortcode

= 0.3.0 =
Solve an issue with Paybox testing platform
Add the ability to create automatically Paybox refused and canceled return pages
Autfill parameters with Paybox testing parameters

= 0.3.1 =
Adding missing Assets

= 0.3.2 =
Bug in plugin logo

= 0.3.4 =
Restore short-code for received page
Improve support form
Add automatic creation for Paybox order received page including dedicated shortcode
Add a new parameter to allow changing the delay before redirecting to pay box gateway while checkout

= 0.3.5 =
Upgrade to follow last Paybox specs at http://www1.paybox.com/telechargements/ManuelIntegrationPayboxSystem_V6.1_FR.pdf (27/11/2013)

= 0.3.6 =
Issue correction while redirection timeout is not set / 3000 ms by default

= 0.4.0 =	
Fix links when using multisite with sub-directories
Fix non-default DB prefix
Improve checks on pages creation
Add security when activating plugin
Add FR & US translations
Rename shortcode
Update paybox image
Code cleanup & Optimizations
Check compatibility with WordPress 3.8

= 0.4.1 =
Fixing missing files in SVN

= 0.4.5 =
Compatibility with Woo 2.X

= 0.4.6 =
Add HMAC capability

= 1.0.1 =
Forked by Vincent Pintat http://walliecreation.com
Remove Open Boutique (initial author) support functionnalities
Change textdomain to "paybox_gateway"
Code partially rewrite for compatibility with  Woo 2.4.6
