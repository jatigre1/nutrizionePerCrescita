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
define( 'DB_NAME', 'nutriweb' );

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
define( 'AUTH_KEY',         'D7bTXw6>)U*`Zx2K+-yo#0atmc=DLfI7_G9won^sXN8|sE)fKZ,Bgnz:b]T)HMKP' );
define( 'SECURE_AUTH_KEY',  '/50 %FVTT7p%&*^G$sfYYgtlhXC)us_@,7>u(=OwP4utYmBsi`8/dLD0K6b{xdo;' );
define( 'LOGGED_IN_KEY',    '~}0NFKp*ZtmVO[U5^qhfshB9,s6$$oEG*F^pb~V,S]t0,4!Lr*w(7Q)?y[Y_,0OU' );
define( 'NONCE_KEY',        'n]57dUZ#fivXiYh[k/8-wC;L+KMQ;RdIly#K^rqC7g-ur[s@7}e}f>k6!ZHkM#5m' );
define( 'AUTH_SALT',        'o{-NJVJC2YQ!o9`k+NNT85wu^;JA{etnm&A1%dyS[:UQ*IHACG{`Sk1qC<~o2% ,' );
define( 'SECURE_AUTH_SALT', 'PJ4IpUvU MK/gAo7h3E>a9CNnWJ^W`O3e/Y$Jpf.^==VgDkH@4I)nJr/~SVwoTOU' );
define( 'LOGGED_IN_SALT',   'B_O)4]n(i;md;h6F9$nJ0P5:lv JptDg]J?=s@qD9AD7*$(c:j;0xRJ6L^:RQ)M&' );
define( 'NONCE_SALT',       '7-@LS#1-!27vGp9g+>(b<!mdC`S!^<SMyy?GEy#;NN@7Z.RKfI>w0}-6@NJ16G6k' );

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
