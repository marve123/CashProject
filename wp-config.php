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
define( 'DB_NAME', 'cashproject_db' );

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
define( 'AUTH_KEY',         'F2mcGO2GuY<.o>gxYlfsu~zEH$YR-xMT7r3V=]T!~/vj3|K. }-*vfW%&rh,3hst' );
define( 'SECURE_AUTH_KEY',  'a9Ek~{A$LfSo*Z$p|!?[4s8IoJR^7Jf>p!&1M uCruNzoB)vn!@hX?=2$c!?YT6Q' );
define( 'LOGGED_IN_KEY',    'Cde`}8$%{pjjx9.D?=K^~047RAEc5[Z%FY-Do4&MpY*?,Wc5qgZ:L=*Ti,g}? _4' );
define( 'NONCE_KEY',        '/>Z,P~sFB&ijV,;RmUixfIY7QYR6=CF#Za]{DwhqO D*)0Jocnv3z7mj9Vi;0<;G' );
define( 'AUTH_SALT',        'JHy@|AF0m-bGCed#~{uPhybV5QoJ: CKKjX4&m(tD9`p0n[K|.9_1{>2pO80X2iZ' );
define( 'SECURE_AUTH_SALT', '4wPtG3.J@#@MVbNe2rRQX,_v5{.|G`Xs;8Oj@GR)S /x9V$+1-Hj=iC@dMdMuv[X' );
define( 'LOGGED_IN_SALT',   '5eLg,Zw)jb VU>itGG_Q&a8JB-zFz-^PBhYx9L@i@dez5U*NovO~6OQvT4n0N8OD' );
define( 'NONCE_SALT',       'FSV.`f]Uy6uiG8F0YQuu{1m%u?s%.cX2pZUWkxOpe;b6S|{q@Xj)[)vxmM6rJv5e' );

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
