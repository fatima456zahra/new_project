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
define( 'DB_NAME', 'phase2-wp' );
abcdef

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
define( 'AUTH_KEY',         'A@fz;,?% .D-)%H=?~ay;;@l$Y<^EaD.Q>-}7-o:Li&@o[50LX[.~CvKI46:zl}U' );
define( 'SECURE_AUTH_KEY',  'X{A!Q}rRh3iWRRRZw[?H:~#7ZXiNQ*6<DwE:qdJZAihMv99R`G:zbP2Ku$jsX6.S' );
define( 'LOGGED_IN_KEY',    'O9|KfzV1r6koSbaI:Zfd-zE)*,}Q24Un=voVxD8/STk+ABJ|^pRU4~J7)jHNx|8~' );
define( 'NONCE_KEY',        'F,%de#q?FmH+%Y`|}H_Lks8wGIggP|gm+#VwrgUU=bDyzuJQ](V8Wd)?is0?U8Zs' );
define( 'AUTH_SALT',        '%L!/p@VrJUPcoEa1E2Ss^77d[F.`<z:)@Kk*:2ysA6%96AVLa:=s$5yOP)<H&Fc_' );
define( 'SECURE_AUTH_SALT', '&sp2LI,-j*5C7B4|wr1Xe$ZE1aRDT+bJd%w}t#.OjhDqPI:!?rFl@L;7eDC6Dzj^' );
define( 'LOGGED_IN_SALT',   '1Ygxr ANAcR1-3%i7]IU`omGmFc2+M,WLHSEa*w!wOKgBd.)tB=E.o.]euf7>9d,' );
define( 'NONCE_SALT',       'DoztnU84S#7k3|:l+FEDR>]7UGh[)([OP6q1`D.t[M!KMpC&(6]x,lN2fGspAgE[' );

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
