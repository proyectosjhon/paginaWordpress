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
define( 'DB_NAME', 'tres' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '&ub]Im!!<lg8ZNBzzs~~H^**2Dbfg)pcc/Cu$MK6bz5>T,s&W#;&Xqo-}nbJ}7,T' );
define( 'SECURE_AUTH_KEY',  '^vYv`Zewx][cjg&-gaR7++hSBLoIgzAWLnEFd8fQC>eT3*|E=~@=v~|+TT[)9{*,' );
define( 'LOGGED_IN_KEY',    '`^vzm+nF77G %Vq]uXP_%1R%=*iXy?eUdk0$wYsv:Cj)+dee4hoI7g,0]$g[qkvO' );
define( 'NONCE_KEY',        'B[_w@{oATz]C&1}M3K&2n/4,2MK2n+aRl0<RNF9!FLAF}YPX7hKe# M@h,?zME9Y' );
define( 'AUTH_SALT',        'fcSck4J_XK[?mpx6q:A!S,/T|0+aU!2^zK&fSFn[j&*,owK02DlS*EVk GNubl*+' );
define( 'SECURE_AUTH_SALT', '+ZU]GyL5WmCdo~3$8(B7%GyaFxY&AsO&D^{-LPK +.!#~;G8~7k(eUnopvfVWR-M' );
define( 'LOGGED_IN_SALT',   'V~n}Wlb>Rbml?EFva61EBh&7%;NJz[5org]e(F6o9{Pp?WZK=r}P34:7r8=)U|x;' );
define( 'NONCE_SALT',       '#bxD}ZNF!-Cf&>XRK`84qO_CY_3{f3+!Z=h`6l60x-ramh^A6n1Mfa-Z,jzMU+I*' );

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
