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
define('DB_NAME', 'hellowordpress');

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
define('AUTH_KEY',         '$vMJ5~])hZoY#RdTc4;^=nW~0ue4u7,>Q*mi!%,wQ U|+2?11j>1er#=X)kB~SM]');
define('SECURE_AUTH_KEY',  '#Q9NS E+Ry_Zsk5/qWWt,Uh ^FXhoO|cI~h.EgD>2KnCm>b=*%:/e`~[T@MqKoyZ');
define('LOGGED_IN_KEY',    'fUI3kmZ!8~[!mTD:K( 93ygXnTvmFvv/&/I}CK<~x]V|9G#}bua/&~k3p?@vyAcK');
define('NONCE_KEY',        'W`W44,TGPQjSh|^F@rYF:zYDzigHF@^0j-D{j#m@iTcuK$X//$4ruae3S@exj=~L');
define('AUTH_SALT',        'fIf2]Q5zmZbf8%KJ4.l&26-ZmJenC2XTe?|PA+FM%[s).8bG[Y*0A;X;0NP2myCQ');
define('SECURE_AUTH_SALT', 'Kw|yt^zgh40n94Vw>P[.JjY0!g 7[.UcIrwPsv~uWA7j_p<;~8_W#%$~`#+c%MK_');
define('LOGGED_IN_SALT',   'z)5p& zU6<)}%,LCOaGReK.IS-2iv0GWGg$e`*UkaX9{hfRD3{$U|@7*.wOhyJQ4');
define('NONCE_SALT',       'GNIRYZH=83*q`;4i,%_`:h$` C>:DuI_v>$]b1X+Z+=<[I$w^~fa@|VeRLs~l0^X');

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
