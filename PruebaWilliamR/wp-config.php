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
define( 'DB_NAME', 'pruebawrcatalogo' );

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
define( 'AUTH_KEY',         'ra9w>@5K:3{mE* x;V)~hyj&|O=m)FFZ[_qqI3>lX318.(T`Q]DFn;UDQfIRn0NY' );
define( 'SECURE_AUTH_KEY',  'c1i/)rV@G>V&,11=VSpqk9wK-m#8zQKrIat}!C*Su_aS[hZ-TEuW=^bF#K/b1%B0' );
define( 'LOGGED_IN_KEY',    'hcQQ[zi N{~4fW@p m+nU@!nn/(2m|pWN=X-+jd*:Rz9j)*EcC<`T&w)[00:;` e' );
define( 'NONCE_KEY',        'rF5N=+4#4$39Y2z!7tfAbu!`j|{|Y^C]H$xVl+s+-&!}Z|Z)t](,v6(Em*7(W?j{' );
define( 'AUTH_SALT',        '?SqH]>q:e^;eu R*5Tct@.8e_KX7O5>6v&>r/Ncn$ :c6Z5;.G_ZO#<TzKBahnDL' );
define( 'SECURE_AUTH_SALT', 'u;oX>_Oy[MUa;RKIR[xC]h([H0h,F(/+y6G?svVxK-5Ruc1UaE/Kj&<5DT%j&4mF' );
define( 'LOGGED_IN_SALT',   'D<<K^b*pS<`[Qh5>sGQ]/3W!:65>!FubMAcu7.}fz&+v|_%Op_{wL8d()pP96 #h' );
define( 'NONCE_SALT',       'cO6q<e83yD]1Cm]aTl%_:o_`d|#2Vl@:^%&7 vtIi@bm3)Pp8Sg8mf#d*YtJ !{e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_pruebawr';

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
