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
define( 'DB_NAME', 'wp2' );

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
define( 'AUTH_KEY',         'Ov4II 7Ng(Nf_g{pHuOr,{vV}cc,=^+&XUbbU?k,GG5RefzDP-]l8vk:auj^eq8T' );
define( 'SECURE_AUTH_KEY',  '^aj?lWT#!#9j6]x0T=~`dr}:^@FjfvhMPnLcxw/a]Ze?(Xxr~3W0TWaj,V7r:%#_' );
define( 'LOGGED_IN_KEY',    '8[!Zb;M$RoK:O[6Gt8(wadzeD-5V<HW*sk~CGzx4%c|~,.)F>S+`<89UNK>Mc3f2' );
define( 'NONCE_KEY',        ' ,s|g7[;96e^HQq)B;,aHCc?$auxQ&_)09ebPP)Zjk9`-jljCw}9fWog|3bBFDQ>' );
define( 'AUTH_SALT',        'g!/:#Wp?G:Z:dkqm]0,UKj{)ih8.#4@NprJz>c`-96Mdn324!pllv8#5r9@w1V~N' );
define( 'SECURE_AUTH_SALT', 'jTtD<Rn9:`lUZ`d6Miul]Qan:z,~|LS4mVb+7RM{Bf43%<9y$?jo(^=%$fz2S@@/' );
define( 'LOGGED_IN_SALT',   'i Nh_41W^[eSJ+%>o;^&4|5#nE6Sg>ZZ|7k{8^zHxiSMlg_o[Dk;K+!hJ456u{Bv' );
define( 'NONCE_SALT',       'rn2ell:y8/1U206S#BIag>vS$VSK;uxC-T<-Jb9:JxmUSM,_}/IwtFurqHB?~?_G' );

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
