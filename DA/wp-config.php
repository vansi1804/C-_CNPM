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
define( 'DB_NAME', 'ntkhieti_wp377' );

/** Database username */
define( 'DB_USER', 'ntkhieti_wp377' );

/** Database password */
define( 'DB_PASSWORD', ')5057Kip@S' );

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
define( 'AUTH_KEY',         'uopa1cp9jovlf8pebrqugeajbtdmdhvhptzajwa3ine0gda36wnalf9fcyxkgsvm' );
define( 'SECURE_AUTH_KEY',  '9lxxmiop9ddi9v1f98zqfgrjgy56pwov3jb0zx60wrqmvqnho8s64yr7aciz3qlg' );
define( 'LOGGED_IN_KEY',    'd3maqrm3xsuo5zveyfwlpk7j8weocswiv0t5acboouvftspjdiikdtwn448pgcvr' );
define( 'NONCE_KEY',        'szltbb7butgs7m703gzs4cc1an61miaf57w31oewnq9hhrxrf3f0dulimilctpgh' );
define( 'AUTH_SALT',        'xo0bmxww9m2xqcwobv4apra9rhuipxnagwc8hgnrksp7orer9ed5mpeq3fn4xwdc' );
define( 'SECURE_AUTH_SALT', 'ollkenztzqgsyrznujnagizy7leqw2idebiqrqxoypwkoadhu5zhncbjugsdgg1w' );
define( 'LOGGED_IN_SALT',   'l75pfagahipcdygvv1crlqjnz3f2v2nper6c1pded37qnsyv4p4wowdu4kb6ukaz' );
define( 'NONCE_SALT',       'ikdm1ruqfpvvxembzhqhgelbzmcto1stakxeqhvgl2hmzoswilkvbdqcknc5ym2t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpja_';

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
