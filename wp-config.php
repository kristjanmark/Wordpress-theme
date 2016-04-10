<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ';?#H||B*7(j.&?-y}+IcS3%Ar5!)1!K$l/--e~LzPs~ZgJu$E|9ZO+bHA/g+5%m&');
define('SECURE_AUTH_KEY',  '|]^[([P/vn[VAp%h{p@> kmjGg}>,bAm2Z`<z(qDr56#BUe6ai|~;0VU4n2s+(Ni');
define('LOGGED_IN_KEY',    '_R&S Mw{U;5n:LO@QY$Rv{qqrr2maIM@HtJm1R3)>3rlMqT#6TsB}oEp:)QZ<$a3');
define('NONCE_KEY',        '|XlA=qs$iX*O;R^2^[Yz[(*(~rN^gWR$<JQ)s&0QJPt-J[gpR9DKK%k^jNkGtJx6');
define('AUTH_SALT',        '/Hk-n@2V[;hZC9rQBzWrsr[S&n40X@YLB06C)TuQ+ZQ(ot+2+[?&Dj>~W3+(`a+x');
define('SECURE_AUTH_SALT', ' bj)r5(7+3e;+X}U#1tH+23:uT0dI.`tfqujsH2_Gd cja2+qlPdmcf(KfuZu>zi');
define('LOGGED_IN_SALT',   'YY7 zYKiH<^K~L4eGMlvXK!LZdMT4vV6J=;<|kmRNa?=o#Lm}St+${rZt-mrV;k(');
define('NONCE_SALT',       '~Oe3(T0wi5wu3lx&P4*knI~+E~2x`~r%mD4_vp]se~OkRPp2:-l&U-PV!t4gA=->');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
