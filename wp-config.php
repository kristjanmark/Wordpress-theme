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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'ss!@4bJ8h[h36;J(XfBR~LxAk!NJ18^0/vzn~_HTrad7<ijnM+&+abGzE8]^oJA7');
define('SECURE_AUTH_KEY',  'phSfDymkC&79I*-@w-iUjQW9Xk%pzrT[u9c#L|-/?7A;fDIJUL>XkmYk-zv%2n<p');
define('LOGGED_IN_KEY',    '|}KezmLW?27|Ab0R|UjxJ716t<<i@qq7}YpY)tQ[etE4g)|;5XP*=+Mv4@{,AVAN');
define('NONCE_KEY',        '41l% QH<*P;ZR~9p`)2Gd)38&!h]$M#4nRg,6K-C(&A*;}KKG16lUj<93sT3]*#p');
define('AUTH_SALT',        'q H&iFm?<KqD?V{o-*, mcfz)G6CR>MKo}[-]|iR_Ja=a+X~Y@C#[C`G5FJQ{C/!');
define('SECURE_AUTH_SALT', ':*L^@H/z!Y_EGN4v,&S>BD{* `A+rh?k:_y!Bc*{?tW}eZuLr`!E//ur0PMIy7r1');
define('LOGGED_IN_SALT',   '>-||y)$PT&dx?Z2J#i>2QxS{BKJZ++.N^o?6:~qqcP_uecamD20/UV-B3=ruuCw5');
define('NONCE_SALT',       'FveI(%qXA&REHgm%3)0^:<)ffeY +GOOFN+p,&<1ZK57vIw*J<Jw t[H lH#tEd,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'db_';

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
