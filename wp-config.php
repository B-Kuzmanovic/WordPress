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
define( 'DB_NAME', 'bkuzmanovic_digitel' );

/** Database username */
define( 'DB_USER', 'bkuzmanovic_digitel' );

/** Database password */
define( 'DB_PASSWORD', 'p%mDlAj@{jb]' );

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
define( 'AUTH_KEY',         's_uThYt?Ry-S1jL6~vV-o+:q]N$Gd)8?glkraHj&a?Eep:Aa;5l$d?l),v?v)YTP' );
define( 'SECURE_AUTH_KEY',  'AtvKs#i`YwB?:/.frjq}h&-&zbrtnsfSv-H._5ZOG:.`tkd31ryJp6E^58sR4}3e' );
define( 'LOGGED_IN_KEY',    'DCm.v [N=dyT^khW,Z+ #9~2~zMhoTNT7_t2*[_utqQ$q.d`vNv)h9l$Od`I_}S,' );
define( 'NONCE_KEY',        '*{hIAHNW) xTRggGA~IuZUjW 40jMMs^ {1U6`}~n1LZ{<4=o*y&Cv:oNt8dxAw`' );
define( 'AUTH_SALT',        'NVa c6EEG7I&Kj0h(8*NTDLYl=W6zU9D@Vc2S[AFBLp6,o=Hg/Zrhoh:7EM;TYLn' );
define( 'SECURE_AUTH_SALT', 'b>Fu0#E`=ZS=9g2n~f@L-LIkbv(.O(K<Xn__Zswm)ilAIo2w6=y.4(9pd#REB6W@' );
define( 'LOGGED_IN_SALT',   'UU~p%_9H]bBw-2z>}lj(9`wT 9RO6JPl>~V95fIjK/g`3s*nJwQH4Vp-.d{V$<RP' );
define( 'NONCE_SALT',       '|pustctPx4fe(5!F&(v$<{06+C=?sz4^<P9ifpf!@K6KwFQZ`$cZ6QdSsUJ)Sgqh' );

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
