<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'ResturantWebsite' );

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
define( 'AUTH_KEY',         'U~px[a_dK{f+REY74H22?-E83qYFX.c_6GgTZm3R>/ip}J.3jomX?g<fFw..boEL' );
define( 'SECURE_AUTH_KEY',  'EL{phnAA{r>HW)M[vMSiXJUY@zWS^FG{G*9$/Rj#?=K{j*<JM@e)gy)6-^)x~PfN' );
define( 'LOGGED_IN_KEY',    '!X?X1NG#4XK%,d<2e1$O_8UbJU*@,}T^Cs>,E{C$u.l/Fy~7e5h};V9VSK#5uw@L' );
define( 'NONCE_KEY',        'xsW%bIC~|:9:cE(*5vEv>tVJ~m;lK#V~BoxYE@|ep>;@N~][6C{*&b}1<!.Vs#cz' );
define( 'AUTH_SALT',        'b9jqzm1*SNJ&}u>--L6UW1tas,!)(e,-;}LA>Bw,/P-OMc]sgP;%mfY1_SR>3M%.' );
define( 'SECURE_AUTH_SALT', '1hSy*?Dt;>VJ*]tX^uNXXaMF9HkunzFa^hcJEng[rId343gg[bzYCKLSe1-+QGfa' );
define( 'LOGGED_IN_SALT',   'J>[iwwmtr`9*qz+o|679q1UI>s-V+7LteDUS!]n.Meq9!hZ$-IH*7*,u9oczMVE0' );
define( 'NONCE_SALT',       'F*}J>wN^`JB0A]<Ff{KUYHG$%-=fc+JhqSCfH9vUtO,r~2gb]2+)^i`!Fc6ET_KC' );

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
