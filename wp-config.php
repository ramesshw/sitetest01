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
define( 'DB_NAME', 'testv2' );

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
define( 'AUTH_KEY',         '+Yoo[/q~=3b_e3?7?uu<W8x^Ty&fMa2lG>s7Mfv|#Z~kx)a42=@q {#na3i>s.Ft' );
define( 'SECURE_AUTH_KEY',  'LpUi=Rd~1J&K2v.-9?i#Z7t#U17zs*)<sSsY|/[>zTvmJCnoz/P9/u?1S&OYJHan' );
define( 'LOGGED_IN_KEY',    '.kb$&CH*SPNr$K5L}Q9t-`&1v |r9.u6WB63wku!Jf/E]46rZ9Xf;2%Nj<OF1C e' );
define( 'NONCE_KEY',        ';Mp`:e47aQo2tgkb-2>K9ZSQo[1a+bbx?dBVqB9hj*XKBe5u^{L* (^T`Q7ODvWf' );
define( 'AUTH_SALT',        '_Ohvxf9%wJcMuo3Kf0AC)I[[=J2r-*<L{usE!^FYIma(76<`C$0IJTt@H(v.z}Qv' );
define( 'SECURE_AUTH_SALT', ' TlL@S0|,P9q*o+FlBG);x ]5hms7j9.x{~@CdpxUJtF>[gl:/=Yv3fRu*zYPedy' );
define( 'LOGGED_IN_SALT',   'oF*X[#lox=D0#$<kgr:TKG?Iprb2I~fr,--=0?vl:Yx|_N?It> Yw=wr }5^4dSZ' );
define( 'NONCE_SALT',       '#[npS.H_#DDHxk0;*6 u~X$P0<Z,9/_95Wy>,v4n8^Om*anT~xv) [%_h;;$n^ %' );

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
