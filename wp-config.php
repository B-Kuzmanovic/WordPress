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
define( 'DB_NAME', 'bkuzmanovic_trpkovic' );

/** Database username */
define( 'DB_USER', 'bkuzmanovic_trpkovic' );

/** Database password */
define( 'DB_PASSWORD', 'WGV.ov.jQteP' );

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
define( 'AUTH_KEY',         'N/[P[0U&TzGlbPa|44o3nh^7-@I!aKExD!xHdN!z[osmq?WJf/t7G[H6me#{,}vM' );
define( 'SECURE_AUTH_KEY',  '^`XNYOSt6{0Ow)xEbkklr+uOq)HQp+DzDa8o7!zFLboNhWLp[}]gO`ig&`,!s^!~' );
define( 'LOGGED_IN_KEY',    'e8]^A4`++;#-<[A.gre<9. ~Ni[#Jg>~#]fZ0#1J%YM?bn1}E!/1gDq5__5JN<re' );
define( 'NONCE_KEY',        'pK}okjM-9HN:yI5SYKrI>Pu%bh0sI<E,C=x#_=m}SUonG~%}v36F7O?Le5;wg)q(' );
define( 'AUTH_SALT',        'Mxw(Owv4TX7^Lm/f4K9,e1Zp@w(@9)]<1*R2/,Cfx#OW)}A2ag6hj)TNX@`.q7r>' );
define( 'SECURE_AUTH_SALT', '4:{aF#~}Z4COCGu@2]$Duy]Mo+fg^F!PS9d|:LB[=#l ^=U:siX?EdB#uTMPAKBm' );
define( 'LOGGED_IN_SALT',   '^J.tT5F:}=_Rh{L;@[HRtsNY#_H0=]FD&bL6m[<1ES 8CJ&Zry@[`B1AiW4&Y.Sc' );
define( 'NONCE_SALT',       ';3,VY5>Z=QZXldhDkcTA:;#%:]L^dq?6w}|A%1_MdSKY@mU/=lK|FLh-S[Typ!OS' );

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
