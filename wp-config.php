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
define( 'DB_NAME', 'maliba' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '>aRFBm7Xt]<; yJv*l}6<V7K&x+1HW`S$4(_YxnA;1< h:R)X!9s~(G4#l.Vj+vb' );
define( 'SECURE_AUTH_KEY',  ';h.sA2B> ~d/fr_Yu9_Kh%,2brmP15o?zBXY<7eR8DyBT,BoVf1/WdLZp^u@&xSa' );
define( 'LOGGED_IN_KEY',    'U884Yg]hjeh|]TN<(im<t;;b@`!ow;+J)+DcYGU~kiwvQLB{_/8O>Y :Q{A^ko X' );
define( 'NONCE_KEY',        'Bk2MTM%Ie/qniSh?vNl_$#7|$FCIn(ST,k#CCugTWA^Eo,%ep MpQ);>&N/WR(Ue' );
define( 'AUTH_SALT',        'bfM{~jJnLx)I~.+*Mdo.u8FH6n+60}%-,C[#zw{!GqVIeRp&3ajD,A`7L:,X%!@Z' );
define( 'SECURE_AUTH_SALT', ']]})a.v4F,=`1hI*yj|8]XqamPL/UE,TgxzdzduD/}pC`z|w/GF9!#0*Kx]!Cwxp' );
define( 'LOGGED_IN_SALT',   'e,8E0E~>FDQGC@{7N+ImXblSZS:K3 IPa2P~vwRB7r_jA5G&M.B5Kn}!6Uv$-4$?' );
define( 'NONCE_SALT',       'Jn EMg+#f^c#1(K!r2J@M_,S~Mc}f*sk82077n4uHTIp-W[}Kq@@HJWJ~Z|n.U2$' );

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
