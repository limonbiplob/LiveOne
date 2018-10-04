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
define('DB_NAME', 'Drayton');

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
define('AUTH_KEY',         'Jv&_bIC^5UQ]x/W|HnIvDe5`&D#(1v`o1}Jeo!u]u}+@,qX[;:=5t9tM:UG!CY0F');
define('SECURE_AUTH_KEY',  'p/{@;/ tKvA$J>~W%@o(0wJNEGE1Q^WDwkBo@Oit|G z{S*o9)R5%jj:@YpFbV69');
define('LOGGED_IN_KEY',    '5]9/+1)GzJD3r;[k]?-nl ?<cNL4K=uQ!!VKP{VK4RF!3mS+1id@C[Czo0i%W~p%');
define('NONCE_KEY',        'A9uDMGKsL%-6D,//QK6z:p1l,[uA`:_G,GbO`O)JzZ?iMrC)w9D(?+L#3HHn`$n_');
define('AUTH_SALT',        'VBzeP@_;@(Tjbzbgb~oE@|9#F_2!?d#3+Yy`by3NFncfayih,Xf*rc`IbBuc>po~');
define('SECURE_AUTH_SALT', 'H!42c/+LFHU~@d<}_S_^LV#4e2[kk.Ua9CXm|./[d:WY].tcq+YLG@`-NOxi8Med');
define('LOGGED_IN_SALT',   'C=h+$b8mp,T:A|YF`d!^U3Tf*;N.@jvx7M>0Q4qg)fQCDq68yP1Zl[,c]eF sdEI');
define('NONCE_SALT',       'D3u-IG!YC~<(8Kh1LB?#[VS%T5&8_: hm[V_j)YFZ)G9bdn[J{W0>RXv;<)3}]<h');

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
set_time_limit(600);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
