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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '4i}bYBEtE@|99$-r r$26Q/eEqA&:?-+>p&|&%CRD$9Hh>$8+fWSOVI0Uqe.KZ3R');
define('SECURE_AUTH_KEY',  '/>DOvnqmu%nNcZrk9%~qei`j{KZiwIH]@I@:!+:*O;-KpZ})&U*?od(~N$B#4Vtj');
define('LOGGED_IN_KEY',    'o?E+*&t~o:fLV5reyi,5Aaxe.$?SHg#h}^X5r}UI=mZ{Tt<L6TE5>Rp>x]j$$N9t');
define('NONCE_KEY',        'Y~_? =QUEnMem4_kn8[xl{RCGBt_=&Y~Z;GWI,N0jl[srOGbnc).`u(DVP3Q};!>');
define('AUTH_SALT',        '#6TK*Xhp0wj|W5fC,y1i=}>J]d7&U#`p)l1?I8K>4z]t}X}Me oWG%CGDT;;Wii+');
define('SECURE_AUTH_SALT', 'r9`-dQm~H3t12?,)sn^c`mr6ZQ~!?ErV|gNPyAN7//:2^E,fs@2c@GY?j8oOo@R4');
define('LOGGED_IN_SALT',   '5<bzk>DIZ[/1{Rrx/4gz/ f??x{e5y?Bs0$`NH+6@~H8#C|BxPySu~9e,pby&a,S');
define('NONCE_SALT',       '@]jEk]ckx%-iZ?dc;g}0qVp]$l;Xr~T#(ZHu*$lZk%#T894@Q1[DfuZG+k8yYk@j');

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
