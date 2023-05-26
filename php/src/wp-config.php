<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MYSQL_DATABASE' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'MYSQL_ROOT_PASSWORD' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H|,T*42)~4lqHj?l2wAGE_z.D:BLc:|jq/gx/z3?MI8W=4r2T%QFWC,.U~]#K,{2' );
define( 'SECURE_AUTH_KEY',  ']7#PW#?C(0Z{EgAt+?.$M#.p:-V?+FI9Vs%)`?k(_.)|?8[{5Jl0-qJVfqGcv9;{' );
define( 'LOGGED_IN_KEY',    'BgXk}f3NLb`lSA^G)#|tV2^dF1@T9UB:nT],}(}Am!]g^*C-O1CW-CO`k92`$)^p' );
define( 'NONCE_KEY',        '2R09tsy9~pf:4DeN&2!?4UPf3[8%e|piW0=m*kyjll1{:`)O@f/IWyY#L/$>mX>(' );
define( 'AUTH_SALT',        'p[GW$Y(`em!.1&$OuVnYXy/.yJ(+/q% *P5.}..rppN88NGKs)?T#;>`25:/;@dt' );
define( 'SECURE_AUTH_SALT', '|Yw,Uu/.(z[D~ZGvI6:](g6m$[~T]o/iVu;tFKkX?A#h+S;A^8|Hwk36-u:fG$Gy' );
define( 'LOGGED_IN_SALT',   'R#*&].ZwVyuEgL>.DA13<`w[gpWr>O?E:E$oK=2fg_Ml/`Dn.7{xx.bGBa]@M;1E' );
define( 'NONCE_SALT',       '_3O&][YIbMClgzsw~Gq39xIV0!`9V_>ndO(joOMA~`f.M]MC y2IhF$:!~-sCK-s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
