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
define( 'DB_NAME', 'wahana' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'GT/2O.O&,})+%KDnc/u9Sgld|BAEH8P%d#]d{:d:u=fFBXA&iy{w[@k+cg&X+>Vw' );
define( 'SECURE_AUTH_KEY',  ' VMi..N`!-KR7cFa-3X2Cy;~C=g}lB_X{)zzs7AUAgL0rE_wsZj7)81[J_oEw_?#' );
define( 'LOGGED_IN_KEY',    'htdN,{8H;x?j<D&y`!>6}^SHwr}cEOrx3Bq#x=!1_%g[%wantDg_,4zSm?*-uDdT' );
define( 'NONCE_KEY',        'UAZ0M52c/M&8WNS$UhI)Bu+Xc|eNl4*&Fz-8!AA;!JU(0=_Rd{$ISYex4/iv *j<' );
define( 'AUTH_SALT',        'h$J c[%{5nA%!(/z uQgYzi#cSl6EToGA/~6iE2njFn3.;0ij<sz_6Zw.QlDW9{3' );
define( 'SECURE_AUTH_SALT', 'dM[ni[5PBfS<1_$[kjr_e~XYY&yH(K`Xt?U!VLfVHwpMQWuET$O_*bO.C@U =]I|' );
define( 'LOGGED_IN_SALT',   '(41mm-v_Scm>xysQr;|BWT?AD_C,&UAq %YiIJ5U0W$0:fIr%~j;KaMlnoQe<2+H' );
define( 'NONCE_SALT',       '{bkSn?JPHa;f+^!S#hV~mkpFu =zOyC:apnd=P?n4-cZaLcWgMMn81l~.fi,,$0u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpo_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
