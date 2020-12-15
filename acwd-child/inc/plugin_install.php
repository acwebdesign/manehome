<?php
/*
**********  Activation des modules requis  *******************


* Classic editor
* ACF PRO avec clé de licence b3JkZXJfaWQ9NjAzNzd8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE1LTA3LTIxIDE4OjQzOjQ5
* Slider header
* Preview calendrier home - utiliser le gestionnaire d'évènements actuel, refaire l'affichage
* CF7 pour remplacer Formidable => convertir Formidable en CF7 en BDD
* 
* 
**********  Récupération du css manquant lors de la désactivation des plugins  *******************

Créer un fichier de css à appeler par enqueue_style

**********  Désactivation des modules non nécessaires  *******************

*/
require_once dirname( __FILE__ ) . '/../plugins/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'ffk_register_required_plugins' );

function ffk_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		// array(
			// 'name'               => 'TGM Example Plugin', // The plugin name.
			// 'slug'               => 'tgm-example-plugin', // The plugin slug (typically the folder name).
			// 'source'             => get_stylesheet_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
			// 'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			// 'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			// 'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			// 'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			// 'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			// 'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		// ),
		array(
			'name'               => 'Advanced Custom Fields Multilingual', // The plugin name.
			'slug'               => 'acfml', // The plugin slug (typically the folder name).
			'source'             => 'https://wpml.org/?download=1097589&user_id=201463&subscription_key=c9950f3cac51997eba4443b065aed39c&t=1559748844',
			// 'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'               => 'Advanced Taxonomy Terms Order', // The plugin name.
			'slug'               => 'advanced-taxonomy-terms-order', // The plugin slug (typically the folder name).
			'source'             => 'https://www.nsp-code.com/?download_file=371&order=wc_order_7jj6XWDEKtZIK&email=aconte%40acwd.fr&key=c803b44204eb182d48dbefb35ee25291',
			// 'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'               => 'Contact Form 7 Multilingual', // The plugin name.
			'slug'               => 'contact-form-7-multilingual', // The plugin slug (typically the folder name).
			'source'             => 'https://wpml.org/?download=3156699&user_id=201463&subscription_key=c9950f3cac51997eba4443b065aed39c&t=1559748844',
			// 'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'               => 'Yoast SEO Multilingual', // The plugin name.
			'slug'               => 'wp-seo-multilingual', // The plugin slug (typically the folder name).
			'source'             => 'https://wpml.org/?download=3566177&user_id=201463&subscription_key=c9950f3cac51997eba4443b065aed39c&t=1559748844', 
			// 'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'               => 'WooCommerce Multilingual', // The plugin name.
			'slug'               => 'woocommerce-multilingual', // The plugin slug (typically the folder name).
			'source'             => 'https://downloads.wordpress.org/plugin/woocommerce-multilingual.4.6.3.zip', 
			// 'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),

		// This is an example of how to include a plugin from an arbitrary external source in your theme.
		// array(
			// 'name'         => 'TGM New Media Plugin', // The plugin name.
			// 'slug'         => 'tgm-new-media-plugin', // The plugin slug (typically the folder name).
			// 'source'       => 'https://s3.amazonaws.com/tgm/tgm-new-media-plugin.zip', // The plugin source.
			// 'required'     => true, // If false, the plugin is only 'recommended' instead of required.
			// 'external_url' => 'https://github.com/thomasgriffin/New-Media-Image-Uploader', // If set, overrides default API URL and points to an external URL.
		// ),
		array(
			'name'         => 'WPML Multilingual CMS', // The plugin name.
			'slug'         => 'sitepress-multilingual-cms', // The plugin slug (typically the folder name).
			'source'       => 'https://wpml.org/?download=6088&user_id=201463&subscription_key=c9950f3cac51997eba4443b065aed39c&t=1559745534', // The plugin source.
			// 'required'     => true, // If false, the plugin is only 'recommended' instead of required.
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),

		// This is an example of how to include a plugin from a GitHub repository in your theme.
		// This presumes that the plugin code is based in the root of the GitHub repository
		// and not in a subdirectory ('/src') of the repository.
		// array(
			// 'name'      => 'Adminbar Link Comments to Pending',
			// 'slug'      => 'adminbar-link-comments-to-pending',
			// 'source'    => 'https://github.com/jrfnl/WP-adminbar-comments-to-pending/archive/master.zip',
		// ),
		
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		// array(
			// 'name'      => 'BuddyPress',
			// 'slug'      => 'buddypress',
			// 'required'  => false,
		// ),
		array(
			'name'      => 'Advanced Custom Fields PRO',
			'slug'      => 'advanced-custom-fields-pro',
			'source'    => 'https://github.com/wp-premium/advanced-custom-fields-pro/archive/master.zip',
			'required'  => true,
			'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'WPML Translation Management',
			'slug'      => 'wpml-translation-management',
			'source'    => 'https://github.com/wp-premium/wpml-translation-management/archive/master.zip',
			// 'required'  => true,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'WPML String Translation',
			'slug'      => 'wpml-string-translation',
			'source'    => 'https://github.com/wp-premium/wpml-string-translation/archive/master.zip',
			// 'required'  => true,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'Redirection',
			'slug'      => 'redirection',
			// 'required'  => true,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'Site Kit by Google',
			'slug'      => 'google-site-kit',
			'required'  => true,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'Duplicate Post',
			'slug'      => 'duplicate-post',
			'required'  => true,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'Flow-Flow Social Stream',
			'slug'      => 'flow-flow-social-streams',
			// 'required'  => true,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'Really Simple SSL',
			'slug'      => 'really-simple-ssl',
			'required'  => true,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'Contact Form 7 Database Addon – CFDB7',
			'slug'      => 'contact-form-cfdb7',
			'required'  => true,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'Wordfence Security – Firewall & Malware Scan',
			'slug'      => 'wordfence',
			'required'  => true,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'Classic Editor',
			'slug'      => 'classic-editor',
			'required'  => true,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			// 'required'  => true,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'Cookie Notice for GDPR',
			'slug'      => 'cookie-notice',
			'required'  => true,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'Yoast SEO',
			'slug'      => 'wordpress-seo',
			'required'  => true,
			// 'required'  => false,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			// 'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'WP phpMyAdmin',
			'slug'      => 'wp-phpmyadmin-extension',
			'required'  => true,
			// 'required'  => false,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			// 'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		array(
			'name'      => 'Regenerate Thumbnails',
			'slug'      => 'regenerate-thumbnails',
			'required'  => true,
			// 'required'  => false,
			// 'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			// 'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),


		// This is an example of the use of 'is_callable' functionality. A user could - for instance -
		// have WPSEO installed *or* WPSEO Premium. The slug would in that last case be different, i.e.
		// 'wordpress-seo-premium'.
		// By setting 'is_callable' to either a function from that plugin or a class method
		// `array( 'class', 'method' )` similar to how you hook in to actions and filters, TGMPA can still
		// recognize the plugin as being installed.
		// array(
			// 'name'        => 'WordPress SEO by Yoast',
			// 'slug'        => 'wordpress-seo',
			// 'is_callable' => 'wpseo_init',
		// ),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
			'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'theme-slug' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'theme-slug' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'theme-slug' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'theme-slug'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'theme-slug'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'theme-slug'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'theme-slug'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'theme-slug'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'theme-slug'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'theme-slug'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'theme-slug'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'theme-slug'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'theme-slug' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'theme-slug' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'theme-slug' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'theme-slug' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'theme-slug' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'theme-slug' ),
			'dismiss'                         => __( 'Dismiss this notice', 'theme-slug' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'theme-slug' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'theme-slug' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}
