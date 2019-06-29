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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '33_travel' );

/** MySQL database username */
define( 'DB_USER', '33_travel' );

/** MySQL database password */
define( 'DB_PASSWORD', '7dL9bvke296CHvLR' );

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
define( 'AUTH_KEY',         'eoZ$~~6JYdKs0+E7O{UkYZ9H^#RU)s.1<#m]&t63@|3[14!sZ-+bTrk!BgRL5-m#' );
define( 'SECURE_AUTH_KEY',  'Wp.7&<1rV&UutPJ>rb>=E|ak@Sy%I!k9pa2fij1tcs&-(0MI7.IkLbbFmGuB]]v{' );
define( 'LOGGED_IN_KEY',    'hUz!.(w-n$_s@DkX,Z 41tz]nO%q(z5jT&nX@4+3J@nK1+?lL_$33O}DmAGNgh]2' );
define( 'NONCE_KEY',        'r`x9OtzitO{Lt=2UXdvV}UXFf |/HW>hGVqb&HIv7^xN[g ZpAa)7HAgF_(P,kR|' );
define( 'AUTH_SALT',        '}p%@-82DA92S5vGD_91/r]?FC4sJD1.>UcrK5yHeN(|n@[xsS;>O!t Oh|w.w-l[' );
define( 'SECURE_AUTH_SALT', 'l4}|3xQ|C 9ANWdkL!qB&`(*+DP1h%N15Z3?;P89AtzZ y>,6bJ|;w)j&8x16g%[' );
define( 'LOGGED_IN_SALT',   '}8]-RiB,t9;XoRv6mkcpJ>=%:LTUV81]2H.ofQlLBtJ%!>`=NsE(UbU_GlU,Vg`2' );
define( 'NONCE_SALT',       '8k$/!#5O L?)Uf*t*`T]gjD:aU<_tGfwb_QS6(bEJZqbAkq~X2PkvAUVc+#}tTpe' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '102_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
