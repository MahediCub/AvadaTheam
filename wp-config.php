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
define( 'DB_NAME', 'puran' );

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
define( 'AUTH_KEY',         'FREQ4A_Lh1Mct]x$PjuKqb`bM-iM6^=S$pi2CMT!__b>sYWP@tDp1H`CI+dkSU@(' );
define( 'SECURE_AUTH_KEY',  'I7WJ)+fr4kL6VY6QD`BO:4~L[T/;2L#Z*G8JFsU^pZ6+sUrSDig3*,D;YDoFvApw' );
define( 'LOGGED_IN_KEY',    'V*)@1c*2-<SYdJMvLCNi(okXft)wR*3?=krI6SvbkF_E+y,gqXtFU*lV9x/,ktKv' );
define( 'NONCE_KEY',        '~pNKW1<S-)DuHdJ)Nu`5-/j)5S-r2v[mAa!^?6>iHt57s:3[!x?^[xbQ1_LkuRuU' );
define( 'AUTH_SALT',        'H]>uEwI?*@Y4>b ve~/@M5CGpq_+M@q]8!Dy}!Ee`^UF,,Pr*JR7z*1wi NmMNNj' );
define( 'SECURE_AUTH_SALT', 'pmocMIBi BNNbQ)L[Uei<d.fBdP32ywkT>? +J!!<ExGAVx:iyNDTl5/5Dt5v:LW' );
define( 'LOGGED_IN_SALT',   '/Q9V1ZPf&hQ>!*aH9_&Hn_gQK_l{6p.>$x!<9QY$/M:i~>i!*N?D{,EE,wl( vXb' );
define( 'NONCE_SALT',       'xM<ks!XTbTY2?!er0Y}sxh)oQLz `L|]h2mqPk78R/@}Dt_hS:7>>|{(CNya9S?7' );

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
