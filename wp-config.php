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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '<$JGQ!I|sQ9?6P-X[G,ZVQ&6$vJ~h,KBac8d7,a;@fIt Y4rnKr}R1(QsQgcC%8v' );
define( 'SECURE_AUTH_KEY',  'i4x7KH^Z)Sj[,M&%@l>E<Sq~i/<pJ_Z~w~dOth8g)!0_{IK$KcyCQE!#0,r+/D&l' );
define( 'LOGGED_IN_KEY',    'YVd!9$@`*P{Eedm)nqrL%ZThD40O]J.Q3X!Kxa.,S=9)h;BTP3q2QCB.F_-P@~}G' );
define( 'NONCE_KEY',        'Ch%?8v|VVL0o:eZ1k`0hj6K.6=8xq[)kH6LAy.z!v{LjcJ2sjZwea(nXA^S:Vp~!' );
define( 'AUTH_SALT',        'bed(3$m_Ljkw@YqrCI,bA-=ea5{1GL~4Xb6Z|-+gHfhxZAy+lif_B#Sd97`qW2jw' );
define( 'SECURE_AUTH_SALT', 'Z@@&@FD13)~]%S{gkLJxc)zmo.~{HX4nvpIc&Xh}RAM7^jrp@w{g4(@_hw~jgEwY' );
define( 'LOGGED_IN_SALT',   'Vj$Wx~uR89cX7SVb|pAiZOacpUSv5YXm{l#h.b9A/$M.$2H)m!!ODK!Mn{y=Mi+?' );
define( 'NONCE_SALT',       '6LyBKdk~3THHNt2 e &WM(>EI683Z_Cfi([E*s`z9%vx4y+=VBX^G}r_Hh)K[549' );

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
