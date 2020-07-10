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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kA@gPFE^8{__Y:VpBJdOJlR%;gvy[3-KBj+uvulO<v[ayioq[j}xKw_Ul{W$x!3-' );
define( 'SECURE_AUTH_KEY',  'i9f&l|08yrw@CoQ-I(M#vI(K]!bGR*Uuk?~K_fHy`[1.~|RI?oyJs*qx>6ejgA?0' );
define( 'LOGGED_IN_KEY',    '&WXRmo.%T]5:swCvJ(}%fPOzB|#V*ztaNl~C5B.Nmkf=#A=_7:_f#AYGX_9]F<*M' );
define( 'NONCE_KEY',        '^GVa@M2g[1c3-##_ RzKDhB>2?_~h[+LDh~yUjeDuZ~ZNPMsp^-(e@ZET|dzkzFm' );
define( 'AUTH_SALT',        '^6]u`Bq}{R:pcf hamYXbD#CD-K0-E`y BmCna4r2V(|x@;lfGp3*WbaxZ<Fp9U.' );
define( 'SECURE_AUTH_SALT', 'TqDje?`j/{ZTDl`Kj1eAUV!P<F?Ar&P_17/T;IGj#{M^+u7{uiFE93(2rCEs0!Ur' );
define( 'LOGGED_IN_SALT',   '^{)zKYArRYh5O Fl%#Ps/D*g@R)q4$mI%5 ^<BeQ^GIOLWtUmURpa?%b+>6>UN!`' );
define( 'NONCE_SALT',       'z-Z$@tU3MQNN?Qhgbm,8FG7AL,dKvp}W(.6KQ8p0=Te$Rfu9E0o(j)0Qzk/%=.Mq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
