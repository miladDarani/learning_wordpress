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
define( 'DB_NAME', 'assignment2' );

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
define( 'AUTH_KEY',         '1)%yEsqpRXZAV(yYrR#.kq{Q;cmY<M^.ieR>$|GJ6.Y0(.7`^`F?crZ,eG6n-&m ' );
define( 'SECURE_AUTH_KEY',  'M3<m&00U4C3&$L10)u@1yL~L_Et-U:P<d4QkW:pB8)DZ6.K{)Bf8)R8~%pFi6xCO' );
define( 'LOGGED_IN_KEY',    'g[JY,fgYQmE&rtO)k1jI6|*zR8Wq6*GHLiHJlT=[~/hfdQzh[*qJ =PEZ`=MhjYj' );
define( 'NONCE_KEY',        'jEMa]Q?.UW=D(oUwLc1[).NXcR?Yi#2yiwZ`Fp]M}mfASn=}X)Z*5eIS1$XZJ~Ec' );
define( 'AUTH_SALT',        'ay:k_whi$tC,*&g#*%Sy+:]|&XI,HU3gPE~J@_G?D=.(dqb[eEazy&*}kY ;}h~I' );
define( 'SECURE_AUTH_SALT', 'U IFI-EYk~ u~_1 6a^s&9jd$1GeGz_piVe+3|~Cq;CtlMVGl>P4?jr+.^qbFJ#B' );
define( 'LOGGED_IN_SALT',   'Okx4HW.X&(EJ5 -0u)7__1Ztg|r#LL11Jk=N#^b8bf UlD-f:65`ys#<h_N(~WCT' );
define( 'NONCE_SALT',       'Oyn{(SUn)6S O6R~I?4-4w[mZOv0%;0lr`8J2L2b}Jh-,u E an$*l N*}=uj82q' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
