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
define( 'DB_NAME', 'wordpress_reflection' );

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
define( 'AUTH_KEY',         '9KFhV[G~bKynLC#m.e7ML$RaB|Kz;Hk*!%Qed-z5.|g@J>NXT&:FERhk `b2 D}E' );
define( 'SECURE_AUTH_KEY',  'h#+**.2bw$>dZ^,=b8W9K9v=n<$hIh`&I#J@+FUdA/%Y51Ni;+]N<?zX!%QoaE/V' );
define( 'LOGGED_IN_KEY',    'kN(NrW$`i&bH8y$K~*{N&Wg&}LtW7yRTQn_mg6sez:4N=YkY!IZ+>Mlf<$Q5_)GQ' );
define( 'NONCE_KEY',        'leK(P1$}/aOV?g`eT2?4OLRQpWhKe*ug_[]&xqi}38XR=w@;5Ivr0SWfetYB7<?;' );
define( 'AUTH_SALT',        'Yq5j]cfVL<Ne<8kNq&TFic-u-v2_wvh(N{D@3D+/Q{GD_L$Cy;if/>P2Kldn(b[=' );
define( 'SECURE_AUTH_SALT', 'W8-o~ahG0a61kLgQ5tAcUZLwjK[nwhEiY!BJ*/g#Z@?ww[e]J qhb&0/m8Dw3fY8' );
define( 'LOGGED_IN_SALT',   'LnWX$<t[xW|fO5dzhq.KpS4vy#u5vmV}{H3qS^L60AVPmQJdObV4IW@ZGqJ]IA{O' );
define( 'NONCE_SALT',       'w4]f~#4^HljZjAV_}S.uI=TcK%/&nU*=ToGZC<,y1qRdA>PnCF0nyESVx_uwnHHJ' );

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
