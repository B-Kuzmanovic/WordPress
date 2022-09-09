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
define( 'DB_NAME', 'bkuzmanovic_portfolio' );

/** Database username */
define( 'DB_USER', 'bkuzmanovic_portfolio' );

/** Database password */
define( 'DB_PASSWORD', 'Mc0IFKj26f@_' );

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
define( 'AUTH_KEY',         'I=~Q[^l9cUI^oc|LdH2A1mG(ZIbXI?EY_%&g2s-P{A-Unb~gpmt(xn6|#|+A!$7C' );
define( 'SECURE_AUTH_KEY',  '>:y8]m&~><=,E`V?-rxitHiuA&ezb/S(J~;bR2<U`;)G|!$bWXV>=L63 }ZYF/yd' );
define( 'LOGGED_IN_KEY',    'P,A7KN0Rq2j {E<++iGct?s*uVZB~E$U #u 6E.Bx_treO&aLd@RtBU{3!V$x:!D' );
define( 'NONCE_KEY',        '*W~xb:uvC(t/:DWx),jJsiIQE])zSYmeh&ck)`-Y}i2!||DLj#Gq<cGdH9[rp2e3' );
define( 'AUTH_SALT',        ')GTL_ql[(GY%<NZhM$83%xAwCK.y .4!l}ZGlnJx,eDBAdN tx<(4-PM:@o~TDpB' );
define( 'SECURE_AUTH_SALT', ');E27F cSV+jk-xKrX>EE~~US@RecN+!@MBH7b_x3t3nb;/TT/l<f~;8$CZ3.^iN' );
define( 'LOGGED_IN_SALT',   'sn&inoqQ^F_pu]AN}$(#oH+L!qR;BUgmw#TggE/,zUbVsz4b)CU$$w~K$57tFxJr' );
define( 'NONCE_SALT',       ']y`~MZT6LtSIe+7&zbahI1mk%qSPpW]M7lLfG1I;Y}Q<vWE5Pk|P F=[-ZU46pw}' );

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
