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
define( 'AUTH_KEY',          'l40@Fz1!Zo(uo+#^9I|ANk, S.k7|ceo!h06#(?AY<,4INw|dN/itt)gz8Ec{T*O' );
define( 'SECURE_AUTH_KEY',   'W4$LXW35I/tBN$PC4NUX>Ir1o@{h2,A@[3[)_]?8wx`6$g3WdM-d}OoF~|Rk-eJX' );
define( 'LOGGED_IN_KEY',     '@G/#y0eDz%-{5E3IMTUok3>We6H7<B<]`cjmb*(Z/Y`2B+f=P1GgOOlAH[fJ]`}e' );
define( 'NONCE_KEY',         '}6X^+op1bH8I1^y-k^&-VV#Q@4TS|vX].L/;6<QFArF*kE/59^]F_vUnk)4Ipmwe' );
define( 'AUTH_SALT',         'RHXS/74Od@vNeY|_S.tq@Wc97u*J<<+&AXANZ e/)*=eGC?*/+YSNHD^PZ<BXR4t' );
define( 'SECURE_AUTH_SALT',  'f7J1b@)ZOplkkyx&?4]O`b6/PLA0Vjbh@glbgq4VF%Pw{TD4h+8itAwD%k=eI7;O' );
define( 'LOGGED_IN_SALT',    'aTQl$BOuwx-Z1OgU2h7[X#I/ ZGJ3_c([.F[fuz]<*, RL%*lD:J=3m?;a2=~UZ`' );
define( 'NONCE_SALT',        '`P~6zS,kRbLJ~gy`8b]8Ghsq?>Dj/wmU6z*  Q}{N]pP<GKgNaWfZpL165}V:9Ps' );
define( 'WP_CACHE_KEY_SALT', 'oy!LV1(|qB(qXp8p@g_6,T4u,}RQ7c+Gi]Wa^O=lmo%_tR.o|NG4eq#)4z#q,W6o' );


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
