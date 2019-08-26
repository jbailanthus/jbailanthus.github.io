<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webpctsdemocom_ailan' );

/** MySQL database username */
define( 'DB_USER', 'webpctsdemocom_ailan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q5t6SpN[3]' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'unzvzreuhbwhe5zvyhuagpznohduxyhkcul3uloifyk9p7emgdjejsuwhs9ildmk' );
define( 'SECURE_AUTH_KEY',  'tcqgentnlgf6azgvwkewoyjlwoptqicgvg6j9xwzxvgvdbymoed0lwqvvf3fm0ut' );
define( 'LOGGED_IN_KEY',    'qyrfbhronokilncp9mwiatg2zsjiyp5rcdv468k32xsdyfjxlrkk0c0xzvt8x6zb' );
define( 'NONCE_KEY',        'j6ebasxw1nwmiq1zkyne6pk37d25y8awllgbxywrinz9yfoy0xwdqrgioxopz0xb' );
define( 'AUTH_SALT',        'lbfinebhw52jvvfm00tbym1spbrlrmdjeqgxj6zayzyit3utcab1zlxbskmzrowi' );
define( 'SECURE_AUTH_SALT', '2mplzvmdyivbmlwb2brz0gm1boc4e40cyaqqcqhmlqfodrvoy40pjujtveafv0wb' );
define( 'LOGGED_IN_SALT',   '0km0a7kacijvenfnrnmbvuigeinz1mzptxpjibjazu8w82asamakq93ah7njjwbu' );
define( 'NONCE_SALT',       'mwglxtgqel48tmx9oa0u5aknq8mpw1pb2r6kz6qp89oe02xntaxuqb7hqftwqy68' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp6u_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
