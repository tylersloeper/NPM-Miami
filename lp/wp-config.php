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
define('DB_NAME', 'npmgoilco_as');

/** MySQL database username */
define('DB_USER', 'npmgoilco_as');

/** MySQL database password */
define('DB_PASSWORD', 'rU8ChHsHGw5e');

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
define('AUTH_KEY',         'f6K*/K8]10#r!(HxD0DY3BcwpJjEieg_O9k;YJqm[<&cJhJw1SYb7YH3*HOH0s]X');
define('SECURE_AUTH_KEY',  '2?W1zskZgIt t@wNlh+nbe+5ITUWvA<|;0`WC? (Q2<n3?^4Jb]WM6E@XUwe9Add');
define('LOGGED_IN_KEY',    'w0E*e:$ANDd_q@H#oy}d9S.Rf*,>X$>|N]7NqZh3ej)Ov=&O_WVU@v#O;4,k|OPX');
define('NONCE_KEY',        'J|UVno 8^C:1Q =j }~UME?onwE`XV/5K$?<!lBeIe}{i7!ZG|Ema?]2nwG<3Ie`');
define('AUTH_SALT',        '|{_1<kC[{n4-rh&nT03{HX`X`ENgZ$}LwR^WKET1<lafE9^9u;^9Vuzo(9*%5m*T');
define('SECURE_AUTH_SALT', 'krQW 2;>gH*zVfJ61Q7*NP>iUGV%2,4+**:oI`9X#EcULbdgMAY+fL%OCI}*,}gc');
define('LOGGED_IN_SALT',   '!LmXxzY=`-j_j,Lw1^L`DJq`k7zT&a~as/=*)`>@Y_gG#rx]|^lE))yEZC9IH^-4');
define('NONCE_SALT',       '.O%P2ONX&V#%?x7Jqc2GlUxdu6Nz:c rZqneu44<dl.Z?zW14S>ygJ4va#@n7<1D');

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
