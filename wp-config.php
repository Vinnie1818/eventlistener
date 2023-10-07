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
define( 'DB_NAME', 'Eventlistener' );

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
define( 'AUTH_KEY',         '=v|j$eN4uaWwq4.Le(4A&OtGB6YJ)dc60IN09,x20(G^:n,Mk<BLzv@~}*Tfe,4b' );
define( 'SECURE_AUTH_KEY',  '.(p,7F`tD1k{:L*HqC.u1fnLJ[<COQ}0O,WPGo8L@s`Zr)6rTU{F54(Ippcg]IAh' );
define( 'LOGGED_IN_KEY',    ')>hX)wXB0]@JeryHFiUbc3gZS2-?lXvrK:^_.JlG|3uOasaDE5}^C!i5])nR0.6F' );
define( 'NONCE_KEY',        'C_@BtEt!E u5=<%]YcLlbih-W}>*DYO/ei:+dz,( ]K>u()a!`#SXn%xihzw&zLo' );
define( 'AUTH_SALT',        '~BWPt <Jq 3|(@s<jT,KAqL<;?rownAYyL][o}@|7Yn E]X#`eCtQQ<Q7J*a^jtk' );
define( 'SECURE_AUTH_SALT', 'lZ=l/y?xDd!uqMMh)5[ZVRs2XDTaWp,Zgov)CD_W=b8fEO,(,6l-2PXB5Yfm/EV2' );
define( 'LOGGED_IN_SALT',   'Q<Z8B}WHa$J~8Ruk6WMxyzYZ73>D,m_tft7K(addw3tUF7AuUphBpj34=Ip?F9Kq' );
define( 'NONCE_SALT',       ';XEAY {}eI~b]s!WGVAFwS$?WawYk<9b*B_I%KTU`_V8U&ml2Ad8}P#)q(b|WeeD' );

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
