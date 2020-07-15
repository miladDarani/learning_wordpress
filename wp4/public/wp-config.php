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
define( 'DB_NAME', 'wp4' );

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
define( 'AUTH_KEY',         '2!tOEjyPY6U|I8[+3-/Dx)Hx;bHqjIMv:69hMP@?bybeDipue?LsGU}*:e1&|KS-' );
define( 'SECURE_AUTH_KEY',  '[*,TR$ =Vl 4gc$M-4?[bGL%h.=H&wN1@m:0r9 HT,`C7|4,$/kYp.B c7?/d2~@' );
define( 'LOGGED_IN_KEY',    '6P3tGo:>4UeDaCVJ!1k0o{JKGNo85oTWWYZYAf$*:CS3-V$ibs%38_M+=`8yy <E' );
define( 'NONCE_KEY',        '{ADL`p?3}vfg,>DBv{1^qH$>GAvI+d[$lm/`ZH#pMpL`bXn$,&)_Y_EeL`$zhaa#' );
define( 'AUTH_SALT',        '!$9we1lrJu+V~]ce.Z5FB-n)pjBy_SnuFk2[,2lWwk#$=+bY|?.D^VX$h4K{F;h!' );
define( 'SECURE_AUTH_SALT', ':PLv,?/ABMpOm>~s&{;`Xb|Gw-((,O:Icx~*w] %@}2e9*>o8`(t-2/`%TZ<S[uq' );
define( 'LOGGED_IN_SALT',   'ZwiZHV^.ZV#,S&@CEc[Pa]i~`^O>NfG>enwu5IOBY9ufq*E&tO<c(!v6WikHs$Tr' );
define( 'NONCE_SALT',       '(t8Ssc,Gts|x/>QHqZ[q-4l!X,gBp!b7kY4^<JRRkPz0~9FGzq`igK<-{McigJGW' );

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
