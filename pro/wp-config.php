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
define( 'DB_NAME', 'cultures_wp_alrom' );

/** Database username */
define( 'DB_USER', 'cultures_wp_alrom' );

/** Database password */
define( 'DB_PASSWORD', 'HAMIED@90898' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'ucg7A)M7+uQ6+*MGcUa_Y:#a6_AtYo3jLRQ0j!N4z5;5bdJv#MSrr[hE6S9I+Ez[');
define('SECURE_AUTH_KEY', '[d0+!:o*Y9;]+XV4rz+4ncK+bl@nv6-A2tW21j3_W4/a]ecW*)6;Wb-r80MEHt0A');
define('LOGGED_IN_KEY', 'Yn@/[#@_&+vxcf3e5Dcj1d-5]TeyNs0nQLY3aC+91*2A[RPLj4%&sT@mcOHn[)4H');
define('NONCE_KEY', ')%AT7d7%H61%24Oy:foBU8w_Gkuh7617Vqtt_5RbZKE|f[U3@sDc__;2[6@74g4h');
define('AUTH_SALT', ';74mi9r@aYnhM59J[4Fo:1@fZ5+;Sf|5fUI0]76||4318f688mEY53ft8ZRY1z47');
define('SECURE_AUTH_SALT', 'injM[z6ysUe!Ui!/GWz4~9%+;6:d:5EN@38iEny*8sAc:mtsC8je;s%_6]*u9ljf');
define('LOGGED_IN_SALT', '5)2!F[F(V/msM[15]eOwLSoC6NZe+m&NV%kB9:U60_0ivq4Q2e7H~j7i4YNWp02y');
define('NONCE_SALT', 'H2#_6izTF3k4_j|[2F9c8Q#E8gM[:)aWXhJ+)Y%7R9)[7xV6h|4uaW;9m(A#KC[U');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'alrom_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
