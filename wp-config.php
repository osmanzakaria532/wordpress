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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newproject' );

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
define( 'AUTH_KEY',         'VX,98ucp6zOL2iXJ7T&!N`q?-J&UcFv$/`oJy%Z g~O$)Oz;yuTeL3=@EnoOPOU[' );
define( 'SECURE_AUTH_KEY',  '5mI=jW,tYfmd@(7PTS:4M}Wp|oi8KOGRh{SB5x~4tEPJB(Woe:J_?j[v,F-XiaDB' );
define( 'LOGGED_IN_KEY',    '4% vHDJ_#S6`]kBCyb!3NvY0~hNFeR*KxqC6%{G=?dsYmym|O6:$jJV9fxQTfb4A' );
define( 'NONCE_KEY',        '(o!N[FZ6.2CT,.8U;f=&sDYE=d~v1VZW8RGYho w(BO^~S301MmmVxjX.evHWYJD' );
define( 'AUTH_SALT',        'JiZiy9J(F3Lv<K=At[EBxyY%KDvD4XXxXgtU;Gc@un`#`j9m9Rd`>_LI-4}k9,c3' );
define( 'SECURE_AUTH_SALT', 'WX6e<9JH3`fuH)|JjV/=HT)xW?[@qN-aqXujnMa@M$7tWabL$l%v c<(rX$;M1>`' );
define( 'LOGGED_IN_SALT',   'p:bP$m0eA7WX]pGsGviwx&|Q+Zo].|FAq=;yqT>T/y;}kDLgAmwkj.w):/!QK)0#' );
define( 'NONCE_SALT',       '{7mD6S]G k7sg*i5tP5DVt{fr5W&AD@KXD?!,kS{f/~oCfM85m,ta]][bd .-)8e' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
