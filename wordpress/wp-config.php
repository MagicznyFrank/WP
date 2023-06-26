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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Poppyisop123.' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ':-_]po$;7Fakhg7?hpo~7$deE(6m$E!-w_@T9y%(kOmaTNx@f`co}kaJWfsf;gJN');
define('SECURE_AUTH_KEY',  '!iQw~8~W Q nu3rYq_1B7f;T~!|RS4}>KLPWE.XD3pAswCsfMWBeOZv-ADQjl[CM');
define('LOGGED_IN_KEY',    'NRzScv|#>mmHqna6`j(k<,3/>)OCxwSY|RcJ_v}-C4NaS)}u*tJ*~7=]Px;wxUv_');
define('NONCE_KEY',        'DsSESU<ow-k0G?fYH#>-1N|k$IPhG!R!4S5!49O$5IGx$Eaq+(fh(90=aspll+,.');
define('AUTH_SALT',        '4u[q@z]tUC>#v]fdW|S|Qds#7]]i+`5+Ymly?ttd$?](Z2dl|R+$R|=0Cg)U_*2I');
define('SECURE_AUTH_SALT', 'en!9,!fV;7LlLDR7G2Y/./~7,NZ2<t|o@E2</Awul U~$1@6L/X<u>@sx;+NSB%v');
define('LOGGED_IN_SALT',   '~s;+5L#LjrrMm=_;w{CvC|N-E0Xt1A=|om*1/K.iRW<EEL1LYI.-pEfN0)7tEdu*');
define('NONCE_SALT',       'l#vzQK.[b9~@-Q9Ywf#D*K6l|68+G=KSR.zmc{y;6h}[{_#E%o>9:W|Dp}[m8P.N');
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
