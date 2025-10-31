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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'LKn5`%U-}=}rN ]@[`CBJH.&k2,mH+[3q})F3W]<x{X0A53ntD3XeuhFhR?N1(Fl' );
define( 'SECURE_AUTH_KEY',   'CK>/2<|5><WEfppcYtqw~[>Ay:pC8L%P~a)*3gJWaVwDXE8)^)(Xd/?NXLCaiU{[' );
define( 'LOGGED_IN_KEY',     '[v5ng&49z@joLn*+s?qP}k!_~2e?T-Ug4DiyA}z)).AlCX|f{HI[bQ:^frFw.ThC' );
define( 'NONCE_KEY',         'E.yGgo&?<Y{9_+<Kn=3K1Lc*ETipA?@kY>e7+#zx5OAf1N{<rqx<TIug-+I~s18Z' );
define( 'AUTH_SALT',         'HjTx[=0rm8T(vrlVhQ|D])*=2eZ,C*xS!,iagcTH5@sp?A$r%#8?Dhpx)r/smzg/' );
define( 'SECURE_AUTH_SALT',  'N),pHuFUS.o>.sc6&0gc#iW rd=6go-M(t98C:32Oa0ItPc1*/BL@$lkB/So3W&h' );
define( 'LOGGED_IN_SALT',    'TBqsGI>}Qw %~r21EwiNt8uH!c YL<^lLRNLH8r|fpe*xC9{[hj9*H8T9KubdR|b' );
define( 'NONCE_SALT',        '(]ls:d+WWLP(-OUs)E<1sav6<*juXE{4m9*MUq{<e&xR.OW(GNsExU^:NXG(2oeA' );
define( 'WP_CACHE_KEY_SALT', 'B>R!-l LvnS7*X$(d_=*Sb<_exNT[Auuo6xti(I7Q!M}f:KMgjAx&T4?q%C[H_Hf' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
