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
define( 'AUTH_KEY',         'Z:kjC1zBd;!6>8#_vyeYNe;0Fc.EQMNq)ooh|~6bMyM5EM{wG`ToMeKJ,OalCN#?' );
define( 'SECURE_AUTH_KEY',  '/oCJ$bzcMK!3KkZRZ*`PMW6&)#]f6-c2>N2~#Z UiLaI2oRkn%Rt73GbkPUc0Rc=' );
define( 'LOGGED_IN_KEY',    'pKftIJmqvTA#MvBEkQ3fW9Pm=ALukt6z9fX7-NbrNV]O>~b5^CWKlj`-mIf,NSN%' );
define( 'NONCE_KEY',        'lkqsv#7Tdq7^RL5Z8lb.4FNPf-_ThFSJI0C-@`I~6w^m;,l>3Kwr9)$j?_3FPyDy' );
define( 'AUTH_SALT',        'a&9J_wi65~nLwM}CUq7!2E_bL;79&|{*Z-cSeWDne+(-;1c7z%*7_UJMy=`>#H#w' );
define( 'SECURE_AUTH_SALT', '?a~30 VDB$q*dZ}7,Uk3EQx[&l;<]eyAIk+9YUP;#VD3y$;rH[Hjp?RLW`YhL6D8' );
define( 'LOGGED_IN_SALT',   'U`..N9eFW,Olx>|v<;D>oN$XUMw#U76vMLW%.^0,h!FM70.V~wrMdVijSqv*W<OG' );
define( 'NONCE_SALT',       'wPS4jhzJIjF[?| !Wbdm5FRdmzO|fMT?ttEz:PtQJLop$N5([2d#e@}=jz7]au97' );

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
