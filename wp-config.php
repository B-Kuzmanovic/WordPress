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
define( 'DB_NAME', 'bkuzmanovic_roman' );

/** Database username */
define( 'DB_USER', 'bkuzmanovic_roman' );

/** Database password */
define( 'DB_PASSWORD', '8eym($yOKzU7' );

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
define( 'AUTH_KEY',         '.#?H*l*a}DrM.qi^uYJ;?E1+PntC%Xf0Cz=E1^3}aUn|g,u>K95<2Z2)>4;e9%tt' );
define( 'SECURE_AUTH_KEY',  'OeztXiPH~<yZQ/gVUzQ:RzxRW)yrQL(tU H?-_+%m;sU.80bP_$VZCP]ySdfq`v5' );
define( 'LOGGED_IN_KEY',    'Z%-$<gQjEd@9t`q2w+{bko&Zb3[EH)_O*)!CMhW^_ZDa]Egt9%ay-.}Bp%5V$,V+' );
define( 'NONCE_KEY',        'e[fz<pm4_zOAkqGl}A;b7Hd5S)2g3me=X[ET;%;UNM:KMmFd#T`T62kf:=j[m{~*' );
define( 'AUTH_SALT',        'u`>vg$-=t7_JsB.Pb(+ilOZA,~<1|&(D ?8bEw~Z-[,rvLW`|t}j`=x14^6Ne=,M' );
define( 'SECURE_AUTH_SALT', 'M^w;<;DVgC7yreVyhYI|.u%wP!buY<#UBynx$U&0&S>7oc<k3bF.uN(iyE^so~nn' );
define( 'LOGGED_IN_SALT',   'tDVjEh1Gz$ *%hZ?7W{nD{>67v%@u86*f,WKFs=<qWwdJ][LPi/Fvv/Fp2 O3VO^' );
define( 'NONCE_SALT',       '`Q2cY~(oL|%o~ij`M7J,xZ^fgaGF5NblV%>>81X1^N@nzPHDQnQ.Z*$P^nH^`YeM' );

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
