# woocommerce-paybox-gateway1.0.1
Evolution of existing WC Paybox Gateway [by Open boutique](https://wordpress.org/plugins/woocommerce-paybox-gateway/) to be compatible with WooCommerce 2.4.5 and up...
Please read readme.txt for more informations and changelog

## Fix these errors after upgrading WC 2.4.5 when user clicks on "Place order" button on checkout page
* Chrome: “SyntaxError: Unexpected token < "
* Firefox: "SyntaxError: JSON.parse: unexpected character at line 1 column 1 of the JSON data"
* IE: "SyntaxError: Invalid character"

## Fix return_url (Paybox IPN)
The IPN url is now by default your website home url.
So no /autoresponse page is needed
