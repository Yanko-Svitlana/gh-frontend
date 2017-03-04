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
define('DB_NAME', 'WP');

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
define('AUTH_KEY',         '(k.27ZI~:GJ=grRw^dC^}8/+IR4n`E},E%5*gBphZ>I{<vf[SU 8mQ6w0c6!cy}R');
define('SECURE_AUTH_KEY',  'j>gM^#&*F-P+Y~)rx5m}4QkifRZ(%N2]QE{st3^K~qipY1!/s~bq~vo=SlYozM!K');
define('LOGGED_IN_KEY',    '1zr~|y9&_^,xIUaA]2<t,q;MD0)>rIHOWM=]3o}]!0jAWrQo?bJe#J601:W;DNf~');
define('NONCE_KEY',        'EJ[4<#D#UU$w{2zC <Vh/-^xKNQrFrZhqB}3Z7}*TB;9nuUg k&.|QXF8in~Wd?w');
define('AUTH_SALT',        'Kt*bSKtFg0:Iw-|(4H>>iCA<lP]+j: >jp7<mma>K:DvgC9W*!L~Gue6^Q_R4V^C');
define('SECURE_AUTH_SALT', 'kJK;w-S<DEVO(I4(2L m,Tn*? 2iW>lW8Ry>!qa?J-[+Y=VKwg~{$<dH-z.sv]Y*');
define('LOGGED_IN_SALT',   'ZR3+YnQ(EpVOCj)~Wv*0]&Y&!Gmx<}>ABMc4RG*s5pyc2@)i*!e[.KQ=^qEN^K:m');
define('NONCE_SALT',       'w:]]j=MGb4F`lu}Ye4324xoK{aEU<t!gD8~_^`s+[.3Ih0 }D]9-P{{,cY2=l(O$');

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
