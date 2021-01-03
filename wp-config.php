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
define( 'DB_NAME', 'librarymanagement' );

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
define( 'AUTH_KEY',         'uC>Q(<R(zA_u=gN{zbd(]HB>!D0G^i!ABoS?= {xD4[uD4_Ltrjh|Z&xpRKm;Dk<' );
define( 'SECURE_AUTH_KEY',  'C>Hyb<x^QUTx`XY-MOwyx*&_=N}uIgE^R},fer|8?SfXr<WD{)X^DV#_?,}YE0MC' );
define( 'LOGGED_IN_KEY',    'ivg+c82-cMY%4+gsvP>zLP9x6O|*BK,ZKt+Prfk9:io=U>O:}C*E*9vdx?oB``Ue' );
define( 'NONCE_KEY',        'k}_+R^I[WJBPD@O?,@2pGtN.;^>BWyU`y&THhT1jgH$ziGD*po?[CKqL0RYWVQMk' );
define( 'AUTH_SALT',        '*Q5&rRw/B$>Btm%V-(4s8HGe/6ZqqLkALU!h}#/^rNC>=8hrI|RbUlx;^NJWViB4' );
define( 'SECURE_AUTH_SALT', 'XAE`,9;zW_~#(A&gqkOhtnu}F![u:LVcf>vvWq+*`[`vWvi-JJ-V?=M fv)lB_:T' );
define( 'LOGGED_IN_SALT',   '%!pZ{ mB$i1#<nqGJ}D&Vi;ulYD(hJvm#{ (Wm_R7|cYxKsAwL_`d4BE3L9C=EfU' );
define( 'NONCE_SALT',       '+lgVgDS6qZpwlNa}/l7ny+JF&`E%H1U$-P@ba[8tdU#w?B&k{5-3@GR(9c6Le I8' );

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
