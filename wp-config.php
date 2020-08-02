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
define( 'DB_NAME', 'AJ' );

/** MySQL database username */
define( 'DB_USER', 'Ajeet' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ajeet@0166' );

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
define( 'AUTH_KEY',         '*Z=xbQS;:8ZV*r-C@Jef`WeUwIVYoUOeQ0+UA&e-O}1ss`2ZaPw/Gqj:={r2]01G' );
define( 'SECURE_AUTH_KEY',  'Ljp`P7WR^HCikpFG?+f;HZ+n23Eka)nQ3hJt;#O.yL-5:0IpBc; C2x4s^-%Cnj{' );
define( 'LOGGED_IN_KEY',    '=!;UTLR&!D:v<IK1o-c!IO>>4HdgQ~s}&15KW<P@GyyT@;=(K+s2hD6nLWf -bSn' );
define( 'NONCE_KEY',        'G$s[C^FSP;GJ2&yV{lRp_B62HWiK&a)`++!su.FjAOL8nh&34*CGANlhdYat4hBR' );
define( 'AUTH_SALT',        'go)ZZy)?5=(mj&(Tv[%z6V<?!A-6c]tA!t8ZkhJtX1nQvYR{BE=vfU?4^BU jAAi' );
define( 'SECURE_AUTH_SALT', 'Tapq0q?lK$emd6v;Qo9)B>43r]zE{Y|RIq<OG>z!7<7o:MUpGJXia;! Oxq}NswF' );
define( 'LOGGED_IN_SALT',   'G`2{0|M7^C]y~l,-ynTaKi~4xngerXK/.Su>L2^h-Q$LBUb_2{~!j|&VTRxQ/LVE' );
define( 'NONCE_SALT',       'a>c&c@jqYuh%=@E;:WycQm(&*BG3!%-HfdG`#zeXzEEy >{G_1A^3R8b=xcQyahj' );

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
