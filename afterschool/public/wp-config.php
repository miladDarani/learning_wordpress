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
define( 'DB_NAME', 'afterschool' );

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
define( 'AUTH_KEY',         '5NVvM4 bWQj7R2 |Dy3ZJX%X5rmZ}s^#!*4Xju5]|eZv v~~k?80hKl(-.-2ny&/' );
define( 'SECURE_AUTH_KEY',  '9b^E|DhP,*Q@cD ,,h5`2jqd1_itii)F#/ViK /5x%yl3ISk/HDqO=uju%QH`yyJ' );
define( 'LOGGED_IN_KEY',    'v *mh CZxz;K6eA$UuL#KyAqb/-Isme*TZNToh(LM>=EO?&V*48l]p`0oOu^%kKj' );
define( 'NONCE_KEY',        'mXY}@}j{IM?68|PZx>L%nK^R6`N?Vp8T0rlk!7,}*:{]r=e35iL>t-]bP,[-ZF,D' );
define( 'AUTH_SALT',        'SN?L#eRhBI&&S$,yrZ0=8wIzt}k2s%D_#(s.N9|ODyhM5E!<Oa>5RvKgp~K3}qFy' );
define( 'SECURE_AUTH_SALT', '~]@s+6J*3liil_|UwV {+mBjV`sIIK&y]R`5=}&G}?=STAEHo4}q|{H2>0byEO>.' );
define( 'LOGGED_IN_SALT',   'Wh4#ib[YO35DS:#H9I{c[07.gdM47h]X|3uMv#LW@qUcAN{(!RGc:MV.m^l[I*x4' );
define( 'NONCE_SALT',       '[&aA>irXXWNChazcC1y :P/tMfeL3)~d/Cu%&!_U+f#&_;7e8I=(ISz-K&DR#(I/' );

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
