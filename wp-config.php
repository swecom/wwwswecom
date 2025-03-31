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
define( 'DB_NAME', 'ouaoushop_swecom' );

/** MySQL database username */
define( 'DB_USER', 'ouaoushop_swecom' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Swecom@2022' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** define( 'WP_ALLOW_REPAIR', true ); */

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

define('WP_ALLOW_REPAIR', true);

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_MEMORY_LIMIT', '128M' );

define( 'WP_DEBUG', true );

define( 'WP_DEBUG_DISPLAY', false );

define( 'WP_DEBUG_LOG', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']Wk+<]$&BD3ei$e%hDF7Z&&U;ZAthyYJI~~,<Uo:9Y@R8p-V=|I=?[-I<bL@>tb5' );
define( 'SECURE_AUTH_KEY',  '5T/w~p,z#?w{+NZf.5BC{Yv:]_A B3ItzUwF=zkt1{V5DX0)^ZN7WrUH`w0_f-6j' );
define( 'LOGGED_IN_KEY',    'skJ@ DWF&nW+O.5],+t~=g}8Td<TE*!q47pk@i0zLM~x3((Tn $Rxa7tU*?BbN?v' );
define( 'NONCE_KEY',        '8MV4N&H;+UrtJlq>I]w+1GM50m)m2auQiWk;$-(9>Pt+I+[:rt$*0p7q($QE-L};' );
define( 'AUTH_SALT',        'vPwh(%{F[e3JA-z3}R^87%b}-~yuJsak9cQT  AkDKaTLwF}qbVa]+}4^^U%I4>E' );
define( 'SECURE_AUTH_SALT', '<S{d9xX0|loc_1ua:x:#=%BJFU1IJ~XqKMjB`dPsua|sm$M:[}x*^4|h1ufJ>l!B' );
define( 'LOGGED_IN_SALT',   '_.GhxRF ZMfn4})Tvw~q6`m+uRP,Y| C}T{c`g.rw=,#COu]A41pt/^W^!wwFbrO' );
define( 'NONCE_SALT',       'RU;wK`u$;/V*j3/Z>uFzgiTyS,^m)(mb@b?ctUsrMy&D]P}6x1jGeoZk[3`w<)oE' );
/*define('DISALLOW_FILE_EDIT', true);*/
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'SWC_';

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
//if ( ! defined( 'ABSPATH' ) ) { define( 'ABSPATH', __DIR__ . '/' );  }
/** Sets up WordPress vars and included files. */

/** Sets up 'direct' method for wordpress, auto update without ftp */
define('FS_METHOD','direct');
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
