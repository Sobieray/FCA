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
define('DB_NAME', 'FCA');

/** MySQL database username */
define('DB_USER', 'FCA_Bayard');

/** MySQL database password */
define('DB_PASSWORD', 'B@yard14!');

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
define('AUTH_KEY',         'Y/RI%ShahGZgpqi2IG|X`dUSa@B_<*1IDFv4BT6^t8`6||_zAhFw.4tb=!(N`]l)');
define('SECURE_AUTH_KEY',  '?5[KVdc`S^n=oT1@L02:HK~cC+6+4Qz _i*2H^~xRq66Xj8vAib|?,(.u+d%A[cQ');
define('LOGGED_IN_KEY',    'DL&_n1b_]4#a7dmCx|pdB~9mlI$];0gQkuLToFG&N-FM1Un%+p$tzM}Y/+_;z`YA');
define('NONCE_KEY',        'A8Fv<5Ce#Jw/&xV^!-.:?~/{s$=PoemDt%}Q.%ac&e_/uOSwx?R-z! S1}arLM/h');
define('AUTH_SALT',        'H4B*@S-iXn8];BV,M6,:OI}3MjNLvyU7IYD4=BKk& O2nf6)@!-+P+Pe:#pvfrcu');
define('SECURE_AUTH_SALT', 'T^my2Yt|8lQZQ}OS]ey6;}ln(nqVL9Z<+Ryh(c9C+T$+45x!YA??6VW[jViKjH,%');
define('LOGGED_IN_SALT',   '>P}^J)iOUhF ~AQm|_`]teSztQDb%9`OI)RHT8;>(1{Mc=xY}.aLx-8W*xZO*!VW');
define('NONCE_SALT',       '+PKD64|VO;+MG+ljvrA%$G{:lhhO[MX=_<ML~{/|3LU^!N{3>AYtPoX;2Cam9k+9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
