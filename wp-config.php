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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'HgY<gFAI@:c)R[?Pg-_ysQ]-wL{v zyQ|oSI)0i/c`sJnD^Ya}uZb+Oa<S~(Ec],' );
define( 'SECURE_AUTH_KEY',  '=a0VuE=@Q0s`f;irHHw]+},a9^4%1PyxvQgH|?L%BEz@Ii$3W[&H&gVV5M_|s^F}' );
define( 'LOGGED_IN_KEY',    '~UBchB}KC[`~_LBBwp{v;VPzfTMUkaGGQLON*hpLz4lYB@Nl1#wxelgL[7@&PRue' );
define( 'NONCE_KEY',        '!`QGFH:^%I3;]%-[+!4dT)6jpmi.,nwNdWstV|AnQg,)c3$IgJ*[~Z#7p(E~zE@Q' );
define( 'AUTH_SALT',        '9N6HluH$Pn5xv#,8Z4.GhZ4o:ZL<A;7J6uh=D;6WQMuVQ_)U3{8Hh5C@3-i*KmVv' );
define( 'SECURE_AUTH_SALT', 'r^yPi&tn)<mS:u_yr!f%f$B>^eOK%3eIABgH|_F]*2 {D/4Zo^}Red;D<!ISYByO' );
define( 'LOGGED_IN_SALT',   '1wXQ8ePJSz7:L/#)!wQQ_f3VD;.gD9@Bz5jcH[e-r>O+!Z3+)cWtL<D:2D9gc^R_' );
define( 'NONCE_SALT',       '7KY1b=2`]JLeF(F,1FROa:3%!!dZ(tSuqY-7kJ7eQ`ziId~0Y8_cJ)o[x!Ljb1Kf' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
