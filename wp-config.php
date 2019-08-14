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
define('DB_NAME', 'tminfote_vnahg');

/** MySQL database username */
define('DB_USER', 'tminfote_james');

/** MySQL database password */
define('DB_PASSWORD', 'L66}@xlVixhs');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'nxO#Zo{3U)Y$VU 23Jrj[DI(EM~@]-[?1GD$5jCX PF4IlcD#qpT0Rh_g(@Aognt');
define('SECURE_AUTH_KEY',  'GtQ}}{&EFl]WAkO|N^0yPf&?pL0{MbE*.5Fon-4(c_W42a|B+8VsMcqV[Iat%py1');
define('LOGGED_IN_KEY',    ')Z2ZdQaD;DT~@MGsVhXs5&V!-Uv.f,N^UN!9m&A9fwVp |!5|fRyJRT)Eei }R?0');
define('NONCE_KEY',        ':(IH{B><mWZ9Xk9tu&hYpdsVUBf0L0 l9:N3t?aO@.vpM)ffYm@ E>orvZB5PtgR');
define('AUTH_SALT',        '5ybjKlnAyI=M/Ri9oU&_EWeeLE7@h.S@h;8762(|:6BTZ3|7#BSNKV=|33aqg@?5');
define('SECURE_AUTH_SALT', '9w0}5YH=Pk;ul{~[)r$af:f28hA7Fhh^<x.^ZW] $r^6J,-d. *:J.;%YeTvg*7]');
define('LOGGED_IN_SALT',   '])@GtsXW`BtQID223>JG`_sl_(2-dX%@fH6f%=0I^(]v_rJM?-Yu!/DI..t~ixHo');
define('NONCE_SALT',       'uNdX5R<pM+#^dBqG-<6=bVYN[Eq`MzWFC|!snoG+P](L?t3CW>/.+.K2(7yRkO}b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpvn_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
