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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-learn' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'XM?&W0I*;#>>?7wdGWB$9?Kggug#Z%a:nwwcN&8x} #gID%bA_+=SM)2ep{~rTBx' );
define( 'SECURE_AUTH_KEY',  'F~$-2Arh-|38f0llpEe[79,8n.5;>xb{W>.TT=<@].W.@464svc_S8|9vQqaC6[y' );
define( 'LOGGED_IN_KEY',    '*x%V?F^Bs>]ITC]WK+~w_MY2.wYB#Y-gbfGPwj;`()f)Qv-q&3^R`S~yI?,KtH;|' );
define( 'NONCE_KEY',        '5^.0RRw^.Cx.)S>%}YYK`C7r|hO)H8[B*DI}7E7Wy:3sDn^1B5FQpe!LV+kJ{.kM' );
define( 'AUTH_SALT',        'C^i))If yMUBr!P.@i@EU~q&qgpc[x`}qMD!R^Wz%)#g5;}<~c.X%k4ni;xvY~sf' );
define( 'SECURE_AUTH_SALT', 'AN3k?DAOKZX#?sOz}7?EX7x:tQnI&U.+`E;<|#8ub^&*(H>X?u~C3{chG.}vK}R)' );
define( 'LOGGED_IN_SALT',   '~mMWb2[%K$wwfk83a7!vsGQ*9neHx|EaG<6qN{j^Wpo;IXnE4 pkK!T*` O2KMOF' );
define( 'NONCE_SALT',       '9C)~&~hAP<hI9@FIF>.Oy9(&1)IOi`6}zy?R-2i3vDE:8mZNz*h|f02d$vn[mTj[' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
