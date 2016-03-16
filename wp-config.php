<?php
/**

 *
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'zadmin_chetraicayviet');

/** MySQL database username */
define('DB_USER', 'chetraicayviet');

/** MySQL database password */
define('DB_PASSWORD', '5ysu3upyh');

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
define('AUTH_KEY',         'P4DmG|j>F4a=t-]7nn=$Bc[|Cv(6{A#vV&<G7|~JOUA$<C1>.)3u,QTclDOmW=CB');
define('SECURE_AUTH_KEY',  ']T6bHg!&V~7-aAhn$]uNdvhCOr4~B)Uq(W9{xdk8F-EpB{H!rTt&t$_sC#CPFev=');
define('LOGGED_IN_KEY',    'XLx{3kXnJ|ZK:tg0UJF#-iWKQK~uB`%|j_lGN&b4`g~+<|9U-1&9hRRK[UKewh|*');
define('NONCE_KEY',        'QvdEC{_YK7e$+]ME8SKH_3Hg),gCP+sV}{G/X{}_2ulfi3Q=5ek00?K+x~wy[?/s');
define('AUTH_SALT',        '~n9a)A&kjEN:UD3[N]XZ)i,5cYH.0l$Fcdi[-t$E&zs,?16)~SQoEsPhP`8YZibs');
define('SECURE_AUTH_SALT', '6>MjR-|fK2uYCJsi,-:{8{Ji 00ObqX|L}p%x}2ca-pqb!m-35^:);;xRSzm}-vK');
define('LOGGED_IN_SALT',   '+<5eEnIaX8Q`=eo,7,|ADE3vH<-VS:9)6f$%<}9nO^mON[~[W-ZvHF-WI#`,hJif');
define('NONCE_SALT',       '0=PR3eetbd1uu|~e64hko)S5=B0<a##UV`LjdzBL iJQ`zn+i$9tnD-C?|9HzO$t');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
