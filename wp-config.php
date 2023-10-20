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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define( 'WPCACHEHOME', '/var/www/html/syncom-new/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true);
define('FS_METHOD', 'direct');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'syncomnew' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Temp@1234' );

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
define( 'AUTH_KEY',         '5iCTd$]<]4<uvMZ<2&xdOU=kqo9V55OgBUB!}nVM@n1_QFoj 8o%B^BROs[N}p_q' );
define( 'SECURE_AUTH_KEY',  'T*aL8DRf+.}>{h6Al13$3-!*-~:KT!^1_CE.9x!4sh|<l?B?e7:t^}EA4C6m|+<8' );
define( 'LOGGED_IN_KEY',    'g:l5f=o*;V+pm^:V(3_hzha(yDGr^TV6z+)|pt~g O?h$V|,uNunu3i6C3Ef40d*' );
define( 'NONCE_KEY',        'o|u&A7`0qBCi>f+j)jO8(h..xt{c7Mz?7VT6@q8PQl@h8T^Q~9_}ofYGAB& t,[?' );
define( 'AUTH_SALT',        '>/qAlaDD={*xNNpIZ3d9_V1N5}hPwii9a|4f^+!z6%Nbcm4Pn@*4QWee.dO$5MH@' );
define( 'SECURE_AUTH_SALT', '2;@:MgEU6kP8!:=k!YFg}M27kwc3Cfi#@D-`9M F]gYNy~@49x5@/ZiZD*9psCf,' );
define( 'LOGGED_IN_SALT',   '2W?<xv?W^NA4FU]^_GXT~fho^y3o!s/j].b8q(VhO<WO)z-SUvWmGf|n$GZlY5.3' );
define( 'NONCE_SALT',       '.fyauf!+h~I3o@I$E3<o*Qsj70Y!Nenq;Qoy/B9>Y(9ir!nP1Q2R/eONd10!`xoD' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sy_';

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


define( 'WP_HOME', 'https://syncom.mytiny.us/' );
define( 'WP_SITEURL', 'https://syncom.mytiny.us/' );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

//if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS']='on';


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
