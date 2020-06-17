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
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&=BG]yvQ%P:5^{]fEyy~?Ul<%H-)fB];7uZX,7}w&0r4-a#W`!waTU;3adFjt%W/' );
define( 'SECURE_AUTH_KEY',  'g`$m *(O9S#*Qg|[FHV6;_OUD=E~|G&,|t?g~h#LtCzx ^,VnG&Q5lr00XyqB3=]' );
define( 'LOGGED_IN_KEY',    'H-F#N@@@1^=$Qz@UZm+rY2W%/um`@h/>s{~Twy~BopQ:!SGgsE84/Yo!Ipq%][I*' );
define( 'NONCE_KEY',        'e2Ar{i|Nm?ij.<2C?$lu){H/GTSyS8P+_uHR)*40#ep-G3h_.G{87?W3?l}0@@SS' );
define( 'AUTH_SALT',        's) 8Y--s=&LuBY6 a.bs!j~{gUd4v2NuYx%Tj]Z4R_&r}I/0L0i$~$sA[h+S;w0c' );
define( 'SECURE_AUTH_SALT', 'CkXFY~.>( pVeOhydh6ZAxZPM&U+{mf{Q;#$>I ;c/!87WE2lIOCH|t>.8ZnFJ(/' );
define( 'LOGGED_IN_SALT',   ' R_.aEi:(n:PaJGBf[mo;jiR%2]C.h2@/7|^Z{p=DeEDh(( b$S5o2T.b:JUX`Sq' );
define( 'NONCE_SALT',       'K}PvPy@s5gmk(pq,sB>y~$_-1Ka)s=3qc8^wMH%(uS+!C=k,i+PrQ2$w!!invv(u' );

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
