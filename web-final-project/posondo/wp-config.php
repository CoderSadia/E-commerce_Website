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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'posondo' );

/** MySQL database username */
define( 'DB_USER', 'sadia' );

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
define( 'AUTH_KEY',         'lMzPoF0^U!{*Yb]Z5 46wput+dRdiHS07A^gntN;v@M&_kT12[Ec^ndbw*8cLa!%' );
define( 'SECURE_AUTH_KEY',  '?Fr)Gt[G/FigAt4J]@1AQdDZLX:_4gu[eScrYX@v(6QgeJ>E~aEkQ/s+xTDK}l9!' );
define( 'LOGGED_IN_KEY',    'tlz&O?wBF; {=tE6bO/rvm-2SR-iS+nZ/rI#O:We8YY>vW_j]CE4I[1w$O5S&0YT' );
define( 'NONCE_KEY',        'dp^PudFd/ rtdpYm6$;A4c~aNbk{4`U7=% #]lK_28D1M;b6(^ox:42isLzlYxOl' );
define( 'AUTH_SALT',        '1n9UGEFs~4bN<39qSA>DSXiUM:>o^n{.ia7K<MM%uf4+s+|3ND&0t#`|.@(X<YH;' );
define( 'SECURE_AUTH_SALT', '%J]MoEwA$2O0d5F<uGE6KNp%MdgDQ>#lB~5@48$v`v,, rgU&gB)30g%f9bm9-^|' );
define( 'LOGGED_IN_SALT',   'h*[[J|;wDSt3TCX)3)gcIMtaBg]m.JICG;*{t<@YNPbUo]#MJpkRq}{%07]Jw2a`' );
define( 'NONCE_SALT',       'OF[F.!ZK^9T1Zh_R$24g:x32NTG|F7yF5}&*e*YZdza{1:IE~[f?N%L@A[ []s*R' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );