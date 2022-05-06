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
define( 'DB_NAME', 'cut2code' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'fuwtzlWWDb_KE.x;LHR+}Q[Df:N/#,+n)zF%D3$)Nl!1[i]GxI#6 tPe]-y.v2/4' );
define( 'SECURE_AUTH_KEY',  '#cZ/ WQKOBsBvc];&.U3s+2~|G5$K10&WplTk~!]>0_:Gyw.|G]9c^a-s(VlL=>T' );
define( 'LOGGED_IN_KEY',    'q)[GP{sQ `GS:[A &#.Dld{LYx!]?A$qG7V*=sLdWM4w&;t;Z6M_`}IC?[oI-YE|' );
define( 'NONCE_KEY',        'W%p&iF9@w]S{KppagrxMmF1^VmJuu5d /{:49[@!#bK20JiJf4N.:[C.Oo$eM_GK' );
define( 'AUTH_SALT',        '73(rj#%C|f/%+]:|^Wym`KmLS#n?{mNsmbOC!>0r lei_yMc7~1WlM2a%GM/Hdt;' );
define( 'SECURE_AUTH_SALT', 'D*zc-opZ%^5;dGu$[vKk:CTet7}9Pee(`xtx_pL!bZ!=&=z@&foP:wx<d&Pd,s()' );
define( 'LOGGED_IN_SALT',   's7x({Ho Y+kyDW+ALegfW]rYW90w8F<SQXB5LM[0i^^B-UDJ!8R3,A$HVhY3%^VX' );
define( 'NONCE_SALT',       'u0FN0Gwxzv73h0z];DClAh8?Yd2D_,T9fi<]UdQ8Q*SexW%l-o]bU{{vAG(Ixs^6' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
