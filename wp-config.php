<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '@j45-yqWfU)?]uIjZ[FFXkSU2QQ1{[$7 e{25zBh8aii]njZPYNMS;ycol^luz>b' );
define( 'SECURE_AUTH_KEY',  'd$BHq_RWYL}xtXy(U<nmL&0s*lxC-;^c<9#bbLJSzop#QxQq.uW.TcLKS%o!^fs?' );
define( 'LOGGED_IN_KEY',    'c6yY>/T^rE:LH !vtylM*BxLy!wP Lm^/yDyCl_l/]~3!E[ez#4q[&5kfj)Je4Rp' );
define( 'NONCE_KEY',        'w3qj2r>;qI={2)$l?fkt?+z|oaC?Y$M_Pm~QLW$yys8%#t7W`cDR-hsm?YD@ED^E' );
define( 'AUTH_SALT',        'WLsc&C.LQ[8GXhr<+K(PPaUS>FT[)Y%Ac]C1uzMNEPWE~8-*^o0]OAg~oB({oJ?q' );
define( 'SECURE_AUTH_SALT', 'EQd2LvF9KN)Zy0w)uldkOqRXK;Gy$[DhcAP>JC&U~d@%@<$7-f+{sly_-<)#4l0[' );
define( 'LOGGED_IN_SALT',   '7dU*?L6[1>I4oIY@6dk5>C2~}d(WxvK=!8{ud%k&UNFZolk9Kidi,/`-R@j`gu- ' );
define( 'NONCE_SALT',       'i#_`mp^Br>Q!MU+dcCj}BH.tL]%aN?)GlNrH)13z$5K^[~0^A5zn~R;]zhQ1vt=I' );

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
