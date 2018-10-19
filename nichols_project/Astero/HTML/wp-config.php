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
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', '192.0.2.100');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '`ZHJAvd&O#mRnjw{Sd:+@jcp-6&do{rcS+fiDh*-Y}Z#^Y_c2485Y>z6z_ >irA ');
define('SECURE_AUTH_KEY',  'iWj+~K&<9#MFSV~D(K@.Yl+-+KW0dJk~{+=4&t-#CFG*>Xj%e7?IOpE.mw(L/9&@');
define('LOGGED_IN_KEY',    '[| awnox|Arf(;OC- v*HeEJlC+y439*Aooq(9/RP2(<P}R8Uu gQ}-H0=izi4{c');
define('NONCE_KEY',        'z_[et;F=-F|N1hsCBRRBp n>TEq|M47BldEq;e}*QR0>ig^25@gnXoXfg2Vz73D=');
define('AUTH_SALT',        'Aa-+0kAc#D1*D.Orak3[-7KwDUbrJ/z_{A[Kdd[?Dsd%k-i8++M[in%uUv~l75Z}');
define('SECURE_AUTH_SALT', '!mb+P-#^iAHn-dtYH.~k*%6sAin;}zOe<>hDS| `hT&vLi6YJ+XZ.8g?y9iMG0aS');
define('LOGGED_IN_SALT',   '+x@jLYl8Tq5U)K~A;@V5n&[WCH|9TYjhz0,B:TZ}6lS+R=:|*K1cv_)nH@bqC|gc');
define('NONCE_SALT',       '1&.BI^uUjPMZ_oE=<jW$BDzl|ZQJ}w[#IjuU~<AvAf6BZSHcLba/|4BzSAS-^PL$');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
?>