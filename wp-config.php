<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'presi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8PL!_+<+k]a]=~:UiIXV{klcZ6BgPe>#$5-u$.^OM5org!+k`*<.sYvb){Lp>>s7');
define('SECURE_AUTH_KEY',  '=au&fp-+Sqq^)@KB]J~)Xyy[4.(Gl]1@-p}w|X=C83o;!iC<FV-[E0XHY9[%CMZL');
define('LOGGED_IN_KEY',    ',3w:Ef(C+;J_ES+poZv/n^uBr4LAR}-,L:-F~>}??<|e$*iRN};5*Ki#P6J$Re8<');
define('NONCE_KEY',        'K7P3P.ZyM2| K9LXa[_3u4C~/;yn/,AQh:UVZ+,n6a{,7P:2 ^1EkjHN|mE| Nmk');
define('AUTH_SALT',        ')&aMs*(LbUj3G(?PPxtjpy^}[1-KCAUwrMz;S>(m/rE%V)YKP4c,^@tf?+q9ns%3');
define('SECURE_AUTH_SALT', 'zKNb)4]Cu}bsb1*R}Ee5PAm~-{n)4aF:LW!UQ0]F7c)QTgt?LV3(GF0E#{:r/~oD');
define('LOGGED_IN_SALT',   'O&,|lRqyFKw*79PXr./ _8Zkmf?;Hbfz!OLr-T&mKeELxf.Brto1id<vY3L!P^Yh');
define('NONCE_SALT',       'k,3o,7Gw?Nh[ lH/y~6*P%N`YPyKc.n3*+fwy$d87Thw2;yS.CVYR|FIYEq}br6i');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_AUTO_UPDATE_CORE', false );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
