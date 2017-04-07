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
define('DB_NAME', 'business-plus');

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
define('AUTH_KEY',         '<zolRn`yA75%[P4(&DugfMpyk(>g7myA|M;4jS`wOJ4O+5!$`#}/Zs]0bvO:ytF9');
define('SECURE_AUTH_KEY',  'FJ5)`Z(Nov v~K>HY1XYa/lI-yBqamnhU=xip|nOgAp&c[x#{2/m! ++,K wJW[u');
define('LOGGED_IN_KEY',    '<%;*j[|e&n6YbfO?4MqW&0n:*S,Gf?_ad[1rk+ca!,}kLXy#rqc._~dIlIRf!I=/');
define('NONCE_KEY',        '+Lk:ol<uAVGO gKevQqxJcFvE)zh?E]h;NKBy?#/$IR$+Fa!H1Igz)fu~j8k)@ p');
define('AUTH_SALT',        'v@9Qqum}Yr&3w-; 2i(t%cC,M#3aO)G~w.-nnWMaS<)ec6I350$8@}wL#|(YBW=P');
define('SECURE_AUTH_SALT', ')F[;^]u^}lZv00>_&2r21z@hGkt8MMQo,E18z7HW?NjLogXKG.#)d3{i#Y;66lgq');
define('LOGGED_IN_SALT',   '+nc^])z.=:*6f#)kJ<-jp&Xu8yuN?(+7>bDOAQ6%Au~rEI!IEOiTVivIPZoY91S>');
define('NONCE_SALT',       'jf$4qN$pjY|9}kK?*;4J2Mp&0RF^p<X`*ySLzrKQ5n~oI+ZA2$tf4}3F+[K:}-H*');

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
