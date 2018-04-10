<?php
defined('WYSIJA') or die('Restricted access');
/**
 * List of all add-ons available for MailPoet
 */
function add_ons_list(){
	$available_add_ons = array(
		array(
			'name' 				=> 'WooCommerce: Subscribe on Checkout',
			'search' 			=> 'MailPoet WooCommerce Add-on',
			'thumbnail' 		=> 'woocommerce.png',
			'description' 		=> __( 'Add a checkbox on checkout page for your customers to subscribe to your MailPoet newsletters.', WYSIJA ),
			'plugin_url' 		=> 'mailpoet-woocommerce-addon/mailpoet-woocommerce-addon.php',
			'version' 			=> '1.0.2',
			'config_url' 		=> 'admin.php?page=woocommerce_settings&tab=mailpoet',
			'official' 			=> true,
			'on_wordpress.org' 	=> true,
			'free' 				=> true,
			'service' 			=> false,
			'requires' 			=> 'woocommerce/woocommerce.php',
			'requires_name' 	=> 'WooCommerce',
		),

		array(
			'name' 				=> 'Autoresponders for WooCommerce Products',
			'search' 			=> 'Autoresponders for WooCommerce Products',
			'thumbnail' 		=> 'woocommerce.png',
			'description' 		=> __( 'Decide which emails a new customer gets automatically, based on the product he just purchased. This a Premium add-on for WooCommerce.', WYSIJA ),
			'review' 			=> '',
			'plugin_url' 		=> '',
			'author_url' 		=> 'http://clicky.me/woocommerce-autoresponder',
			'purchase_url' 		=> 'http://clicky.me/woocommerce-autoresponder',
			'version' 			=> '1.0.1',
			'official' 			=> true,
			'on_wordpress.org' 	=> false,
			'free' 				=> false,
			'service' 			=> false,
		),

		array(
			'name' 				=> 'Jigoshop: Subscribe on Checkout',
			'search' 			=> 'MailPoet Jigoshop Add-on',
			'thumbnail' 		=> 'jigoshop.png',
			'description' 		=> __( 'Add a checkbox on checkout page for your customers to subscribe to your MailPoet newsletters.', WYSIJA ),
			'plugin_url' 		=> 'mailpoet-jigoshop-addon/mailpoet-jigoshop-addon.php',
			'version' 			=> '1.0.3',
			'config_url' 		=> 'admin.php?page=jigoshop_settings&tab=mailpoet',
			'official' 			=> true,
			'on_wordpress.org' 	=> true,
			'free' 				=> true,
			'service' 			=> false,
			'requires' 			=> 'jigoshop/jigoshop.php',
			'requires_name' 	=> 'Jigoshop',
		),

		array(
			'name' 				=> 'Gravity Forms: Subscribe Add-on',
			'search' 			=> 'MailPoet Gravity Forms Add-on',
			'thumbnail' 		=> 'gravity-forms.png',
			'description' 		=> __( 'Add a new field to add to your forms so your visitors can subscribe to your MailPoet newsletters.', WYSIJA ),
			'plugin_url' 		=> 'mailpoet-gravity-forms-addon/mailpoet-gravity-forms-addon.php',
			'version' 			=> '1.0.0',
			'official' 			=> true,
			'on_wordpress.org' 	=> true,
			'free' 				=> true,
			'service' 			=> false,
			'requires' 			=> 'gravityforms/gravityforms.php',
			'requires_name' 	=> 'Gravity Forms',
		),

		array(
			'name' 				=> 'WP e-Commerce: Subscribe on Checkout',
			'search' 			=> 'MailPoet WP e-Commerce Add-on',
			'thumbnail' 		=> 'wp-e-commerce.png',
			'description' 		=> __( 'Add a checkbox on checkout page for your customers to subscribe to your MailPoet newsletters.', WYSIJA ),
			'plugin_url' 		=> 'mailpoet-wp-ecommerce-addon/mailpoet-wp-ecommerce-addon.php',
			'version' 			=> '1.0.0',
			'config_url' 		=> 'edit.php?post_type=wpsc-product&page=mailpoet',
			'official' 			=> true,
			'on_wordpress.org' 	=> true,
			'free' 				=> true,
			'service' 			=> false,
			'requires' 			=> 'wp-e-commerce/wp-shopping-cart.php',
			'requires_name' 	=> 'WP e-Commerce',
		),

		array(
			'name' 				=> 'Restrict Content Pro: Registration Add-on',
			'search' 			=> 'Restrict Content Pro Wysija',
			'thumbnail' 		=> 'pippins.png',
			'description' 		=> __( 'Add a checkbox on the registration form of this plugin so your new users join a list of your choice.', WYSIJA ),
			'plugin_url' 		=> 'restrict-content-pro-wysija/rcp-wysija.php',
			'version' 			=> '1.0',
			'official' 			=> true,
			'on_wordpress.org' 	=> true,
			'free' 				=> true,
			'service' 			=> false,
			'requires' 			=> 'restrict-content-pro/restrict-content-pro.php',
			'requires_name' 	=> 'Restrict Content Pro',
		),

		array(
			'name' 				=> 'Contact Form 7: MailPoet Add-on',
			'search' 			=> 'MailPoet Contact Form 7',
			'thumbnail' 		=> 'cf7.png',
			'description' 		=> __( 'Add a checkbox in your forms, and choose which lists the user gets added to.', WYSIJA ),
			'plugin_url' 		=> 'mailpoet-contact-form-7/mailpoet-contact-form-7.php',
			'author_url' 		=> '',
			'version' 			=> '1.0.0',
			'official' 			=> true,
			'on_wordpress.org' 	=> true,
			'free' 				=> true,
			'service' 			=> false,
			'requires' 			=> 'contact-form-7/wp-contact-form-7.php',
			'requires_name' 	=> 'Contact Form 7',
		),

		array(
			'name' 				=> 'WangGuard: MailPoet Connector',
			'search' 			=> 'WangGuard Wysija Newsletter Connector',
			'thumbnail' 		=> 'wangguard.png',
			'description' 		=> __( 'Stop fake signups by robots with WangGuard, a free white listing service, and plugin.', WYSIJA ),
			'review' 			=> __( 'If you have this problem, then this is your solution. Totally free too.', WYSIJA ),
			'plugin_url' 		=> 'wangguard-wysija-newsletter-connector/wangguard-wysija.php',
			'author_url' 		=> 'http://clicky.me/wangguard',
			'version' 			=> '1.0.0',
			'official' 			=> true,
			'on_wordpress.org' 	=> true,
			'free' 				=> true,
			'service' 			=> false,
			'requires' 			=> '',
		),

		array(
			'name' 				=> 'Leaky Paywall: MailPoet Add-on',
			'search' 			=> 'Leaky Paywall: MailPoet Add-on',
			'thumbnail' 		=> 'leakypw.png',
			'description' 		=> __( 'Leaky Paywall is a Premium plugin to put content behind a paywall. This add-on manages your customers\' customers subscriptions.', WYSIJA ),
			'plugin_url' 		=> 'leaky-paywall-mail-poet/issuem-leaky-paywall-mailpoet.php',
			'author_url' 		=> 'http://clicky.me/leakypw',
			'version' 			=> '1.0.0',
			'official' 			=> true,
			'on_wordpress.org' 	=> true,
			'free' 				=> true,
			'service' 			=> false,
		),

		array(
			'name' 				=> 'GetConversion: Bar and Box Forms Add-on',
			'search' 			=> 'GC MailPoet EX',
			'thumbnail' 		=> 'getconversion.png',
			'description' 		=> __( 'Put a form in a top or bottom bar of your site, or in a nice box within your posts with GetConversion\'s free plugins. Connect them to MailPoet with this add-on.<br/></br>Get 30% off the Premium version of their add-on by clicking <a href="http://getconversion.com/products/gc-mailpoet-ex-pro/?coupon=MAILPOET">here</a>.', WYSIJA ),
			'review' 			=> __( 'Try it yourself, we were impressed by the free versions.', WYSIJA ),
			'plugin_url' 		=> 'gc-message-bar/main.php',
			'author_url' 		=> 'http://clicky.me/GC-add-on',
			'version' 			=> '1.0.0',
			'official' 			=> true,
			'on_wordpress.org' 	=> true,
			'free' 				=> true,
			'service' 			=> false,
		),

		/* Below is the list of services that work with MailPoet */

		array(
			'name' 				=> 'OptinMonster: Slick Forms',
			'search' 			=> 'OptinMonster: slick forms',
			'thumbnail' 		=> 'optinmonster.png',
			'description' 		=> __( 'Put a subscription form in a popup, footer bar or slide-in to add subscribers with this Premium plugin.', WYSIJA ),
			'review' 			=> __( 'The authors have done a pretty awesome job.', WYSIJA ),
			'plugin_url' 		=> '',
			'author_url' 		=> 'http://clicky.me/optinmonsteraddon',
			'purchase_url' 		=> '',
			'version' 			=> '',
			'official' 			=> false,
			'on_wordpress.org' 	=> false,
			'free' 				=> false,
			'service' 			=> true,
			'premium_offer' 	=> __( 'Premium users save 20% with this coupon: MP20', WYSIJA ),
		),

		array(
			'name' 				=> 'Pippity: Form in a Popup',
			'search' 			=> 'Pippity: form in a popup',
			'thumbnail' 		=> 'pippity.png',
			'description' 		=> __( 'This Premium plugin allows you to add a MailPoet form in a popup.', WYSIJA ),
			'review' 			=> __( 'You\'ll need to know CSS to design it to your taste.', WYSIJA ),
			'plugin_url' 		=> '',
			'author_url' 		=> 'http://clicky.me/pippity',
			'purchase_url' 		=> '',
			'version' 			=> '',
			'official' 			=> false,
			'on_wordpress.org' 	=> false,
			'free' 				=> false,
			'service' 			=> true,
			'premium_offer' 	=> __( 'Premium users save 25% with this coupon: mailpoet25', WYSIJA ),
		),


		array(
			'name' 				=> 'Hybrid Connect: Forms and Facebook',
			'search' 			=> 'Hybrid Connect: forms and Facebook',
			'thumbnail' 		=> 'hybrid-connect.png',
			'description' 		=> __( 'This Premium plugin allows you to add MailPoet\'s forms in many places, and in Facebook.', WYSIJA ),
			'review' 			=> __( 'Very powerful, if not a quirky user interface.', WYSIJA ),
			'plugin_url' 		=> '',
			'author_url' 		=> 'http://clicky.me/hybrid-connect',
			'purchase_url' 		=> '',
			'version' 			=> '',
			'official' 			=> false,
			'on_wordpress.org' 	=> false,
			'free' 				=> false,
			'service' 			=> true,
			'premium_offer' 	=> '',
		),

		array(
			'name' 				=> 'Magic Action Box: Pretty forms in post',
			'search' 			=> 'Magic Action Box: pretty forms in post',
			'thumbnail' 		=> 'magic-action-box.png',
			'description' 		=> __( 'This free plugin allows you to design and position a form at the beginning or bottom of a post.', WYSIJA ),
			'review' 			=> __( 'It\'s free, and has proven popular with our users.', WYSIJA ),
			'plugin_url' 		=> '',
			'author_url' 		=> 'http://clicky.me/magic-action-box',
			'purchase_url' 		=> '',
			'version' 			=> '',
			'official' 			=> false,
			'on_wordpress.org' 	=> false,
			'free' 				=> false,
			'service' 			=> true,
			'premium_offer' 	=> '',
		),

            array(
			'name' 				=> 'wBounce: Exit popup forms',
			'search' 			=> 'wBounce',
			'thumbnail' 		=> 'wbounce-forms.jpg',
			'description' 		=> __( 'Exit popups are not only "in vogue", they are provably increasing conversions and therefore boost marketing, signups and sales. wBounce displays an inline popup before the user leaves your site.', WYSIJA ),
			'review' 			=> __( 'Exit popup will appear when your cursor leaves the window.', WYSIJA ),
			'plugin_url' 		=> 'wbounce/wbounce.php',
			'author_url' 		=> 'http://clicky.me/wbounce',
			'version' 			=> '1.4',
			'official' 			=> true,
			'on_wordpress.org' 	=> true,
			'free' 				=> true,
			'service' 			=> false,
			'requires' 			=> '',
		),
		array(
			'name' 				=> 'Optin Revolution: Popup form',
			'search' 			=> 'Optin Revolution: popup form',
			'thumbnail' 		=> 'optin-revolution.png',
			'description' 		=> __( 'This free plugin allows you to put a form in a popup, that\'s it.', WYSIJA ),
			'review' 			=> __( 'This is the free version of a more powerful Premium version.', WYSIJA ),
			'plugin_url' 		=> '',
			'author_url' 		=> 'http://clicky.me/optin-revolution',
			'purchase_url' 		=> '',
			'version' 			=> '',
			'official' 			=> false,
			'on_wordpress.org' 	=> false,
			'free' 				=> false,
			'service' 			=> true,
			'premium_offer' 	=> '',
		),

		array(
			'name' 				=> 'Ultimate Coming Soon Page',
			'search' 			=> 'Ultimate Coming Soon Page',
			'thumbnail' 		=> 'ultimate-coming-soon.png',
			'description' 		=> __( 'Your new site is not yet launched? Put a coming soon page with a form to capture emails with this Premium plugin.', WYSIJA ),
			'review' 			=> __( 'A well designed plugin for a simple idea.', WYSIJA ),
			'plugin_url' 		=> '',
			'author_url' 		=> 'http://clicky.me/coming-soon',
			'purchase_url' 		=> '',
			'version' 			=> '',
			'official' 			=> false,
			'on_wordpress.org' 	=> false,
			'free' 				=> false,
			'service' 			=> true,
			'premium_offer' 	=> __( 'Premium users save 20% with this coupon: MAILPOET20', WYSIJA ),
		),

		array(
			'name' 				=> 'Plugmatter: form below your header',
			'search' 			=> 'Plugmatter',
			'thumbnail' 		=> 'plugmatter.png',
			'description' 		=> __( 'This Premium plugin allows you to put a pretty form right below the header. Nothing more, nothing less.', WYSIJA ),
			'review' 			=> '',
			'plugin_url' 		=> '',
			'author_url' 		=> 'http://clicky.me/plugmatter',
			'purchase_url' 		=> '',
			'version' 			=> '',
			'official' 			=> false,
			'on_wordpress.org' 	=> false,
			'free' 				=> false,
			'service' 			=> true,
			'premium_offer' 	=> '',
		),

		array(
			'name' 				=> 'EDD: MailPoet: Subscribe on Checkout',
			'search' 			=> 'Easy Digital Downloads - MailPoet',
			'thumbnail' 		=> 'easy-digital-downloads.png',
			'description' 		=> __( 'A checkbox is added as option for your customers to signup for your newsletter while purchasing from your digital store.', WYSIJA ),
			'review' 			=> '',
			'plugin_url' 		=> '',
			'author_url' 		=> 'http://clicky.me/easy-digital-downloads',
			'purchase_url' 		=> 'http://clicky.me/easy-digital-downloads',
			'version' 			=> '1.1.2',
			'official' 			=> false,
			'on_wordpress.org' 	=> false,
			'free' 				=> false,
			'service' 			=> false,
			'requires' 			=> 'easy-digital-downloads/easy-digital-downloads.php',
			'requires_name' 	=> 'Easy Digital Downloads',
			'premium_offer' 	=> '',
		),

		array(
			'name' 				=> 'Ninja Forms: Subscribe Add-on',
			'search' 			=> 'Ninja Forms: Subscribe Add-on',
			'thumbnail' 		=> 'ninja-forms.png',
			'description' 		=> __( 'Quickly create newsletter signup forms for your MailPoet mailing lists using the power and flexibility that Ninja Forms provides.', WYSIJA ),
			'review' 			=> '',
			'plugin_url' 		=> 'ninja-forms-mailpoet/nf-mailpoet.php',
			'author_url' 		=> 'http://clicky.me/ninja-forms',
			'purchase_url' 		=> 'http://clicky.me/ninja-forms',
			'version' 			=> '1.0.1',
			'official' 			=> false,
			'on_wordpress.org' 	=> false,
			'free' 				=> true,
			'service' 			=> false,
			'requires' 			=> 'ninja-forms/ninja-forms.php',
			'requires_name' 	=> 'Ninja Forms',
			'premium_offer' 	=> '',
		),

		array(
			'name' 				=> 'Multilingual Press',
			'search' 			=> 'Multilingual Press',
			'thumbnail' 		=> 'multilingual-press.jpg',
			'description' 		=> __( 'We recommend this plugin as the good alternative to WPML for multilingual sites. It\'s lean, straightforward, and leaves your site\'s core largely untouched. Each language has its own site in your WordPress Multisite install. Works great with MailPoet.', WYSIJA ),
			'review' 			=> '',
			'plugin_url' 		=> 'multilingual-press/multilingual-press.php',
			'author_url' 		=> 'http://clicky.me/multilingual-press',
			'purchase_url' 		=> 'http://clicky.me/multilingual-press',
			'version' 			=> '2.0.3',
			'official' 			=> true,
			'on_wordpress.org' 	=> true,
			'free' 				=> true,
			'service' 			=> false,
			'requires' 			=> 'multilingual-press/multilingual-press.php',
			'requires_name' 	=> 'Multilingual Press',
			'premium_offer' 	=> '',
		),
	);

	return $available_add_ons;
}