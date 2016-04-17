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
define('DB_NAME', 'shop');

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
define('AUTH_KEY',         'BGzPnXX9TDa6RLlAE[BW`@gjMWzH qw*EuLDAw>~[:=4_C+OMqLcb-Sb4WYl[FoS');
define('SECURE_AUTH_KEY',  'VfuwuI7-{sYdBF7>1y[y_.GOdNrQ=01]-xDsV- -aJ$I>VUqWM>6l?OH.:Y8wVZ&');
define('LOGGED_IN_KEY',    '>6ipaL$ia<322QB/`fSes&F4=*Af)$*Q3(olc@gDd5Hor(vXArf2BOg h8EU8|.U');
define('NONCE_KEY',        '. rvbp8F)nq:IsED7v>h7<hscf$RNS}Dg@=kT}-TIA~U.x]2yfOao j-XE1+s6=F');
define('AUTH_SALT',        '5wC2ySptW1Ng6|h#tlrqt$piu}K$cLar= ^];rcLesAh,bKTKl;y4jG/{S/@5M%o');
define('SECURE_AUTH_SALT', 'q!7C`4PbInw~9{4C1`sqn`T5<Y}cgqbreq-:dt#yT%Fb[ @Ob*v,/;kp/^UY+3cY');
define('LOGGED_IN_SALT',   'BdEIim|Sb6ftu?0&]9L.`}+;lmb/Hwx#O5SMnD1$QqNvC%]Zt~-us?5C`!8,]g:d');
define('NONCE_SALT',       '=Bff2ON`ok7X=,l``l-/R(/C3{k3Ky9xJ$T@*64h(:Sbfd%bbE3y{?Q5EY!DMnIe');

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
