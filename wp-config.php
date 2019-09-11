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
// Domain to use
define('domain_name', 'http://localhost:8081/npm/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('DB_NAME', 'npmsitegoilco_katerina');
define('DB_NAME', 'npmsitegoilco_katrin');

/** MySQL database username */
//define('DB_USER', 'npmsitegoilco_katrin');
define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'modern06122004_');
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
define('AUTH_KEY',         'jz33x(8.| QBbu/Di$ltQxL(=4R]va_lN)@K=71s$QKfM(MN7b-G9V%L)6K0S*BL');
define('SECURE_AUTH_KEY',  'D9Ml _|J>}>Ea|e4#6LH/7!gnTtBE_XX0f)c^Dv(Yhnax+YLp^Y<E/+H.11VZF|B');
define('LOGGED_IN_KEY',    'UW~wwm2z*=SVf0TQ`V|nZ-ZUL:+MI`$RU?gpYvi5Bjx3Mkk8mR2U%%RAzCf)$ESo');
define('NONCE_KEY',        '0vk!,e .[XO,c;]/HIIJS ^Z$&l5k^pVDqDrP,^hqnyWCA/_j4e2,b~k7TeHI&*C');
define('AUTH_SALT',        'Bw%j{5P.,53pU(rnVQI.%Abblqm6ANgA%N?U~Mlu!I++Jm?P5G??.mnQ) Yc~Oal');
define('SECURE_AUTH_SALT', 'Me(^gSMFYx>9jw-[;u= y{=s?0*0=e`+($t}>XH2%6?!AD7;I5.8>FC7v9^bf[t}');
define('LOGGED_IN_SALT',   'Ti4^#%I,R5Cb[Q/]ddMy1st&+_?3i6gElh{P~=4rj@jR~QL>=3)0e{ZiBd5&XghQ');
define('NONCE_SALT',       ')^&YdlE.KHQ96:bpsSK_t)H&hBBk+le$]K]QZQK[u JSh;BsjxZ]OY^SgDRc9wy7');

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
