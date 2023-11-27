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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ' TN6&}P,8~Q~5<Jb!nV RAG:x4U)ISpUhMRmQdKS.nod7$D/}?>0iCf:Z2-kk;~9' );
define( 'SECURE_AUTH_KEY',   ',E>BE$swX}]-~h5D0$?:+b21IqYD7{RKaWRp`=no-W85W#?K;ua),t![~H5gl%bi' );
define( 'LOGGED_IN_KEY',     'S(u|zeT!{rl,;m&jLWElf+?4AY8g_6^>+F{s=,|Qyu/a~`VU?p%*#Cxe{@Hq[&ox' );
define( 'NONCE_KEY',         '9sSt#c5Vl)o_2<>~R)K<tN4uu;Nj5FTb@_;R6L:Rt=CfXy]G=3;AR}=`eL a8<cq' );
define( 'AUTH_SALT',         'Er.D$&7 .(b7Ts_u#?yYvn5E[ku-!Z.ps~*d:)MIBjUF4[XdesYYd+|>T^oIbCY+' );
define( 'SECURE_AUTH_SALT',  'ED6zSk+]8jI<S2.lQ(;,o-wh>VXAUYSf`{wCuDaM8c5EV(2azQS61^9Q&t?w*y$L' );
define( 'LOGGED_IN_SALT',    '~Ee&t^^;*?vS6Te%kWj|)TL#QWZ0UfD/mV7v2uYH&N<jk@wpFH> ;([8<XhK-h7[' );
define( 'NONCE_SALT',        '3F]|dW$t;Uft^b|!VJowS}QV@^G$Z&TU9KWs|urP9TFEn>#64&7A<L2a##6:<3/x' );
define( 'WP_CACHE_KEY_SALT', 'Tke6CVF}d<gC.+x&S+OuB(ID){z0*S=Jx#?gBdIF0^l}`;b&~RDn$qc/_/16O_!~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
