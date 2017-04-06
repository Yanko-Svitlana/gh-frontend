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
define('DB_NAME', 'gh_exam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'g6`R#C`2nEiX[!)SJbQV8{3M0}!8b443br!d0gIwOa]] 9{gWwoWQ}CwP]TzkfCL');
define('SECURE_AUTH_KEY',  'R<kR;H~?dMf(c$o` Q;iEBs0DE wSP1xF@9L8[~H5Ou~p5GlbYpN9 S,f7b{Pcl>');
define('LOGGED_IN_KEY',    '#7.(c6=}(fs:e1`eJ 3UrUxLrFI4ujzB&+RYnYu*u$P,& B|l()F,]5%jV~eQpW[');
define('NONCE_KEY',        'j<cEi<aQ7XxO^oXUNr,aW^! 0$7r/LJB>:)XtPvY$rlhG4f%VjLbexdjrz}+ladd');
define('AUTH_SALT',        '|!uoYf2,J]@0Ejj$%n~5hkTb|Hp(s.ZZP*S3i$GDh&u}p? *SM&J6a^w?d7|D+Hp');
define('SECURE_AUTH_SALT', 'oCV>9OR1<eBdYIz|J.EZ*rf%<f)A&Hg;Q>ED[=m3|)@z%t0-_k>^=3@8^mAf8jL*');
define('LOGGED_IN_SALT',   'e6^XHJ4G[S0=og>U|]zp={fHGFpw6&^+CX{`ly?.Gc1M, Ot?E};TO|jSU55halW');
define('NONCE_SALT',       'P}yJuj?aP+?vikU0;29<UPJ&!w}k hHOsydbJhl)zxb]BLsHHzxUl|yFq8wId3*o');

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
