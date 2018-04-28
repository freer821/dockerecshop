=== Plugin Name ===
Contributors: freer
Donate link:
Tags: woocommerce, alipay
Requires at least: 4.0
Tested up to: 4.9.5
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Integrate Alipay with Woocommerce. Alipay is one of the most widely used payment method.

== Description ==

Integrate Alipay with WooCommerce. To use this payment gateway, you need to sign a contract with Alipay, check out [Alipay Merchant Service](https://b.alipay.com/newIndex.htm "Alipay Merchant Service") for more information.

= Features: =

* Support three payment methods of Alipay: Direct Payment,Escrow Payment and both.
* Allow to set an exchange rate if the main currency is not Chinese Yuan.
* Automatic delivery for products that are both vitual and downloadable.

= Requirement: =

* You must have <a href="http://wordpress.org/extend/plugins/woocommerce/">WooCommerce</a>(Version 2.2.0 and above) plugin installed.
* cURL must be enabled for your server.
* You must have an account at www.alipay.com.

== Installation ==

1. Make sure you already have Woocommerce installed and activated.
2. Upload the folder alipay-for-woocommerce to the `/wp-content/plugins/` directory
3. Activate the plugin named <strong>Alipay For WooCommerce</strong> through the 'Plugins' menu in WordPress
4. Setup your alipay account throuth <strong>Woocommerce -> Settings -> Payment Gateways -> Alipay</strong>.
5. If the main currency of your store is not Chinese Yuan, please also set the exchange rate so that Alipay can convert the price to Chinese Yuan.


= What is Partner ID and Security Key? =

Partner ID and Security Key are provided by alipay once you successfully registered and signed a contract with alipay. They are a must if you want to receive payment with alipay.

= Alipay doesn't show up on the checkout page, why? =

If the main currency of your store is not Chinese Yuan, please make sure you set the exchange rate through <strong>Woocommerce -> Settings -> Payment Gateways -> Alipay</strong> page.

= I got an ILLEGAL_PARTNER error when placing order? =

Please make sure your account is registered at http://global.alipay.com/.

= I got an ILLEGAL_SIGN error when placing order? =

Please check the "Use form submission method" box and see if it solves your problem. If not, please leave us a message at our website.
