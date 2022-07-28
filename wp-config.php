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
define( 'DB_NAME', 'banana' );

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
define( 'AUTH_KEY',         ';df53]Iyc+@THN82wwecqMpUcrVC(jSW&M3vMQQ93#%NC$i5aUItvXzgtWVzwI,1' );
define( 'SECURE_AUTH_KEY',  'cMTF7Ev+y#4IZDYqA8l:=*h_%:AQ][5?+<bW6_]~Bx9~pv?Q)e-+kMpi^i FBhN;' );
define( 'LOGGED_IN_KEY',    'K]x>n~W4+/u$8K#|:4]a4ZF-7;},f I<1d3@xs*KhRF|ugRdTQ@!9K[+yGvt.N,@' );
define( 'NONCE_KEY',        'kuL TT[[fK0%E%]KlF&UNolZa]2ol/yY!0v:[B/tTHLsbQx=y?Ujh|*OVNB&P,KJ' );
define( 'AUTH_SALT',        'xD,jM04#4fJ4I#.Yx?3=gm)mD7H`@N5#61Yv,v>&QS|U2o%?tKzG%4_~d)U&RLAk' );
define( 'SECURE_AUTH_SALT', 'uASHBGSbhV D:;dGQ_,_+QJOWs`ybvmF`F8% K&5wB#J)0bs<VObdy}s0:65]VRV' );
define( 'LOGGED_IN_SALT',   '2)Xlj6Yp,SH0.:Q0N_kM+ewoO/:?5b &j=il4BnZ6/j9)Y}H[Ibdp8(9Fkp%%AU{' );
define( 'NONCE_SALT',       'v]P}Y}LWHe+ZapVRVX.*Z)sVB8]#(SSEe;&3d=^tWP+0ktTh0Mm+]-x|S<2U.Df`' );

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
