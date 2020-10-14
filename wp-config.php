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
define( 'DB_NAME', 'wp_uppgift' );

/** MySQL database username */
define( 'DB_USER', 'axelsvardh' );

/** MySQL database password */
define( 'DB_PASSWORD', 'axel' );

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
define( 'AUTH_KEY',         'c=60YC#yUS/Nok-]Fo=_*?W6lyw*.ZcB],907AtsxcZZ _^Ih1[>t6r%L/{(YUS@' );
define( 'SECURE_AUTH_KEY',  '</_5 w_Tx47medG*39:]6Ye}{[ ):t)shXE%wbkB,8.TX+w:q[v$VD-L-lj60{I&' );
define( 'LOGGED_IN_KEY',    '.gZ9Dh&c5@78=LPFGIKqE|QlI)9t/8jAaImF$;Riy9{<mP!6;21[u?j.ICLxgR{G' );
define( 'NONCE_KEY',        'vQ)ox/0-s<:~H;SldW66Wi{jYNZ+dcIA4nY`]<H5]VH4HwMfz}X0={zF5IZjcxAS' );
define( 'AUTH_SALT',        'u_%.*`A~1Qob@{7-5C;itnMx/#=/V5!x  cP7Zf-(_O soB;c:{R]#.[Dh:b2W>x' );
define( 'SECURE_AUTH_SALT', '9y@AzI5<f`ZEUTut{Wfn=_/m^U=K;Qq!u(uU0;{i^6O:RG8c!F8qZR2 :A# L#=n' );
define( 'LOGGED_IN_SALT',   'q%Vxm,e)_PzWr_FVrE_(7,,h5cGoi78f k I*NCuS.3V~ux2,f>m$;Y$Y3<H_x=%' );
define( 'NONCE_SALT',       '_z2q@(*]/):baRb,vX;t.&wS&Ro on9}9vV0U/%2Hzq<IS_&)J@LRh#L3=6D99hD' );

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
