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
define( 'DB_NAME', 'u552095459_g8Qp7' );

/** Database username */
define( 'DB_USER', 'u552095459_6wEBZ' );

/** Database password */
define( 'DB_PASSWORD', 'AgCEGX9XV3' );

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
define( 'AUTH_KEY',          'g>Z5yiNPyA]Q?i<z{=bFq=AEEk+.2@Jv}m+jjU>hp^`%N1Xgcdr9|Zvq:j<N1ru&' );
define( 'SECURE_AUTH_KEY',   'pQ8:hq|2KOb+.ch1r{!4yWjb7`6,+uuqy)}TrphOyR-TQ(Pww]Y,7~!9R4pyHv=1' );
define( 'LOGGED_IN_KEY',     'f6m f)Oni0C1L9gtKZ>LV-igV&4}JUIxa5XszWf^Ol<Ls|j<pd%fB}@}$~BH!(dz' );
define( 'NONCE_KEY',         '%+MqLh`FP!z%,06p`5,6WV:Ye8k&i~rUI#^/95:<~CG4ero=*no#cFoL0rhdrTAc' );
define( 'AUTH_SALT',         '~Nju$ELbcaCD.j&!,38%UCs[t=fsEih{K)gwdp/b+(g&FWs._;J)4#z#`QaRX`e.' );
define( 'SECURE_AUTH_SALT',  'U`}_M~3-WdYF/:Z;1!2ul#{LpY9vnVk$&~zbrS_;&UkM!VoF7E@HY=+o$R`uy;8!' );
define( 'LOGGED_IN_SALT',    '}Y03|8N`qmw0GPpFN5oqp>^=yCFQ]g_PT)vF6.+,Fjssp1j6#Lf)/sn&Y_2qt1,h' );
define( 'NONCE_SALT',        ')P/Wf! zd=#0e+mxO:`cm6*O0&eLTkyze@(& }:FMfD,u603 JTLo|8D?BlvJoiS' );
define( 'WP_CACHE_KEY_SALT', 'X;bbSv|^Xp`80P=oqL5q=oP;E6-*#frm)jh*CpuZ/yg`jpo:IDQe1x$CjaWH7Q;j' );


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
