<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'medtimeDB4tlfw');

/** MySQL database username */
define('DB_USER', 'medtimeDB4tlfw');

/** MySQL database password */
define('DB_PASSWORD', 'AhYPHB5ysj');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'lO-odRGhRK8:!C1|-l|-pdOaPD2#H6]*t;.uiXymbPE2lWOD1SH5]~t;*tiWxmaPD');
define('SECURE_AUTH_KEY',  't+laO~sdVKhV5[K9:_w1#-pZiWL9;_D2#+q]*tiXxmbPE2hWK9:OD1#+2#+pe*tiW');
define('LOGGED_IN_KEY',    'GZOG5:cVJC4[!C4:!zog|-sgZNshZNG4:.xpeWPqiWPH6;PHA;#+t;<+uma;_-phW');
define('NONCE_KEY',        '4N8}!QF3>$r}^ynY$rgUJBcQF3>-odRG5VOC1|~9:_wl#-pdS!wkZNCdRG4[K8:!w');
define('AUTH_SALT',        '**pePbQE3<$7{^uf^ujYUI7{bPE2{MA{*u<$qfTujXMA}|vkYNocRF8ZNC0|z4[3');
define('SECURE_AUTH_SALT', 'hxiSHiWL9;_D2#+mYMB3<I7>$r}^vjYMnYMBjXMAQE3<$q{^ufXynbQENC4>@r|');
define('LOGGED_IN_SALT',   '!kVJkZJ8}NC0|zo[@sdReSH5]L9;_x2_xla+peSH6lZOC1SG5[~9:_wlZ-pdOD<$');
define('NONCE_SALT',       ';6<xm<+qeTuiXLA>@rgUvkYNBYNB0,z4>@rg,ynb$rfUI7YJ7}^B0,zn-kZOCdSG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
