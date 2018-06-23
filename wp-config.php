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
define('DB_NAME', 'wordpress_basic');

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
define('AUTH_KEY',         'z+A+!9!_qcKBk<b}p/^9B)*Z<Q$SM5f,)3XND8V&HgV$13#*EAA{{aet&cbX>s?2');
define('SECURE_AUTH_KEY',  ']6M^.BWk<S?~{qM;9Jj@_:YT,-cmo5g54%(i*hE6)_c|JzTphH8=a^g2d-=4+#=&');
define('LOGGED_IN_KEY',    'wHYUO_dAs](_W;sgn.juc+x&8xe%k08)og@QER}pc:*hn EGs[8_9,`7t8$-~P9!');
define('NONCE_KEY',        '.DJ{)C%e,vzaGW5-1G+x9,Gna5T6]aa(N$<lU;+mzp{OA3UfOVeEa![zdq_S+B]+');
define('AUTH_SALT',        'H{GagZ6oynhV<J-,U!4TkF{$`[GD1bY]>0(N~aR|x:D{bR=QT>}v4IB2yXmUWA!u');
define('SECURE_AUTH_SALT', '.jup8Cxl)S@aMSb3I(u7pA3b)wl%N@LeWK/sy+G-m}-50o5Q=]g9rEblabJ`C>*d');
define('LOGGED_IN_SALT',   '>/2&[,(:XkBOp0l$kVdfY^}+(=skF1*LBIN]`dOSnVfHP7`RF+<zZ7D[A491d[oy');
define('NONCE_SALT',       'Q?b f@RyR(LKL~[ ..A9o.gKV>{s[ MKj::[F/Kz`Q^81|-?0ZN5>n]noH=U.[jg');

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

