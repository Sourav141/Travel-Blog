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
define('DB_NAME', 'thetravelblog');

/** MySQL database username */
define('DB_USER', 'travelblog');

/** MySQL database password */
define('DB_PASSWORD', 'swe4401');

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
define('AUTH_KEY',         '>)O)-_%lUb!J%91Z722XLfFG?@+/p[Zj)V/anlSVsJZ3a=:vTl5Ao7_d@#TXkQu.');
define('SECURE_AUTH_KEY',  '`w~~S/tEj%<:>P<Nd$ql9bItA+G5cq.nW$|TzXUlFq~6rm ~dosm^@+ovJL9aZxI');
define('LOGGED_IN_KEY',    ']A_Ez#K3@<yl2~+|s1J/S|l@,4J`g<%M9Hl(;/ddrtGu`!M6~^MvCb{C.wAE6@xo');
define('NONCE_KEY',        'bI[k5_Bi;XvfQ`WZQD!Ouj`^Mr43rKcOM2lo2ouFm{Jeq (VKaIF23DO<~4,1j(4');
define('AUTH_SALT',        '6:;%o~ix.^gQ-+VnMO6%+<k9Sk<;[rZ`=_dQt~gV3|uMJ}&]oo_4}O{i&C#F~0x?');
define('SECURE_AUTH_SALT', '1_g~PKcoJ92pJE@&pZ4.XSIMOH[Q]rk!s<erwv/LJ:7Z]Fhn(DScml%=``f pC8A');
define('LOGGED_IN_SALT',   'N4,}gZ!)UvoRnRH(>,{N%B3uV]xfN^d8[O,BGh=m16lVSVc3k&NOxb$Uh3v~[Fe=');
define('NONCE_SALT',       'G$Xa=mL(g2.E)!}cavJSZOLZ?N_Qm4.I1/GHo~M%u60-o%j,rIM5VA<5HS1&59U5');

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
