<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'diylifes_wp951');

/** MySQL database username */
define('DB_USER', 'diylifes_wp951');

/** MySQL database password */
define('DB_PASSWORD', 'Y2-9B1D)PS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qpwzhe51iarzcpgb9b5wehtivpvw9vxl3uvqcbh0zgowusplvaugg8flnm4vyy6a');
define('SECURE_AUTH_KEY',  'sdhknwdi6hncvxjtjq082qioymtxlzs8h1rkxlz85sgyypyw8nsrr5xsfkglmggu');
define('LOGGED_IN_KEY',    's57scbkigjuhlytnhtpu34zw26h9yugfljepizzupfr3rooacbgpluy0uh8nsi4x');
define('NONCE_KEY',        '6lku8h96cjiynnkhrl3ikwqmrzxcebilsak2riu4mnidp4vms2xqbgqhurrnkccw');
define('AUTH_SALT',        'oeagxvzjzvhkciixxkdlsrqcokegqv7ts7svy0k2uoxbhc40ulykvuv4icsdzd5x');
define('SECURE_AUTH_SALT', 'peeqr1678nh7e3e9x5c0494l6abp55aegmzv2cxnopeicym9ekxccydpjhkk9und');
define('LOGGED_IN_SALT',   'lhaxzru5kareqg5n8pyj6meacodu6pexxgyurf6gokaynbazjchpsnzvtzcebkrg');
define('NONCE_SALT',       'zc3fyknn9ayzl8arlkuvxrarstevpuonsmfpyvwokkqedidpporesnceg9ywzxjn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'diy-lifestyle.org');
define('PATH_CURRENT_SITE', '/wp/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
