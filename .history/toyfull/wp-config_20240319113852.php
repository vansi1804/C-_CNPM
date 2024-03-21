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
define( 'DB_NAME', 'toyfull' );

/** Database username */
define( 'DB_USER', 'toyfull' );

/** Database password */
define( 'DB_PASSWORD', 'toyfull' );

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
define('SECURE_AUTH_KEY',  '/E[u|&cK>Z8?|TZjW1U*{>B;9gI8sW]L$D*+`vWq-W;1U+:}Py4r%V2$fo,Xh,:d');
define('LOGGED_IN_KEY',    ']`?zke!PEae~K>9L=;tx:}1]:@l]7miEP`gxBF3k-|n+~7oAc#lWP}V^YHd!slV-');
define('NONCE_KEY',        '-4`8-Lu$]+ Z,Ge?CG1M@yR6CS}qN2m|92&}:BVUP.v~fpBM:+L>Pwt;c#LBZZCR');
define('AUTH_SALT',        '2@a`-`;O-sT5swx,tbnI0HR2-o*dU?S1K8@ayQ=&p9vKz)(?K*-&|UaAr+^]q@)b');
define('SECURE_AUTH_SALT', '}/4Sj6)9_bAHxM$|)K&dOlWw]-,ZOhI;Iux^i/Na&i$mVs7?8w#{[*t&3p.fIh/Z');
define('LOGGED_IN_SALT',   ']pKVNIJy|+|EVs:0>E(iira=6#lzJAMy4lotL2f6C{oI.%b-T~:STo~B%=:=V7]5');
define('NONCE_SALT',       'g*$IG$/~mUGqW z)^svHf$`Z[%b|uCc<&Uz[kEr waZsHQIU+|bVp}b`E>b$Wf<8');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tf_';

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