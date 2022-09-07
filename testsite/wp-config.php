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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         '5(H6:aQ@Hq;&Z$k)V4f|XhtExNX)`y}5#5e-pZ[=<h6dd?7j^7vs5H_XS1a7WHUg' );
define( 'SECURE_AUTH_KEY',  'w4dgEscq6JIyc=c|%UxD#[8t71d.R3hS2&,OI+3:ptSfK3[;2*iq4CN]07^@GH=v' );
define( 'LOGGED_IN_KEY',    'Vcdtvk(-{Ss}=50:UR2DN3|INIF]4ytx_rd1KR@Ko]d@@kYBqeVPHn~>?fOty%I(' );
define( 'NONCE_KEY',        '*(_W&a&N.JuHV6z+=KP-I#S`l-+ tiTEI*4v@y ~dadT#27=7$xkAS5hU&0O|#:r' );
define( 'AUTH_SALT',        '[-RDzRU+7j>v#gv>Ut$[vd|/C;#n;.${Y82o>jMsR1%oJUqROQ$Bh[iH2#sZw_k/' );
define( 'SECURE_AUTH_SALT', '#&dz&sGwSw8O52>)2M-oT^qs?ft#>F-@M[/SnLJ(5fb0K>ic@0Fv4f:b$QZ?,.Ju' );
define( 'LOGGED_IN_SALT',   ':z,GX^ZE|5t82?pPZFs,g&xJ[Me|Im^VrJB<&2&6HGGwUi]IOc~KN]Y[JmZMcDJQ' );
define( 'NONCE_SALT',       'B<`1xxbyY}nf.Fk3-l`PU1}!U_`W3KJaMD%?Owig377cmYzetOt1dK#;79jk`xf9' );

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
