<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '={bQtkpZqq8euN..xw}jL~r,43pq=TZETq_kLw]mv8>w0@avLsokgCO=T*Le/mwg' );
define( 'SECURE_AUTH_KEY',  'Q]*0CkH9d}p7(~5R)]4gT9[$[#TPtY`6v^GGVE9J^}Fe:>!KUWJtJP1]lcm7wb.u' );
define( 'LOGGED_IN_KEY',    '&0CpD;1PvYHqe3ayANVqr8}E`_m{P2y *,G~XPsV]YUm@o& [Q}zq&Ay5Urs<wN|' );
define( 'NONCE_KEY',        'iM 53O+}NR@wt.0=#r~CIYR2e:71w{9@?##BwxSg@^ZM`9F8z9Y%4$MY%mW*SM|X' );
define( 'AUTH_SALT',        'x&<PA+/;=o%$5WEl[]9Wtg^j/Nrb}zD@/^)dJ1k}NiYjHJVJ4f? wfsxdIZOiG%f' );
define( 'SECURE_AUTH_SALT', '=la<ko6-Iw-7XX?9|p?pBC(U~MvTI~5coA6wlE?C]lX4oM}ilb. !A(y^9yNE0h,' );
define( 'LOGGED_IN_SALT',   '%{nsqWKe#k[O#|Q[]|e<:`L#PC,Q~Y[~@g{9Qx~`rjFvOhd3/-OV=o=w< <^:PA>' );
define( 'NONCE_SALT',       'F*`/wfo#R+njiO5MW%&8H=|glj@m(F(g-oOYD/e$29ni|M([E-2^#X/)Bcg$Qxfd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
