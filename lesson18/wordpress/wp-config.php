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
define('DB_NAME', 'wp_lessons');

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
define('AUTH_KEY',         '>8A)frUGFi9pLI oaM*6P:oVhN^q,?Xg7p}CL5mAuJc+ukT8`6TiTAU~;JHY3y7C');
define('SECURE_AUTH_KEY',  '_Y*uNfVp ?|3[jrB[:./`6~*]I^O:XO*H]!o0^qE;?76sK2%ClQ[]JNryxa7jT^J');
define('LOGGED_IN_KEY',    'cJI`WY3J7}Pv@ioNW2W?)YvcTbq=Ci^:b/g1;n5#!UY>Ljr%6vT^v0r$Dq~r cS@');
define('NONCE_KEY',        'Q$f/fBE_jW#niX}M)>r-?qeC]ZO5YJs:vpd1Ghdi%g[`g.0eb+c!;&jBoL]v^5Me');
define('AUTH_SALT',        'APh|ZLr3c#C/MjDh~n9bIdB#q0]rS}U|+d6V6W?2qK0AXls%%G`YQc`Ed{5;c1GK');
define('SECURE_AUTH_SALT', 'd6#YpmDf#RiVf=TLV*zyW%Dssx%o%Ie4^2msR1!JJDH94**,ok,q<IOB)@Sapk5y');
define('LOGGED_IN_SALT',   '?s;]vB OJpswxCm=#,.^.%%M#gJU0Dp}R491BURVvG-lctoGGIK^5YN;1+NNs0w.');
define('NONCE_SALT',       'ZbO6;]tAIMA)pDmjq.Zz ?{ytTP0d*G>(_S5dWeo8lqX$ub$Css)+jnmxne HjhL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_lessons_';

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
