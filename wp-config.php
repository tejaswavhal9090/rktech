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
define( 'DB_NAME', 'rks_tech' );

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
define( 'AUTH_KEY',         'KKrxBjH%Ig7sT8Cb+U6G&QD^b%_}ymlCcOSvbnbM{<G!8zA+G$X)=(JVV~:4&J=(' );
define( 'SECURE_AUTH_KEY',  'FJ)x{5:I-Ubgv6i9j9fUV_.ZOzUWHSM#u!!>BFSeh}[*sOSksBlP=?]n1Cn|AQ_6' );
define( 'LOGGED_IN_KEY',    '<<OMAAK^3$k,!YH]A+]!F:[dcFLv81A#:MxJV,G ZBR_<7g%y<E>j]&P]25hs|aW' );
define( 'NONCE_KEY',        ']TTkguK*[K0<TQ2BMyRH[vkSu0;nr@>-sB*WY95 Hn3)3|:37zy}D.+9xnxs305|' );
define( 'AUTH_SALT',        'o.2[/N`aeY~^Cus-D=9EsHLi8>+F_!lLODhj$$pTw|^MtE1[~4>#aCw4wDRA@S>=' );
define( 'SECURE_AUTH_SALT', '&/qVLV#D<m4!=dyiWi[B][2%b|sclLrnz@.c]sQp8)`w;})EFZ*A}AWQo++*tn]|' );
define( 'LOGGED_IN_SALT',   ',0pYCg-[l3M~1Luic]1.Q.OFr<{U4YhNm_Ds=2gf{C!6[J6CWZxS#y]K>3$jq_sY' );
define( 'NONCE_SALT',       'uR^a-s-Fq1mw:bnSw8J]=6p7f2w@v3thD9vJ9S+K}2B[M<<[u?Q0ntg@h4)FBR8#' );

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
