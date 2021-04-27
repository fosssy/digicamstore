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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'iAKtB87Ls~Z%}dq/:C74#nY#g=.QuCbrn<bea#f:C)>H>feo3@A?/R+^x,dJ[yre' );
define( 'SECURE_AUTH_KEY',  '0(tV(*Cvx@.>AA0nH |J$-PLF(#Uq{;3thm4<fk0,B:8xN6^G6M40$aS&Ir1%V;Q' );
define( 'LOGGED_IN_KEY',    '^!KTs`_ZUqG+kJ]ovT1@_ER53L9USg8PV).WOx8lsS`k&O[>.7~dS>X0M@dj2GuH' );
define( 'NONCE_KEY',        'A(er0[]iqVToxpi>2lulMpbg`!2}0%d+kJXhss}Jx=6m?l*$[_B5X5qrkX_^#c}K' );
define( 'AUTH_SALT',        '[b;NB&2-NawVL!1|ypdg3Ge3 {;^pR1k(;GA.$7k:}A{]lhm0N tg/T1hc4be4m@' );
define( 'SECURE_AUTH_SALT', 'fni#HwkYYrq:oX4L}gI;Wf9%:)asZ&{w$,0O@4]f`SO<YR?W.s}E36vO$tInQ4UR' );
define( 'LOGGED_IN_SALT',   '`I9#Hr`~:4nDWF*1fBQ]q6yo3=GZCzm7$;c|:F!-6 hlZqb}ow2(ZF,qzI1p~`u}' );
define( 'NONCE_SALT',       '-O2(B}S!K=iPDVHAs~#;8SMH+&3Wpep6B(+VXPK<D*4,O~~cM%nRrv83x,IMD1U~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'user';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
