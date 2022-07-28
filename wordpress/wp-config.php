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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'siteODC' );

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
define( 'AUTH_KEY',         '$2ks({),*=eF5u`@d?QQl2;&HtTH~fp^T#o&$i`c=[BRzr%%fUSb;|at)ytkrr6$' );
define( 'SECURE_AUTH_KEY',  '=L7CSEif$36M`a#pG1hB`xOavEqu1[ubC5A4i{[ JD|kD@h*d:Po]Dk7EYnb=92c' );
define( 'LOGGED_IN_KEY',    'T$Xrp- 6)Hp24wsly_,AL4VyB+M&|MGM^P0IDHrv5gTuf1FKye{,wxbix/s-7(t#' );
define( 'NONCE_KEY',        ']_L)L~BgS[^.pBaiT%}hLR^A09@,<p@DXrDq[uRQno)=c%q_;o|1734H4N4NOkQ>' );
define( 'AUTH_SALT',        '!{HLGO(?#,YD*QyZTukmtnrjR#U$h$B3<?F{|?()exlF12aMdBz-Z8aH$_a%o:G<' );
define( 'SECURE_AUTH_SALT', 'Cj3`8?~L)d<6,SoR<fHI{pv_PW{Rh`u-2z,F(0[l53}oOi Yx~2IZkw%@)qu_?%]' );
define( 'LOGGED_IN_SALT',   'FT<C2OHE,$~ =3y@tKR0B(br;$;>Vx0Asq{z*$w^/9j8-nsOq-R&%-RgFLVB3C]Q' );
define( 'NONCE_SALT',       '1zSn3Ndkow0+^]-/d$vHZ99QaO xK{<_|4]U7dF[X|BC,jZ#lU)O:<hd-v93}^B;' );

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
