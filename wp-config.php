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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'b:tzW7=z2([MWkIICmN/:sz@cLy sqf,@{T;jMh2DP,MSpM?h&xE%aU!6sx~QK1V' );
define( 'SECURE_AUTH_KEY',   '@>vbW.A+hD]q+YS.E_Kxt(J@FMg.0{VWXa^e_c*37h(gou+4O+ZBx+#z5p=+C=}E' );
define( 'LOGGED_IN_KEY',     '#Q]&HCC91U7B)>>JKNxcvFo2_ -MnW~q(mmF4rYIS+54Ps<{7+0+DBxzh(%+>/:Q' );
define( 'NONCE_KEY',         'xN(^5|t6/om_GmqbmA1KTeyw^7NKE$ymd-Q]Aqv*SIWmxfAkzavGq]6~$nT{d,</' );
define( 'AUTH_SALT',         '1!+ ^XmfEe)Hntn-$X&>n7A*@b;~h_BbHhD-WvI_xb:KL>4%+^7~i92XdJR9=/dh' );
define( 'SECURE_AUTH_SALT',  '{DUrOuT?Fq&VE4w!/rT4 5HZY*P)sqEurIfQM*^>X&r2sVFd}q[4N>!$e!3N5m8V' );
define( 'LOGGED_IN_SALT',    '[$xt%&rS~q($IVdy)zFoL%-K$gl0%yM Fr>2hY-#YQG3{xsqgKwTGv5<}e~?[1Sb' );
define( 'NONCE_SALT',        'W+PARGy>_,WA4dBB}QyGe?W]~+<+{rh+5L$D7|{c+u> UBxjO?;mX|/O6 L!~U)/' );
define( 'WP_CACHE_KEY_SALT', 'PaaOeE[31;|,1dtfa4Cb6/Lb%>T3=6s;3a.<2z[`a5`ueU1ad q->6O74{uaE*>E' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
