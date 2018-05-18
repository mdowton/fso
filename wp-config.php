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
define('DB_NAME', 'fso');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ba53gtrrc3j2rodf0drkeqtvlinhgriltogjmyblvpojnxizwnoh2luavtlmghgu');
define('SECURE_AUTH_KEY',  'ujtez9rpy2fc8beveebpfcumvy38xup1z9u4kxg07y29bwyin0j2673x3ajvteo9');
define('LOGGED_IN_KEY',    'uwrmpcybcsb0yha3epgjbvsnj499htji0hiwfy0pz6epkwzbmqj6pxr6oedmtwsd');
define('NONCE_KEY',        'dgaih7ey1nbjedmnkrxoqklsjccyajfsxaumya4at1mdovdjqjgodjux2r143bod');
define('AUTH_SALT',        'seob3cp4nggutgtititscatvvypk2xkeq3ihcsuxgz2wmwoaitxohpq70jzpjre1');
define('SECURE_AUTH_SALT', 'upgshmll08rfcqlj2kks2mjglyibc1y7vafgncaqys7ueu8zd0mvqxblvam93p9d');
define('LOGGED_IN_SALT',   'oo9thiqfsnjdyrn8cx54g1ishcerxldm0dmezltrzhl4gitj8ljcmu0w93pfjppj');
define('NONCE_SALT',       '3dctehfjlz2sd2ozi2vkt19omekezsva886u2aynbr6luexlxht5iyvg2l18zisz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wphy_';

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
