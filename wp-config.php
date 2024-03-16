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
define( 'AUTH_KEY',          '$&;OR8F{#vU[|sn8.</jYPiKn,VXg*Vs|rFYK9HjJ?$JJz|TyryJmcTU.3!1/T8S' );
define( 'SECURE_AUTH_KEY',   'flglOf#;ClNRg8z~|Ov$:Av, mZtiMj(tg&{IcoR|e4wVp[C)SUMJcd8ev(j}?Bo' );
define( 'LOGGED_IN_KEY',     '[OSLN:R0}^i5,#ZU2]Z5jIBF+)CKyK&v8:20@hP@{=_5T%(.5bU 4CJ^h)~J&i!1' );
define( 'NONCE_KEY',         'Ia.!:Y-ik0}QD(4nW06c|BY#3g~|M_tv_]t^;B[j_k4-*FnKXHyc%0loSxwt>C;c' );
define( 'AUTH_SALT',         '=^_]59)DXV-Gt I>x%efifJI0.s40I}wE+f`c.7&PXK+N{4IY>Jr#3DiN^St=VmH' );
define( 'SECURE_AUTH_SALT',  'E=oD+`Fz!9WO~ujm/wC0IqsEC.538EWD}p+XEe(g$pXQyp ;5F|#-5lAAH(Krn!s' );
define( 'LOGGED_IN_SALT',    '97Wo&)#R[@*xK4Z^Ie*]._hMHVt@12,ab%erf{R`6msk/Cu=j1N!J+^f*p`N`3l}' );
define( 'NONCE_SALT',        '<O[vc{G?*hm!l_ [Rt-B.b%^R|e`=]~gcJJ:]7kiPgQ7I_wMh>b+%89?)E8D-Afr' );
define( 'WP_CACHE_KEY_SALT', 'rO@WtcY/WtVx]u>yIwgvi)-X~LDe#f`_{y%^pL(o;=iQMi7!|<z1OtP@GeHPRJ,a' );


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
