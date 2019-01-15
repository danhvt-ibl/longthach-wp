<?php
define('WP_CACHE', true);
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
define('DB_NAME', 'digiylth_wp49830');

/** MySQL database username */
define('DB_USER', 'digiylth_wp49830');

/** MySQL database password */
define('DB_PASSWORD', 'uS0-@L95Np');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'poue0s0k5uivhrulbmwnwsosqiywx3mxnumyov1trpgxspsnehg1s3oel1s9zo7m');
define('SECURE_AUTH_KEY',  'fyma0e8l67njyebau9jmnqxedu7bos5xwugruooqidgaog036eug3ttjak011e7j');
define('LOGGED_IN_KEY',    'mfbjncn76w5elcspmuoipxl9abytkv17hysbrkd00gxe6cb14mzc5wfn0uona1bm');
define('NONCE_KEY',        'y6xyxfhinijf0kxzbbymydlqk83jlijbwjupgzjmy5x8hgktls9clrcw5bwa1irv');
define('AUTH_SALT',        'hae3hdmjdet4eacbe2mxpg8rrifqyzdvjhmuytydf581xsebyrrtmq8ltectpdhk');
define('SECURE_AUTH_SALT', 'k24puxw5qkiasaf5seaoxzqijhyn8dwlyw4mqwz0kzcb1s7mwvli7ahzan3kcqgg');
define('LOGGED_IN_SALT',   'uvb4d4k3meat16iug6cdfupbnp9t5g9oqsl1gyqwei2xio8plejyltghen0gpgc2');
define('NONCE_SALT',       'm3yayfidh5o2zu6enrwshombrf9sdnpctrckyvsjcppsqrvbaj9vvla5mq4dzew2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpc8_';

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
define( 'WP_MEMORY_LIMIT', '96M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
