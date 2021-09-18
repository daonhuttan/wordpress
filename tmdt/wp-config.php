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
define( 'DB_NAME', 'tmdt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'pfv24IO0Jp(@Xzr/d_}_5g?b@C.YV}s{0k&:a9}8^_w]{L^m6Y3<l6sS_MsFrsn`' );
define( 'SECURE_AUTH_KEY',  'wJM1% `g.&:%wSi !:4MNLb/4Y**jPMF[+(qo($>gxlTf/qp(?lZ%Q$}4Y.ITc}Q' );
define( 'LOGGED_IN_KEY',    'LB$AqTHC0Rg5LRVqxA}|{PLBvHAj<^<%p[nzUDjt-eS``iTvTO#7`w!K(*gw|=Z>' );
define( 'NONCE_KEY',        '7dx<wi%Z~HK @D4p0U m i1CY?4,k,&gBxGn -n98{gZb&E:$#!W(&0ITbx`r~lf' );
define( 'AUTH_SALT',        't!Xob+=Qq[8~&Tsxo$#}B!&`wBFdrTgHC6f`$2*)+q,rzJyph-dp6o~i:wi_Q]Vr' );
define( 'SECURE_AUTH_SALT', 'x:Q,?AUG2=q<BgOPsI1YA.3Ber~?id5E~2#8,(je@EKJb=X>j1~>=,ZSKYWp09.X' );
define( 'LOGGED_IN_SALT',   'F+|OXm#lP[kL4~Ja)syKa|l;!Pd7bgPfWS@NQ%tX9eKL25#egUUn>s4!Q=aZpI~0' );
define( 'NONCE_SALT',       'pp#`.N*pl=.:R,lPhlwAc@Xt:$; W}+~Q`H%1at/{ZV;`rsL=Z)vXP2<a(KSC7B)' );

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
