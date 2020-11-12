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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-training' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'coeus123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q$dVSs) 7&f=u~=F)2~jzG[GBh)p7-> k]H`>wa:pJv$moW=/(+omm6{mYx%WB3n' );
define( 'SECURE_AUTH_KEY',  '.}9(dX5?c<DCftKvDNNiRSN &#?/PaaN~(*h t{q3%Z[Dnr774Fij>`LcN]$O!VF' );
define( 'LOGGED_IN_KEY',    't:)B*^n#4*Du08d*yE/&o5hSJ6PcW !F#})D+^&YqqQwf8~?p@E3{E<u8c~vM$CT' );
define( 'NONCE_KEY',        '<{-wsez$JZe<u<hepV6G=GKHjvYc7RpXBiIM4tP6J.&10dNHrGp`P_)koEs&AGeS' );
define( 'AUTH_SALT',        'o*h?y=Z!E{i]p4bmut6}#~ h~3IQab=%+jbc%/vA_6[Opo4~})}@NwkHuk}izV9&' );
define( 'SECURE_AUTH_SALT', 'YnN2w/{:9{jwEy4O2+(Li&G<y6<_?LQv!)1n)xMBNE{H{yG~dz~g4MX.Kwi!k&.Z' );
define( 'LOGGED_IN_SALT',   'ZTRr8^VLjn`G|qnGN=|Pz98G3EPC2E,agqd25XbV}#x^<SHhd2>sWZxV5x^u] s_' );
define( 'NONCE_SALT',       '06Q:<7PG24ms|`s<S_v/_*OiJ]?$/Jb3G,Cm?h:4Qu&1 >yL>*jSD$^/r&8cbP-d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
