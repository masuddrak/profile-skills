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
define( 'DB_NAME', 'wp7' );

/** Database username */
define( 'DB_USER', 'wp7' );

/** Database password */
define( 'DB_PASSWORD', 'EW6C)i.LqT9GElB-' );

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
define( 'AUTH_KEY',         '3RPH.|W]J=r!&)/NsXxmJ0cy`@/2IZT@1V,Y8%JmyVd#jZ#An]i6s?#GBc:d^l+v' );
define( 'SECURE_AUTH_KEY',  '/U/oJQ)LR)Gm;Z|H^, ny_-4-1M;q6q|S.{gIkaefLuw:ax|.;g,+y$f{Qv0)gaD' );
define( 'LOGGED_IN_KEY',    'Do78XRu}~OtI_C]Q&|}wc;s!huU=(/,ZQR;@g>~:fR2d&W2K(xLmkU!0hv&]PUri' );
define( 'NONCE_KEY',        '^Aj%V#jZWyO0A/v]c8q@LpPmQs.[bA^~8zxr/MrB]Mf}VptH5`v6%7CX<(!Zh[59' );
define( 'AUTH_SALT',        'V*aK cSo!|0C60=p9Dz(a6DWq/,xH.)4F_I;6..UlP5u@&2T!w$wj;=1oBu+lZ;b' );
define( 'SECURE_AUTH_SALT', ':Wv+6I2&{FG@Z`m6@UpW(*hi-CJgzc=#Ya=tHT!`7PK6mncG^qz]Ba8WB7V<1!Z?' );
define( 'LOGGED_IN_SALT',   'lwkq[h UL!|NDqNoZkuJ%h*Okm{yfPa(pA]XO82p(a!`yH7tQxwzCHH]Yfl]tKIP' );
define( 'NONCE_SALT',       'S/T:{;>2 woSH{+Ga.s@&Ee@@!Tn)*igPq1iBa}&NRl=KL?0Rjx`-y7EDk%|=g8=' );

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
