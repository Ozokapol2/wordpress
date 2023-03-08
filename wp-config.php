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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word_db' );

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
define( 'AUTH_KEY',         '-rZ7t4bpCIR@+hk`E))yINWx&^q<boO a@qvOVp@z:k,oVmfCvOAKh#98[RZ{Z,V' );
define( 'SECURE_AUTH_KEY',  'uNy/tr0!:yQv9`qq_nyv0k9m1;[mj2%50a>fgDr^T&b}mPh_:OF2,wQxM]s<k;p^' );
define( 'LOGGED_IN_KEY',    ',:30@3L)tSPYo#l Ln2Sp:7P+xs&(8%BLa<#iSFH~|3Y%r$QiKGUmko!2Y2PO+@V' );
define( 'NONCE_KEY',        '?4:g,?SV#s ,sD7@3]M)u9$p?n/hlj]AQ5 Rd0!1IQP(59e:ofaHAOEEK@obgl{S' );
define( 'AUTH_SALT',        '{C7B.XhB<]dQt4H#t#@2Dd@+R,>GZ<?u;PS2$n_9DtB7S^cJSVE%l7$l`W|SFM.u' );
define( 'SECURE_AUTH_SALT', 'lEU+!w%gpj#aVXdg&Ie0m3QA)6/c{D.MK|4k^HAE5E{Y&?uXWJj}]kc~s{VD.S3/' );
define( 'LOGGED_IN_SALT',   'e75_/)+F&1L6G2:V$V`Tz4gw=%d&qAAo:e8.M^@9iSZamHbGBlCKdBk.DI:C3X(<' );
define( 'NONCE_SALT',       '$&ti}C;3-W0{K[A;OHU:R<%<Ebiou(_DL<.*+>ABGkD7,unu7Z!04?$|5+a g(23' );

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
