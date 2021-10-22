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
define( 'DB_NAME', 'cafe' );

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
define( 'AUTH_KEY',         '?vU{w{pJ9fSIB9z*^]7vl(Jr1;(!!;x!,D;sA5`T=JAYTjnS`4V-C-g%w28Gs<){' );
define( 'SECURE_AUTH_KEY',  '`20dHr:KE5z40m%dMfAH7C7d?76]2FMrGVVDV[>o~ZDoYN8hA,{X)} :y?j!/d9Q' );
define( 'LOGGED_IN_KEY',    'zxCWZazs&n75YnSim`@v.VS@U1>/GxSP|z3N<EQ.MmP5(HHTPh,az2~Ck~;oKawR' );
define( 'NONCE_KEY',        ' J!7sg<)cOu1YU!>b-&vgTSXgRCxTr^YMCv)e*%l-u?fo2|%u_ vOz.8U3c=p&xr' );
define( 'AUTH_SALT',        'r<*-os:HNc42{aKH;mx?8q~6%(LBr:id{d8*UfEmSn%]~u#`ZM$R]Kv1N?oLovtC' );
define( 'SECURE_AUTH_SALT', 'x1r}0[rL]D{e+6utSW-d&D*v!|kbo]G9VGg8+`u[*bVnM?OSiz>C3$7Yc*BQ,I+t' );
define( 'LOGGED_IN_SALT',   '*}C =;H#8@ox5s<cS6@KXskE/Ke,nt!CkoEvqNx2jmx!q]@SfI:%3Zrg46iB~)TH' );
define( 'NONCE_SALT',       '7}pd:oI1s[N2^|Yl ^Ow=!P[&MtIgGGi_;`AM85gh47X!|RXzu9bJ&TI{3>,:v(O' );

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
