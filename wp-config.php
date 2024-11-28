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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Faresya_Ganteng' );

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
define( 'AUTH_KEY',         '6mHIHRc#28kK%(^52{ML Nu*U/N{GE&d_NU{,a4Y=PV/5`s7bU TavATz.b35 *+' );
define( 'SECURE_AUTH_KEY',  'wHmKdYBsU/OQg@1~q2uKofawBqkz+L1#=Ft*@+7V6, $DW`a5![DJ!`]3N9^/unE' );
define( 'LOGGED_IN_KEY',    'kjb@EQ[j;*(B50`+dI>sTb%[v7YJ=qV@`I_TX$GpzSq2{dg^ltyMy3pzahD).^Id' );
define( 'NONCE_KEY',        'Q;HJE]1r4- {;U F ecfA%V*<kbf3{3/RkaiEqdl3zYe<c&hHZRWG$F[ J2?9xq;' );
define( 'AUTH_SALT',        '0uQjtydXY,;?6!Tnc~=YEnMI*:18^@BumH JYV HC{B1l9Rd3YRd,Wc.g$rQ0o`i' );
define( 'SECURE_AUTH_SALT', '^= aC7sj3B6?A0^nIR.<;3rXa0]m;7n-} Dlb32,XqHU0=tgkkjKcS2#Ub0% e5Q' );
define( 'LOGGED_IN_SALT',   '%rMz-*&Zkg!sqvdVH1g&90,F/Y{&ZT^v7;~Z.Pl@K@ZuJoU(}{$>j`0?O8HY]`8}' );
define( 'NONCE_SALT',       '^<|yV<pxF#J=}x#xMT2FPE=&a_m~<L(iigK~D~)U~/j5]N_),Lf#A44440R_?_4W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
