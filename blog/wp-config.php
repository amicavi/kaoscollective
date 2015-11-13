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
define('DB_NAME', 'kaoscoll_wp797');

/** MySQL database username */
define('DB_USER', 'kaoscoll_wp797');

/** MySQL database password */
define('DB_PASSWORD', '!PSuA)p068');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'sufwurn9do647o1jxhv1wpp0cfrtoe6epbakhzp8jopisuqwf5fp0ul2xflses2a');
define('SECURE_AUTH_KEY',  '7lu1tjeh7backfmfontioofqvf5wrlqsdjuia7bnxwzmndh08ljft7plrkc7k5po');
define('LOGGED_IN_KEY',    '1kc0pf9tbqqgiukaxuki97r3v65lyhubwo7w3t9lskzivhcu6cyoej2dy3lilqv8');
define('NONCE_KEY',        'qnp6uiuqlgzmrpmlclqcyopemcetmelo0aa5cxgrq7gzrxabehd3ptin9mbuohdw');
define('AUTH_SALT',        'gzkr20wofri7yk78z8crk8p2qukrpyqr22ejt3n7fyd91fnr8mchicfpsihzsty0');
define('SECURE_AUTH_SALT', 'lxzfmmdoepna14qkme41wbr6pt7t4dyv3ynnbtqo8bovrwrwardxx1pnyrzid6od');
define('LOGGED_IN_SALT',   'noyblcginzg9v6i3sxf7kgvwtnhmt5re3b4rakzwdwcuvn57dvcxwyiejttdzdmw');
define('NONCE_SALT',       'pibw97erlwo6pplqmkejn7vgg8ahjmophc8wyrwigtrk0lbcadv8auvjwtfczfts');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
