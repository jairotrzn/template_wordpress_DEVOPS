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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'usr_wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'YWEHGl71GJR/J/jRftAfegCAXUsmCBNc@' );

/** Database hostname */
define( 'DB_HOST', '10.2.37.87' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// adjust Redis host and port if necessary 
define( 'WP_REDIS_HOST', '127.0.0.1' );
define( 'WP_REDIS_PORT', 6379 );

// change the prefix and database for each site to avoid cache data collisions
define( 'WP_REDIS_PREFIX', 'my-moms-site' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15

// reasonable connection and read+write timeouts
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );

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
define( 'AUTH_KEY',         'Zh%T^L>pIPLl,eF7X%/e#x_H7&9JP{G6J|snLy |_4,WH_B1[{rnJ(q/#i.tiBuT' );
define( 'SECURE_AUTH_KEY',  'y8p=txw6>]`~]yHQKWv6g*UM;3O7z;g9v7n)0J;B-9]l,2DKS:x$ne%j6fL}Z,i@' );
define( 'LOGGED_IN_KEY',    '7_^beA#a(0}IOdyv&4iton~>7{}{{;*0_!XX^`EL1uE+6cTvtC|L0rflqfNrYQ8F' );
define( 'NONCE_KEY',        'o4a2o,~x _(lSTWTnL-`Zj16hBd8p)Nr7@aq3.t:+dE-zKHakz;FegiGK+ONtbJ(' );
define( 'AUTH_SALT',        'n=3:f57ujxu!Z2$)R:p7^w2IY[,Zw.|QM3-?hL`)DceaX:?^1oEhF-qtP(Rz@d[>' );
define( 'SECURE_AUTH_SALT', '?.b1 r.CW!=pQ<r[4LPO-B0YY>v;1&V/u/smq}:{<zvy1(H444xDq!qCr6#rzKxG' );
define( 'LOGGED_IN_SALT',   'x]C+3j%DyG]3PE*L}1Uy3H^Zv!uYS9>EwDvu /VNYogFs~gDe-6kl=_M4<U#<9*u' );
define( 'NONCE_SALT',       'Hq;mdNY +@[Iqb$<-kD7X0HL*+7T@+ie;21BZtDpX`O9mlA>[AF<VMSROYiQ4(Po' );

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
