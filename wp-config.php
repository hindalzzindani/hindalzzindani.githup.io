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
define( 'DB_NAME', 'e-commers' );

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
define( 'AUTH_KEY',         's)9#SxdhsK@&$s%q2/`V(=}Ke.`dVi8N{-h#4y^#&Wq%Sh%[;-)>]uH}_BD B=i:' );
define( 'SECURE_AUTH_KEY',  '9-gEvpxP:RyMF!)oUx^LRYM^A;Qpt6*e -B2jij_KZ/|&f7Fs50[U{JY(+~RaeE.' );
define( 'LOGGED_IN_KEY',    '`)l(pK@UGav>mldIMfpZS=u7]NQ+(f8oY@^*J8&bFbI!R:m&YP0>m$vPcnC5/s7l' );
define( 'NONCE_KEY',        '`bEN1q#I3o@pecM]TpDhRjBPLL^^HMI Y:x.2:;Eyn_[*<(E^d1Kp7n!T?1xj7bM' );
define( 'AUTH_SALT',        'ZFd]O3[0M5*u99)DzO1lV2HX?nZUxu.7vE)??$FASt2e&[#U+0eh%@^AY[j6OBQ_' );
define( 'SECURE_AUTH_SALT', '/ {N?b6g;}Gi*@w=82Huv>~!SOyzB2gW!l_{aiFQvTF{yx9aUgW:93$ZCJGNNf>P' );
define( 'LOGGED_IN_SALT',   '<|1_7ac=:sn=6;E$/cM ^ZpQ=,Jf7 6Q&IxAWF;;QGn0& ZH90l@JN2lprd%V:$l' );
define( 'NONCE_SALT',       '[v2W[8O_Ha]xsJP[ybPGW+PaZ:/fVgJqRr/$e&(Z+VsMAy|)|2w~CZJg:?Wjdcv`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
