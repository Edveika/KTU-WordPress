<?php
// Begin AIOWPSEC Firewall
if (file_exists('/home/edvbur/websites/site-1/public_html/aios-bootstrap.php')) {
	include_once('/home/edvbur/websites/site-1/public_html/aios-bootstrap.php');
}
// End AIOWPSEC Firewall
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
define( 'DB_NAME', 'edvbur' );

/** Database username */
define( 'DB_USER', 'edvbur' );

/** Database password */
define( 'DB_PASSWORD', 'pahchooJ9Ayai8Ar' );

/** Database hostname */
define( 'DB_HOST', '10.2.3.22' );

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
define( 'AUTH_KEY',         '.72a1]mi}-YnJc3F/9yy)$4/y{SMw6,8& %i16lNj5&h%`<8[r&HI6!Q3EF1[rCX' );
define( 'SECURE_AUTH_KEY',  '*VXAFq+t;s?-Fr9$fQPGQm6~T{3{aicH9B_CV[RQ~Jdh>=$7Ag?Xo6iovtdE[=-8' );
define( 'LOGGED_IN_KEY',    'CS^a2!)hG*9gtmJbl-Go>6ZfLz.rtyNR-/W)Xq):[fxKP>*OY3Q15|>FO~c9P11~' );
define( 'NONCE_KEY',        'Q^qyX^Fgu9Kuv4}|Y|hMNXrf{D*Xr)h83k4nT)i=VL_0?)qwrg,~~76>wxdn:C[j' );
define( 'AUTH_SALT',        'X~ZIWO*x&ReHuqc2N}+y ktyN01~?D<y:<7lw;u $V`C]HFsBKkW|p(pd5ht8qC@' );
define( 'SECURE_AUTH_SALT', 'A%|9DbjYnbZCaG>w*DW/T[m,w0,(vtEqDwHfKoK>{$:JmL_PwzR53VSm06o:*Fz{' );
define( 'LOGGED_IN_SALT',   'UUO!R?Vl!Qss)/q7/Q(ggF}u13 owD0VB=[)j6Qg$~oA|K-||3 ?mr!Xw@Cz*q2o' );
define( 'NONCE_SALT',       '#Tk(spo#2xl-uS?A<3fNVR!OBkUQA :NGLll.=/5KMok(lBdS+o-z(76{|U&xWEk' );

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