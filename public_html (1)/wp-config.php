<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u283787119_7QYyd' );

/** Database username */
define( 'DB_USER', 'u283787119_x9ymn' );

/** Database password */
define( 'DB_PASSWORD', 'm2KqP3LRrU' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'YnL_I!mnCNA)3&?k/:M;o+c:CLBpY ebVI_b72kV*u|/YC/:Tg?t e%t> b.-GPF' );
define( 'SECURE_AUTH_KEY',   'u-GHWh~}i(9/tj[.@r{DkD)XSO8Vc0f*iQ7A]PrdZVO?zYJdxK/O?!mj5V&Hh|,}' );
define( 'LOGGED_IN_KEY',     'k8BmEF%CcceA(&tKQquw1@8GsmJt2dH7oOfx@<4c.8L`1bl-u4_f8q!HHTo$dLiR' );
define( 'NONCE_KEY',         'I}|un6w#!2=jhWCQ,`y0j17)0I&e~$IO<z/|9.`?g@W;!i 3#Ui<+oD~&PH1fdXl' );
define( 'AUTH_SALT',         'mtv&Sl-T(r6Td^aUU1w5_(vzJq%&*irOm=qi~]o$mRjAc8WIl}k>3j-bll<?ko51' );
define( 'SECURE_AUTH_SALT',  '?4}hK4 R/fJ[Vb.<r?k*n}HE-ZtCLv^^L#N$~~1XLSz~Y`XrU8(CehGj/{U0ZL;7' );
define( 'LOGGED_IN_SALT',    '%B>yR43q}U}thQPJ2jq@zzNJCrjYFtolOX?=-LG:dn8}X2Jqpe3l-1hG/A?YHwn(' );
define( 'NONCE_SALT',        'qfFTzY0Va*o$+Nk2LDTQTg7!52Moz6qZn.guT^9C5*0A@YS]+~LXKr]4h)0`F/Aa' );
define( 'WP_CACHE_KEY_SALT', 'VTr+*#{Y1r%;xZZEC[>KI7v;a)QU0eMqY39)=p1HDN_{L.?VJ-UsCrNrT1s$3N]@' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
