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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5NEiYEfLS2UH0HmkPBxYUyJF5apxSCH78sS7pGKpk3gofLRN0u7iwXpF8USBzacMq+9NGxB33m22oWP67n05Hw==');
define('SECURE_AUTH_KEY',  '6ZI5ocEWYdKfx02KmqybC4SWdCaPR8S2K2SzLmkuXzJPhgBWQ1ohreQxYOIbf1Y+S+jVcKnsX9cTBPN0lvrEWA==');
define('LOGGED_IN_KEY',    'E2iNLC7Dxn6B3GvETyriltwXC8aBfzSk29QJRe0dfEzuzmWsbSfsJxfiQJ4CDSunpXpZ955CmH18wfm+fnnyrA==');
define('NONCE_KEY',        '6NG+ZY1mG/eVxxA9HQCxoJU2Nz0oi7AWRd/sdkzu436cj0ApihlFtNeM01ZlZsmrmxwVO5h8YDnrrD13fqIJZQ==');
define('AUTH_SALT',        'PHJuTFmX/u2KWpTzF3vPKX79KZ7A3evU/sI5XHPkO44rO9w/ss8sypSTbMBHPxVEIkGn02K5cTOW2e1prKQfkg==');
define('SECURE_AUTH_SALT', 'Lgxtx8iThfQxO2p87mb2/AChJTXapSEeIziuxBMnSFQ1uZ7OHb9X/DMmq0q6HcpFiNLazmfchz6OCaYurRg/LA==');
define('LOGGED_IN_SALT',   'OJCZTTCjT4VzFpaWDLg/Ei4Tg8OK9zTJLX5hrj/LP6224NQQD8wuWUw1GUkwBEaslXcdayTr3f0pAgzAzXd6IQ==');
define('NONCE_SALT',       'MbjyZLbH2hp01LsacRspKOSN9oUPRlgQRCq+jCxzLKjqQ1oLpCcy/pLxTMPp67rtBfv8yhHzBroGrUaSCYYJ3Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
