<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'bkuzmanovic_projekat' );

/** Database username */
define( 'DB_USER', 'bkuzmanovic_projekat' );

/** Database password */
define( 'DB_PASSWORD', 'a*H-aRR&0_F4' );

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
define( 'AUTH_KEY',         '~A02Ua$`V;YE 7B%dV~@8L<r[_fQJ;k%:6t<W@:j5LlBf{1@}RJ;#dGG4nkFy0B2' );
define( 'SECURE_AUTH_KEY',  'aNQkb;e03`R<l/;]~7)Ya2@doUEqTXVd<:h1:lwd16/Bj]2Pn%4v(h6#4r3:t(E*' );
define( 'LOGGED_IN_KEY',    'Tj0~9h)_k(ttj<GmV~nk<Q5QJ5[bPbEMu+Uy8f{rpW}^-{jXc@-J:#Bcf]o%LR|R' );
define( 'NONCE_KEY',        '%-8gwl{HRh[K2wp&J93d$3(G}o.Aa8mrDiBB)l_|xi2vTy pt#?xe$Og(ea22V-9' );
define( 'AUTH_SALT',        'p$cKsX/)sV_%18+hru[E6%[-T3PDc<nnV}#:aUI%9EYDE4)6i{KUu#U6aY5+Eoz?' );
define( 'SECURE_AUTH_SALT', 'DjmBbp!/PlU=luz}2ck^iQ|gT.z7TOd=6yAo}E; +pc+!26OFE(9;/K!Odhv)K@z' );
define( 'LOGGED_IN_SALT',   'a1:]Gckc|fHTMp%s&6 ,$YMZ*&2{ZjFxDsDF9&K_AqqfFdDV;wAA>K|=O_2yoqB]' );
define( 'NONCE_SALT',       '[_PATt(;Ys?<Pck#bEkt3M7qN .k3dOS2?3oc^``OjB#e0$j;Qq-)z!N67qngvgS' );

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
