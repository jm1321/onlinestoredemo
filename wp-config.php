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
define( 'DB_NAME', 'onlinestoredemo' );

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
define( 'AUTH_KEY',         'zt}xh:ceZQ:%)1YV6rS__q0<9QtOq`:r-&SF=RyM&2vu {?cGy/+MYlhBKWx6Kvb' );
define( 'SECURE_AUTH_KEY',  'b!UNs6uBvSQHr9wO^$=2y-Mv#/_cp3Ih,qq8,.(B72:M)GA5OX{atpmM~OI~xR@s' );
define( 'LOGGED_IN_KEY',    'UUtYW{e#`kr`u!?91I$&Z7YB8Gr]pgR#ZlQUlc/x?@3S&nH6*(m6!D~r[seA^tK_' );
define( 'NONCE_KEY',        'O]]ECm}>W-#F:gGLkK!+|NB!GDiZt;Dteo:U&?(,ykvk<v57ND&::8x=P9br>!tg' );
define( 'AUTH_SALT',        'O 4;TG`[8#X:)7s?CZH(YF`8,{FA_8fAjRZ;C0}WO)r)^=)0[to>I}aQLrJdUO`L' );
define( 'SECURE_AUTH_SALT', 'r[Z:$lYJqW*c.qn~^U8H!@a@Sf95L/~~1F$33^gy4o<z)S|h0M7]D4[oX M<,XB+' );
define( 'LOGGED_IN_SALT',   'd{rm?r1:~C[CCUZL58SBbzD=CQZdh/u2Jo[AG6y$nu_$6u`[kulrtuh+2rWX76.3' );
define( 'NONCE_SALT',       'p05Mm~1e26%%JI [N,W5asY^/6x#r]/>M}1HFW]M5Bq6p}Ro}HhGi6vinSIxau;R' );

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
