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
define( 'DB_NAME', 'jamjoompharma' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root@aayushi' );

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
define( 'AUTH_KEY',         'JR0Rj4w+z_$fP+is|ijv.k};C2fK>5N3w,1md=GkSh@_:K[xs&fa#,*,tnl=Z5/Y' );
define( 'SECURE_AUTH_KEY',  'uEW_d%!mY): A SCvzBpnslWM!}9AMrl$n-OjS}Sf5IyKh>NJD9N-j@E_(2UYhaB' );
define( 'LOGGED_IN_KEY',    'T@:Y4mN:TM{ejc~b};BT]LMAdg3pVruERWRSu&3.{DrQ)e{8NF--VSb B4^(!>]7' );
define( 'NONCE_KEY',        'saGr6vD@0WFma8EQ2z34JZUW|k6@x1kfFtd~42`C|5-vdYye(FA[s6T#$nb%c*K3' );
define( 'AUTH_SALT',        'DB^@X/w2^YNpBY]W{.+f3/k.?]`qwPN.doo82+n/QABkI4*Uvt^?&lIk)PUj6200' );
define( 'SECURE_AUTH_SALT', 'q3xBLgb+<%KnJ lf0nX?Z2c;SVeBQP}`yh4DS;ED!8F0@X@wolIFQv^jRB/TP`aw' );
define( 'LOGGED_IN_SALT',   'IK0>Pr>#T3F;dH/}EBnG%O>CAh!Tu%,$Q<$~s%N(x6/._]^NRPjr$4HWG)+V99Uq' );
define( 'NONCE_SALT',       '6]n/%?*]VgXN,v|P~+gC:|+DQpDTH;RGv.yXj|-O/rd|_G5 {hvU4d,Goo%Q~|d]' );

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
define('FS_METHOD','direct');



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

