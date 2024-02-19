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
define( 'DB_NAME', 'street_hawkers' );

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
define( 'AUTH_KEY',         's&y[@cXwwC>)E}vyR0i=e}AuIL=8XUp/A<n/k2(W&u#SkC1IBqP *R{sI`[ixq^,' );
define( 'SECURE_AUTH_KEY',  'O<Uudj!;Ulca4JBT8LQpbNbAKH,Ab:lso|&:NYHi}cn{dWT<UL.?Zc]~f/mcLeE#' );
define( 'LOGGED_IN_KEY',    'QL;W77QNS[=3s5(8IF!xa(OKSS>FmD=snXknG?=>)O4.EmE;ILWqls5-Uj,W=+J#' );
define( 'NONCE_KEY',        'D?$MXPR6`hX}M%%55CD{#/x=C>jLr)N_&O~aA<?y,@PQIT6+.B+:@QgOHQ<*sYkb' );
define( 'AUTH_SALT',        '?(XbsRYBV0sBs&YN%8^+0mN8/5xdbiA+/o#<vLI7W0)=klX:RNC)9p=zvABdp/|e' );
define( 'SECURE_AUTH_SALT', '=g7SEs$06dg`[(?mS>RyESJE6q8^Sz=K/WMW?(K>tHFM9Haq?LtY~`P T-^?&<=D' );
define( 'LOGGED_IN_SALT',   '%1[P1+F{+x1JoO`WNi*UM<fRdy]In;,1;u(0sl%pq)7a;+I/ClzvMk4zNaH:ZNF<' );
define( 'NONCE_SALT',       '`1U!G!f4Sn!5cZQ*HU[(yaj?a=^ZRMR0`V++Zs,IX!@&bJJ=-SzM6G=^&K=fA(JB' );

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
