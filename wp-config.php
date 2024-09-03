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
define( 'DB_NAME', 'git' );

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
define( 'AUTH_KEY',         '2NH23,#AsNML_DC j!sPxuOneb:XOYq##p9i=i#]bgg>hCRyV,Vkv)n?{iNkb*B9' );
define( 'SECURE_AUTH_KEY',  '-#OGfkizE~{21%][q%W^4<O0y@m$Mu$CM|tBjOUvV!g6w[FH*Qa:.cJDXG4<E4Qy' );
define( 'LOGGED_IN_KEY',    'cUfC|CBKYx45#<XqgxmYD%mdvkdF6+(_oTT_0)@EA>FpdEL1Uk3rIBsaN1PN<!:{' );
define( 'NONCE_KEY',        '49gpL]J</Tno$i:Y%nsnN+r/m7,O!e$;l,9DI[;9uH&E0[U7^w&8_.r]%ZI^;;yl' );
define( 'AUTH_SALT',        'g&}{uwC8LUzCxk`JR6/6v]|p1Wi^k#0nWiZN%X[Py:odARH_<XA|t!}NR:J^*;{m' );
define( 'SECURE_AUTH_SALT', '9Xp]PO/rGAsjLvL2v,J_PKP{%3OSuPle)@r!&}`o377^P4)u4,LAI=?zg<%(KRkk' );
define( 'LOGGED_IN_SALT',   'cRFtk$.JuvF =f!!rJH}w4c|q1M&=q~|d46;fF?n$-r[$)TfiWoLvhztKQPAGQ(B' );
define( 'NONCE_SALT',       'J}<{J(j9P1/#~SV-a}`{>8Lv}{_:4%|bm.IS)IF>96_%QAT!-o>N_7ihHz]lvM%7' );

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
