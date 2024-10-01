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
define( 'DB_NAME', 'Kopsim' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'qrOfyOaRDe6wbHtkKUtTCfzA6HsVvgA7lSemUopuAu8VTIxZcmqcqHz1Wj79bpgi' );
define( 'SECURE_AUTH_KEY',  '50FQYsZs3JGqFTbT6MkoAvhmjB8GHvuJ9UMNiLFylb2iOvwL39w3l2YMh4iIVmTb' );
define( 'LOGGED_IN_KEY',    'qorONhfbXjJYc7NPn1cAfUIs3iKeNVnPcztz8Gcx5Fex1qDtsfMB36anpUUctN4p' );
define( 'NONCE_KEY',        'TXA4dGRJ7wlTPckhsQhfuNuXrwu7H0WOUb1qxmu1Ozx4QpeFCLD5oA9nxu1PM9K0' );
define( 'AUTH_SALT',        'wFrECkGkv2VNjo3QOI9Ls4cKFq0RSoQrGdxRVKK6zgrqMddstxJUjUw0Sedqv6m3' );
define( 'SECURE_AUTH_SALT', 'vu32p6NguKPfg1jg755l4VoWJQoZ4R531BjYFs8ulS66iqQzDEXZfdvPUJdHNYfP' );
define( 'LOGGED_IN_SALT',   'RhKe1B2H9ksRseobOiEmoiEqNT15ELklhNxh0rOk0NYBOOZ73WYK9SKKTpFtjyLa' );
define( 'NONCE_SALT',       'neaNzmsc3c3rvyDdLyZet2QbHDv3xGUgCqM0C8uNYusYp3vf0ueTzlqr7gcbhKcD' );

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
