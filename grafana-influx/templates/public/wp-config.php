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
define('DB_NAME', 'wp_db');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'MatiGlita123');

/** MySQL hostname */
define('DB_HOST', '{{db_node_ip}}');

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
define('AUTH_KEY',         'u&ikHQ=]`JJ_UUDW${4IhJ`TZ}`n=V=fM?h *T2AD+[3h-AqVn%zv;f {,nW+.ry');
define('SECURE_AUTH_KEY',  'x4Cpe0nYuT}gPK)Uq;=j{2t-qV?mv%CH{8&{DOr:zRk%SN_OI*C8SEPThq,t>mIo');
define('LOGGED_IN_KEY',    'bay*BN,+ic)~C:iA5^@E4s322:lEE[yf|3}5/Lh)v!i% 8u?HvSkMl|>}*ipiw,n');
define('NONCE_KEY',        'TWL/4q=`2CT3_m^8#xp3K6qE FD4`Z$<&~{2VFL|#uL*RKWrQg9NwWQoX!V+`pD$');
define('AUTH_SALT',        '&etY~,1.*b8l9;GYe1yr<z<>-.[mt/iC_K=RUqL{<@ilT <[FfJY8c2Cp)/L0V0b');
define('SECURE_AUTH_SALT', ';c~Mu,zZ+PiDd.KIg2,!8-vxGwzRjwwg]ysMP>RSRMJ|K: ED==5I-{U4J*nRY)0');
define('LOGGED_IN_SALT',   'v,qI:r7: uGu[V7n740A:v+K?Ta6U<,!f%cuYL~3?O&Y`|2We8l<LIP4)|orBCaj');
define('NONCE_SALT',       '|`<Oy0s?7D<B4 E^}UDA@44=b6gRXR>L9hH$t#R.[o=>J*v6wAyc3zsq`Zg;&g-x');

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
