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
define('DB_USER', 'cbautista');

/** MySQL database password */
define('DB_PASSWORD', 'Fullsail1!');

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
define('AUTH_KEY',         'H7R`)VExg{ux^)-Cn8-Kp!!0F{Z0:_d*R1vBJqfyt:Ko&aZ-^Z LJInL=|HfB7 5');
define('SECURE_AUTH_KEY',  ' sT`tIv:y8{N730/.hwe}F$Q-a4Cy<n+y@AUn(Zj6c;}RJl)+d-NC_JNM,B5Taeb');
define('LOGGED_IN_KEY',    'ptFei7oFmvU6R)7&8;+9U7fIEOS&lVDBSQB1ad_#:gez4k8R|%H!M1!S..Y9tr|`');
define('NONCE_KEY',        '$l(*rw~@Qb v5J~Vw8VIZfy+CHKu9D4;o-(:1_++@J@oqgIDDz8+v2<O[}G87nan');
define('AUTH_SALT',        '!@bSvW/iqwdiXW}!71m+G+*U$s^NMV4zj!-,QJk.V=Vsa%e)W+F:dvv)xX-E7m6R');
define('SECURE_AUTH_SALT', 'nHTX:Bmp:H`kHzvP];{]1G.S;cqOt*{/asbaNUayJeuGIc+3KOLC_!qmZbbJ@!:*');
define('LOGGED_IN_SALT',   'Qy)-#y1.$+nR|oD&d9DGx=]gJ-%=ybh-<Jv{K|WYUMnx[5[zVCXJD0:fK`N}gRwv');
define('NONCE_SALT',       '^OqdVXcd1P4_(v%lCA E8[ +eDlUewgUl|m;V`3t&^pb1%ot@EL,SoczUE5-4l %');

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
