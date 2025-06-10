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
define( 'DB_NAME', 'faminga' );

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
define( 'AUTH_KEY',         'h HtF5j1j%hOMgn;z^q~S^r:t*G0aW,cR<8HL1I7B<DV,@mJcHf=tp}/+0b4k=Xn' );
define( 'SECURE_AUTH_KEY',  'X7O75Fw<P.;|lS8Rw)b%FF~ ~B$Pj@dxYw{A&kw5,a.o1.Lb7;;I3o^Vs19+t0@l' );
define( 'LOGGED_IN_KEY',    '8Fw}1WqR.qN#B0_>Lo`v(*v%) Gos:)[[m7Z92e=Tw@tgN&Wit1gy:1BV~nz-N_R' );
define( 'NONCE_KEY',        '4Pn:pW1@_zJ(wy+}lmGEs&>[-)N3fh<*QRo3ZWhQ9kr jXv!cx?;0n1f,AT,ym8t' );
define( 'AUTH_SALT',        'v1+I3&[~dp<.[vQ9ZyTO=[S}O.*f/oK}aI14V{w7~^0;uER&e_8IixVIqK_worc`' );
define( 'SECURE_AUTH_SALT', '!e]ia0-?=1,o574X<Rc.6Ez<f#C+tPgO1Kwc>p9_.0Zm12IR5|OCyU>j|Xo-Joy^' );
define( 'LOGGED_IN_SALT',   'bvE**C}/}!WD#IV!QR[yq%hdwxq|X-c{u!=Kx/_F`?GPZ*.wv9i&37#fZw))t@O&' );
define( 'NONCE_SALT',       'P6Jh[foa?W[,J2MeUaA#QmcZiixiVKM5uV1.0At}z1D9_uZ.f6 q1_ophcyPk<23' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
