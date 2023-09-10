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
define( 'DB_NAME', 'hzxf44939829955' );

/** Database username */
define( 'DB_USER', 'hzxf44939829955' );

/** Database password */
define( 'DB_PASSWORD', 'JoKU)1IOj*' );

/** Database hostname */
define( 'DB_HOST', '160.153.153.51:3313' );

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
define( 'AUTH_KEY',         's7T7R7skE4yP1jOq)@89' );
define( 'SECURE_AUTH_KEY',  '2mKVPG0+bKNcCMw&sV50' );
define( 'LOGGED_IN_KEY',    's5M*%n/!%Hs%sn+5@(T-' );
define( 'NONCE_KEY',        'QhQC()WWrrr4/(BSRa-0' );
define( 'AUTH_SALT',        '3/PfR_OgJ5VP!4=7r6Y=' );
define( 'SECURE_AUTH_SALT', 'vzPHvA c8XGR!ZW$j1IG' );
define( 'LOGGED_IN_SALT',   't*hj1MtVaV1DjcN@T!3v' );
define( 'NONCE_SALT',       'MGzWWJE0_JHWXCNQ**Kr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_2zb2h49p2p_';

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
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', (0705 & ~ umask()) );
define( 'FS_CHMOD_FILE', (0604 & ~ umask()) );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FORCE_SSL_ADMIN', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';