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
define( 'DB_NAME', 'property' );

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
define( 'AUTH_KEY',         'aES$oZm]6#|mIbG|?)[vi46qVSez<pSPLJ+5qi<v2z;pa%p%(}^h`7?D&z{:LBY|' );
define( 'SECURE_AUTH_KEY',  '>uC6`-H&h+()XpjEAp%6N<e^ZFM:hox(9%-H]PXt+v^88gU y3X(9*<(==B/x]7H' );
define( 'LOGGED_IN_KEY',    'oz=7P4eC7Xx)quW= aDf4hC7A9,J~coF=D#6)s_o:kdQM^4C XKDfMcYyA=0{!)b' );
define( 'NONCE_KEY',        'ku`{ UfFku%BZ=C7,r4H;CJ8Z$taL(0Jg#H(Ph@?a[OOlr2Jg WaxT|`Dea[S<!4' );
define( 'AUTH_SALT',        '<._M<T%*4U}6@E:i4e!q{&bRvwvu^(j>fap}gMb2v (W&9;Vb4j];DuJ;z60FL^J' );
define( 'SECURE_AUTH_SALT', 'a41&tgrd=G>;uL<rL,Cx<KDMHe1?PW6$(_Wx(BrWe|;f=j<M P1m(hf*;IwLxE2R' );
define( 'LOGGED_IN_SALT',   'rT(D[SIcX:#4C([HAzF7;)$  oc[_6NingO,0D!gy!|QSAvH69{Rd8$*aK/,abhF' );
define( 'NONCE_SALT',       '3U4,GBMcDd@yu%UVX.&Y+0Y:IcK-vZ`o53iyJzK-R t&#chA59QGA%;qEH$,Hq_R' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'property';

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
