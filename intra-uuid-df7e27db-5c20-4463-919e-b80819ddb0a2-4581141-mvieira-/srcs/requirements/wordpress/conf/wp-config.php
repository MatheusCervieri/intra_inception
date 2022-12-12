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
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'wppass' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'fb%Lu=hDlITl} =@N%j8Q(i@H;|j9=0ebS%o9aEy~ZoqvPjVf&hAof`d%5N~y6vf' );
define( 'SECURE_AUTH_KEY',  '=wf)3Pue[pMRzXFqUO5#$<?#AAu%dzaV9O*5h-3$EA%tZ5zSPgj&OQ)L!M7P1qjl' );
define( 'LOGGED_IN_KEY',    'Avo4t-|+W0lE#ac@8^9,WTo[}*%WMD_;=Rawax[XtV%J&H]Nia1P5YSQKTB 0c%Y' );
define( 'NONCE_KEY',        'Iga2oz]Rz>1ypH`55n:?AWRGv@If,s;i4Y}#s[bE|&[xzw,y7 l)[P//|j<ZVPl+' );
define( 'AUTH_SALT',        'PdZ)lX7recVrG _Jb<W5oF]f;b5{eMK?={%N>;a#q)Wf2E52qrHOt hN1]rB.n0b' );
define( 'SECURE_AUTH_SALT', 'ht cC`%&s[3yN%n]kndnL40t[R% wu+ls/ZLNE*]#4AIguKg-7Wo-pv)}56*jS94' );
define( 'LOGGED_IN_SALT',   'lsq.U=GUKz}DJaM._2^X]tCBB-!GOPI X*ZK3#D4P3n%+LS-k4?L:(|M7m3kQ4US' );
define( 'NONCE_SALT',       'r2mpAH<?}[,>.9zHKlqt`Tg][i+w qvu_C+jYfI.G ?8Ni[{y1G12@pno$QYx_h3' );

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
