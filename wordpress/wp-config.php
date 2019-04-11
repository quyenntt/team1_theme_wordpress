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
define( 'DB_NAME', 'team1_theme_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'team1_theme_wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.189.127' );

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
define( 'AUTH_KEY',         'XwC2<vUWyL.~QBKVMK(mRbK<A]]AdZ?k;(Wu;,EQO{<1YLyi&%!bW*G)4w<b0X.@' );
define( 'SECURE_AUTH_KEY',  'M^gtv}@,PnYLViKRyj]2Hk.2u?y4k4R1-}:N4[rjniAodTHIrIJ,2Ok[0Fb-YY_o' );
define( 'LOGGED_IN_KEY',    '8imVL%N5CNm0%Pk-Tzg5Eu=ZYU^K[a;D9Ts?@04(_&zmj:KMG%3@BJl~{*F1FLUR' );
define( 'NONCE_KEY',        'TKZ<vNSr:WdN;PyoA~D>0,; RqQTGdqj?^8<8libE,!/m@19H9a]3XgV-:N,56-#' );
define( 'AUTH_SALT',        'iaLef-W>fyQDs^cKLRBQfU>>WD*eUfV%6-,w!|G51pk1j:P5RB<Ldx-w5IN03E8z' );
define( 'SECURE_AUTH_SALT', 'C%(q0rEk&ZQ^*ZZH,)Wg(`d/Rf]GP%_s3R-dsUY{!j,E=f^^ ypm(SkWBI`(@6-@' );
define( 'LOGGED_IN_SALT',   'p_2!.N/CTe( 8R`8i}#Vz@5[?8i>s>?HH-x_]O}X4*r9D,LXrh/e$2* DH=.U|sY' );
define( 'NONCE_SALT',       '=h)Fk,A 4o`56LeRFIT54*l!%)r/JT+N?N.4v1~rHx|bBV}Y,85z&yrNmi2@tAHX' );

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
