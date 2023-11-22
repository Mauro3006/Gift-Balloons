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


define('AUTH_KEY',         'mgddxycEdZYEw6jahyX5Aielv1FP8/ouSTC2kBDjUa3H/nYohnj50JSwhBbQISvS4J6ybMqhR0vaqUAVRD6Few==');
define('SECURE_AUTH_KEY',  'dgUvffAtKlfeUfwYh5jX4e5WvQ6SPP/tAU5cIJFdh/1W+rc6kmPrJsHHepp3S4K8fPUok39gq/dZHjmbFt2qSA==');
define('LOGGED_IN_KEY',    'VsA94Rw51L0zUl0Wm99ZaHUYzxZxQvKLBL9k2iLqgD3iIDzP3iDZorqsCf88eUulsMjxAaEgmv89T70JVvuIYQ==');
define('NONCE_KEY',        '1gS8OYmj1BaWFPcD+JFO0AxqUPfEWefYLs3FTd9xuIvGFcfhOsHMMOWAlAyAO3jNR2hW01ToDbeKyd4FVs0wkg==');
define('AUTH_SALT',        'UJ0IhUMFVW6x0sbCVVNhX5kZeSOeTE/24FZ6cZDfPfWUIQ2GKARA2wL0jw1pQMza+Iv1aGpcRxMZ+vianndYWA==');
define('SECURE_AUTH_SALT', 'ezg2EkKEpZsEbb28w081ldJNwSP9ID4ey3kCSMNNNv3s/2O0ErGVK5x1dKCqUYqu5LypNYE6ZYcXtQSvkNwUvg==');
define('LOGGED_IN_SALT',   'zx9LcmrSRPc0e4pxvjkabpzsbl6FDwD8XI61JcM0NA5ECr25TRuUYn3FhHl+5iE1hzNyWon76CXrwwYxN7tYcA==');
define('NONCE_SALT',       'GHk/c0s87UPY3BCay0rTBGr2EKJVEerHHUW61TI+Z/++3Ro1BVgtUKtYhjsnYHtP4YWOUdP77Xe55euSiCC05g==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
