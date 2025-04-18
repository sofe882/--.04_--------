<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'korotkov_25447' );

/** Database username */
define( 'DB_USER', 'korotkov_25447' );

/** Database password */
define( 'DB_PASSWORD', '124c1beb500511b1581f' );

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
define( 'AUTH_KEY',         'A1|7{VXv4ApRiPIV#dfQ@RL)Qj3I}@l{I:G,IWy[=TOZEB6+|wb~QMF<u1/QQhJv' );
define( 'SECURE_AUTH_KEY',  '1z/-Gklk%/ttokrLB ,)~L&Z#K<_[~a{dw?]lk_iC[u2_;]$Ek[Mk*f)dWY3EP44' );
define( 'LOGGED_IN_KEY',    '9YxK-]yX8$-QQ^3uZ/(hA:roNrr*6yo9w6xa7#xnK*CJz|0}0m!OvqX!+gO-o874' );
define( 'NONCE_KEY',        'lV4!S#Ve|paJR PB*<<NFelW*$}VYL`.Jt +_3s_G4qPWy)@#Kb[gl)-uY9vF8%^' );
define( 'AUTH_SALT',        'Yn-X7F4fE>Mnk/]o_A_<H.HiT7rl&pKu5{j=]r8^,un{eupc:/MrFhOO>{)&Ahr)' );
define( 'SECURE_AUTH_SALT', 'L-01m!WdxZ`PWKS,V=Pt)=<Fv)s3aS~=+?{*#SkGr]c yo&}]X(CYC#w~w`ldhoi' );
define( 'LOGGED_IN_SALT',   '@t VLl 6m.?Uf+WU>z<CpVT!w Q%AxSQ:sJ,qcqq.=YIeg5t%Tzv_`*F}{}whlZG' );
define( 'NONCE_SALT',       'yO3yyIA8]5>vp!fG->Yg[{SP6ISXwet&*APQmU8qld-_FriEdW=f{]$dn KSfe}T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_NgSXz_';


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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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