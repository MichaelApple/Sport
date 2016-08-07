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
define('DB_NAME', 'commerce');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ';x9rH4y1USYClU945<#cIG~:X}/M,0ez~xvt*sy-.(j)|q/]DcC>wuo;k-P;7F)-');
define('SECURE_AUTH_KEY',  'FLm_v9kY.*qfa+h6aL+=%jAr`6f5&~YoR2C>QQ-EBQuzE,)u^Us`CK[5#O(Obj|{');
define('LOGGED_IN_KEY',    'Z9#Kv-M0c{0SEf)0Z0<U -Jv>tl(VhmFa/&LC/PM:>k-w_8h]Xl&Rd1!%H|.jF6v');
define('NONCE_KEY',        'Tu6H{&N8lIk CevU)P+YekL]6CIzf*-j i}(.kGq~ `o:v:n0lCYe]71if/7*{bP');
define('AUTH_SALT',        'RJ3?p,MJRp1~22eO{<N.ywH-b~(W}|L>S$e_,.E[.pxdBR.6)Av-4#r*LcbxB7=i');
define('SECURE_AUTH_SALT', 'h<Bk!gD1|z)]Yg7ZF.y]HcjY}&Y3OK&(2%|AsKHh|)+#+L>,)rm[^A?lqo&`&3GI');
define('LOGGED_IN_SALT',   '`ay5o<;W}R*onGdX?k(Z~D^f`v^.Za$LO[%$ wk.J<sa6|SXU+y{8<mCq*0C aU]');
define('NONCE_SALT',       'VGb+ V$]OibW9U4e*^+mpQ$4O3e)?g~t-#G^F-Km,|_AI?x<oY-=>J)goy][R[#y');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
