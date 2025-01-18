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
define( 'AUTH_KEY',         '2iw=cV9f=VZ0DT$PH{?n(]8I&b|$m$>*$Ae>WU^BJ>z)CLI=%:JMh]ci&6@L8XqI' );
define( 'SECURE_AUTH_KEY',  '>B(X$KJ#k4(0?7iH~pZ/1]v}o`-*WD3[UU]u*_BO!P:bXW/?(f)_*S|8?wgu#3[E' );
define( 'LOGGED_IN_KEY',    '1,3l`PXLDf$`8pX!crA&t::M3?x8#wl#DX2T<wR:Em<;n!JIlb6?K1Iq9VL95AHM' );
define( 'NONCE_KEY',        'X3l{xUx)<]|@)Q.Ur%vrbw#`*R=>RSTCaI]2y3=JR@5=#Psfr&k,fjwb}CF*,L+<' );
define( 'AUTH_SALT',        'FqTo>(W2G$>+p}FC r4J@8WP-Cc.rLB;cq?yz6KV&LK%I:05%RTXt]=-D/W=;q&h' );
define( 'SECURE_AUTH_SALT', ':gxYiw.5:>3:IfUJ!S`@G$Mj{8W79KDRJLj.VwpL>m1am1L)g8%S{t|^qJWObrj1' );
define( 'LOGGED_IN_SALT',   'dh]J69}S):KL=,]|XDH.2_RVE`A*)wia>1]f>Vfv4A9B2]_&UIQ4_[Az`^w+h[qc' );
define( 'NONCE_SALT',       'ag$5-<jd7%.Q=W`aUWV{C.)#H[p@2U*>U$RjWr)y=4pN@Xv]Q.?t@/Ln*c^Uq$C3' );

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
