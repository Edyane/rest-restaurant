<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rest_db' );

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
define( 'AUTH_KEY',         '?9`78M,$]/LY^d4CZY<PjyGB%mS&8Q_ybbhbqLp<~qk/P7wZKxNz}[%d[1NKDGH7' );
define( 'SECURE_AUTH_KEY',  'eGlbgBJ>1mZ?cbg[IT)$3>? HfSz)83n([z9, Zt*AKRYLAD$<DZ-]?!h]$<hsws' );
define( 'LOGGED_IN_KEY',    'd9cu92ouwIXB=}](XMUrp>B+,[T/oSLq~fDULlG5NO BnLEY[4W-E#C>aRGbQwFn' );
define( 'NONCE_KEY',        'HWh $K?,AeDL#]o8n0.s&3MtCB y77xr;ev8|S0@~W|(}Ivl+Dp%A$5b3B9k[%78' );
define( 'AUTH_SALT',        'Omzd*Zjj:k9mkV!c>K*aCp];3_Dc*Jz2JR,q`L}K2K_Z!*A{c@#;}yW(5*SXGBQ`' );
define( 'SECURE_AUTH_SALT', 'Y^xKDuZ!qE9~8t4Pj;3*l~vsrQ MPT9!]$laOuM?|Nh`xHX&iJ84:roj!I^0L/QS' );
define( 'LOGGED_IN_SALT',   ')Q*8J$i@g gRQ)v?bo`Z78>hQCEw{;g@S:lidV3aS*$g~|/0cll#}7oKb2 *rK:&' );
define( 'NONCE_SALT',       'a:dyl5K6]o|EXQGsOcOI_EM)P!a)J@*C`/p?[qEY_0Gpl3-yBqGr ,g&(9$-$BGP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
