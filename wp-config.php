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
define( 'DB_NAME', 'opticaso_88cb1l' );

/** MySQL database username */
define( 'DB_USER', 'opticaso_88cb1l' );

/** MySQL database password */
define( 'DB_PASSWORD', 'M6DuEPDJaliY' );

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
define( 'AUTH_KEY',         '>t@ hR+Fg`_ T&d]iPCu9gm0sLPDk}Bh/!O2~TVKl+fQkDijFE@VEZUP v~72ss4' );
define( 'SECURE_AUTH_KEY',  'zSqW>162Q>j/9Z7dU<n*doy#Km:lDa%dGjicMTxsbk-d|:^XUou};z[y76{;:%V,' );
define( 'LOGGED_IN_KEY',    ']oF%_;[wPf_Iu<fPE{Siif4&: Tg[soQess}#Vb2>VqD%?F2zShI=uayBy=$@!g8' );
define( 'NONCE_KEY',        'LUV6&`(8/ZTUbO*(-)Y6=wc]b e{Rj:fXtCK(`fxJ$9&+AmnAu=64Rb~gzyzZZGX' );
define( 'AUTH_SALT',        'L?:vKE2}H.e^GTJnGX&fe87uqa^%6~S%Jh1UD=cn(_fDU(lCmW*gR:Cb-YBfcD0O' );
define( 'SECURE_AUTH_SALT', '?N^!}yZk)+#dfSIOE2N~;H3|DNW:}pP8HfrzZs;!WV!>b2+lnhI&*{W?V[6Q*Zar' );
define( 'LOGGED_IN_SALT',   '|1>KnXbMN.5^|higX{mACqnn@@3.2D.+#j,mviN8dp<6JL]vxwRyt~8>mb#$<&m?' );
define( 'NONCE_SALT',       '5G0A`r7nt,lg)T&WFceVi.i_.<qA 2l=[G,P|<SibO|Km9x{U+Iz=&N=B@K42e9#' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
