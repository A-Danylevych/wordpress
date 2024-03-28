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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define('AUTH_KEY',         'uYhs sQU-@|?U:HF1HA`0H*_Zz~qp@`.3JHmPRr%U)Jq(RVak$8V5Al|z_PEx)Og');
define('SECURE_AUTH_KEY',  'Oo6duu1^^3W746HgfhNfMzhHZ=^]h~},Za&jR5#r@a/?&w0XVkaH?:4>vPrNd2m!');
define('LOGGED_IN_KEY',    'W9(NKtu8co@SGX8N~#xq&xu@d@>Cz;Q~eqM,!mu]H-Gm:}:zF7vZ%M_j}ShlE+#_');
define('NONCE_KEY',        'X[l*xpcq]^Ac|;vl}O;7JjViYE.lWwh`8n-m<sV06AsEFj]WNBC9x`+ghZekr5[H');
define('AUTH_SALT',        '?Tm{67>Wu&Ck4v/3*:`0C-I^q@Q%&O`} ?o35~n~n6)|Ha{XN_rMBL7E4H}}$b4e');
define('SECURE_AUTH_SALT', ';7mc~V_A]B2dud}iBc0Y`x*e2;|G4AKuo@1gFW$PV$oQaRN++q66!,A%gJD;+0kv');
define('LOGGED_IN_SALT',   'Put4E#J7Q_*Tzc05nr0B*7V5|i7j4;r_VUbJ6Gl vxC@,+N8#=6$3Ne<5NsqN>LB');
define('NONCE_SALT',       'Gz%(Pp^-s1I.<fn+c1K-r2enSP|}5/0Tw~K!}#=uo@NFu!81hPmcuUs{};37q^l]');

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
