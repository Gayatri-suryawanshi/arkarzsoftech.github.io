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
define( 'DB_NAME', 'arkarz' );

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
define( 'AUTH_KEY',         'MSS]=R:Z|&l>$=!IzU#09e)${;u8sQu?0$L{;XvE6GEH!w,Pn+h.]#1ROl~9Jp@_' );
define( 'SECURE_AUTH_KEY',  '-`KUvPof~ksF%u%O&7LTb%?TdqfNAI?>X;&RoB-L?6T9>f[`U@>r[=G33Fi,P,kO' );
define( 'LOGGED_IN_KEY',    'D=e}yS*K7,}|[<x=am%X#G %~rcIaID:Flm?:XH)GB~:k+tQZzB)@Nz>l#%aJo!j' );
define( 'NONCE_KEY',        ']9>BLU2^I07i2.I/?}*66(b?VYo;)5dhHIZ2g9Cz&yvYHG80}2W 1;.UofMrHQS^' );
define( 'AUTH_SALT',        'ht|nkcLpj~;xf=9_D~~&1l@}!}^?XuDC2Yn~_seQSe7TH((7Ertuiubn%5aTCb=S' );
define( 'SECURE_AUTH_SALT', '0cS]$D ~}<jFM4lde,g+.#7^RrYd5{8P^_zqO|!+(w>hsi/{US5)1)`vn&!=7Py,' );
define( 'LOGGED_IN_SALT',   '`-KZ;P ??3ZQF4Z>3piyuRTzPLa.*vZ|}18Nr$O)0- 9?MH,o!E~Ph3@_*{!1$-I' );
define( 'NONCE_SALT',       '1zvppu3r5I}SFB/}T iB^wag0wVSwvnhs68a+D:&dM)6~k*R W-Z_ufi}&0Wf TY' );

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
