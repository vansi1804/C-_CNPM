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
define('DB_NAME', 'toyfull');

/** Database username */
define('DB_USER', 'toyfull');

/** Database password */
define('DB_PASSWORD', 'toyfull');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'a7Y<AKf@Y=[plMd=Y~k~%|w/|FeP~ux4p*4.9:<Gvj[`hhP@JcUl<n;hD7Fxqa11');
define('SECURE_AUTH_KEY', 'izjc`,7h|}n(6)u+yZdwMmjN7a (j5+)XhJ8<vd 0R:<1pI!GzMDbe}z^%0e 0#/');
define('LOGGED_IN_KEY', 'doVL$#-RJy2Nk6lK?Xz7g(cJqf7RWz/i2H>=j]A-.u>KfE5SfHOcprQv0[8uuqZ@');
define('NONCE_KEY', '22r2>&PHck8diTi|-{*|u=5Pk`l-+Ad+Uk;`4.~r0Oyy>ZFrG-v+e{a,i7J[,.Z7');
define('AUTH_SALT', '+Rz#,y,^@d?o<7.b29H-Mu*ay2ilqu0PO5!9+i`kY ;n%a}}%K=|u&F+Iz3JxTs,');
define('SECURE_AUTH_SALT', 'p#6HWct*/GKE2kVU8|8,)m2GrQTlgDr*R6x@f B9^k+Q!ua*&:2Sa|XJ8fB|6.f.');
define('LOGGED_IN_SALT', '8G.}.*t#E<sKqJ 9u{;MduD9`rLKv.23DA+R(Sp)}q%L0d9`dAJ,wrDL:%.tVX}R');
define('NONCE_SALT', 'S.s6x4r]t$DNCf&@HNng/pvBov.@9w`CR/9IAz,6p(|E=^b{9QM$zGi)Fsz|JCe)');
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
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';