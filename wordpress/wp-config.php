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
define( 'DB_NAME', 'breif7' );

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
define( 'AUTH_KEY',         'V1;T_oJ)oy=N$7]GVI1BtvK~ko/ff|NN&X+$AKkyPoNdMpkTI`_svM |:X5Y|Er3' );
define( 'SECURE_AUTH_KEY',  'F@fJ3-)sI4JrN-45iD:D5 Xgnqt}sk8=5N-|].<>;i@GKw].$^y#cQ&OPd|6I=sv' );
define( 'LOGGED_IN_KEY',    'TR<6].B&*2G7+Ibzbw-w8He^!,hA6r2cU[9uN>rM{>[~0nEZ1 !7[%MHh&?FyRh]' );
define( 'NONCE_KEY',        'FiolZ<WA+!Yw<[2u/!w6DK#N__HMVql`Sf]<36yW[G%/|?6{m)1MNmCqigYi!$Nt' );
define( 'AUTH_SALT',        'SHyKYzIoa`vsZ/I5jT(p_$~Ej`>]T%_GV@ {F5KB}RU6*S{5nS?rhVc^a 0qj8Ou' );
define( 'SECURE_AUTH_SALT', '-HsW.OY+!Y9N4G#XVF^eF.?Zi`Lo3G`lrn[;l?Y+4w8dxmExqtS(fdaBcUZ)[HI~' );
define( 'LOGGED_IN_SALT',   'L;uw^Vi]=&&P|q.mV#.7RTCHGq/Oa/-vVS@zY0nS+3T`Z 5Wd#QhB*Y|a,_Gj4`Q' );
define( 'NONCE_SALT',       'h85ww/sAj-Qd0[UiWz3#FD~eW`-zQD]3G/:V$:P=X<jn`So)#%ZvrRG*hESH3{nf' );

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
