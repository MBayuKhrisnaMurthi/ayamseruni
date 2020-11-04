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
define( 'DB_NAME', 'ayam_seruni' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'st#]dkrU{3G-If@;|Yy7$cac!AM1]x[ygEH?;)&%s0eiK[t|aXK1HR}bx=3rYx+8' );
define( 'SECURE_AUTH_KEY',  'u_I=-.<H5iF!N@NDF`P8@&?u[:L=,jZxhX1c%@M9f]|p,]5wLzx4)cJQ,*k:&dLR' );
define( 'LOGGED_IN_KEY',    'L%-D=tbE&[CLi|CrR-1Esyxn+_=A)2QWyzgENWE}a6Wu:PjK3v^}d(OcaRCRuS|?' );
define( 'NONCE_KEY',        '|ktwru1l}yaR6;,CxnH^l>r*uB20$<QrPFhnydwM0)}/0W*(KF= /OseV_FH} 8%' );
define( 'AUTH_SALT',        '6XO@>VwKb5]%Xwi?+dj!J%AM$RIZhl$`NtE2JiBdN|a3Mja8j_F@mw2X<B<-+#ST' );
define( 'SECURE_AUTH_SALT', 'gOuVg|:U<;2`5oqDL){l4sYUm(KR%l{an0e,wj|rU+1B.C^jb>:yQ<H9qw?IG&P2' );
define( 'LOGGED_IN_SALT',   '_oGl!lRs0L4R4DvdEgM>=}A&n2?gr-7o(m#jSk-J]|sF]Off5rfwZCOJ%}71z],w' );
define( 'NONCE_SALT',       '?AZYc!l;tkc!Yg|TArz1tJxm1XU`Z`~;8#bpg-us3BNcZ!/Hv7<@CV.BJ:]/EiJI' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aysr_';

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
