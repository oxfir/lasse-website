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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         ';_M(%XV q$5pIj*lj|3X7.hb8 _&Wg7S-F:0G-yUMd,Y=9@5IubGXYrgsndE#?)V' );
define( 'SECURE_AUTH_KEY',  '5%l%6)MoG->LJrHS.[^XjzyogUr5+8txQQv@O epf]!;jhXdCuvnp7{=mW[SF3y$' );
define( 'LOGGED_IN_KEY',    'no*1vI[rNv40F8eWWj|gw{~4=.<*Ui>~QgOa%,t/{r`npizAWy/_ta7Gm 8Ns6q-' );
define( 'NONCE_KEY',        'R6;Hx{L(6x_d8xu!=6LP=s%c-]H:/[FG+;f:SFy3Z}/pImX3LZ7Q.dK|mY[V UYH' );
define( 'AUTH_SALT',        'KIiq/o?qwVECZz. RX)LMzomw%uK4HgI8NkZcXc>B8%4-K2E@{nVP-EQc}9Qq<xZ' );
define( 'SECURE_AUTH_SALT', 'C:XR|^JWWb3j7,Bf@e;O`L^AqRaUP0qbxtahg)xmX>{7jfTDw9`]oXO4Ngad~M+y' );
define( 'LOGGED_IN_SALT',   'MW@avJH;(}z{}uH?|.i<?l7otCzV9<KT~/G+{KI#<A*`qM:-KarowR@+piBPR=NA' );
define( 'NONCE_SALT',       '@FNoRyn}1=.KEj~#pU K;rmUx=hNni=l=`V&,s(qEe@#V9{gMxMcq|gpJ.n0J(dk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
