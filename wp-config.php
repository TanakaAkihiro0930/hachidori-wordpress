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
define( 'DB_NAME', 'hachidori' );

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
define( 'AUTH_KEY',         'n0.)*+<`k-n{EWa*(a!t#q-!03nCV=+Fe];O[=&IqF!> 4D $8|*t(pT*6{#5.@-' );
define( 'SECURE_AUTH_KEY',  'X<d^[D&br*V,Q-!8?)R|nZ=#i=i5YTLJ%{`@NTg4;kDAwq#eMNodnj4x|2/[9(Zr' );
define( 'LOGGED_IN_KEY',    '&(I.mUf/-0*:[92{?J/:93R5]N,y8v,coUYE(w^bu{Y#.VsSlGI.cXjSoIxXksm!' );
define( 'NONCE_KEY',        'mO4Quc{&;P9eE3cvghsj U$z.N T*pwNA/<?rhrR.0b)rA^OU?5b?e)QBz`FT<EK' );
define( 'AUTH_SALT',        '0y-A(I;8ujs0L=q8Y2SkDEE[uGaYs?6K@ry@X/}q!R;v<t=E*5F,>m3/38}l-RO~' );
define( 'SECURE_AUTH_SALT', 'L2YC7za+(h}<RBtKT7~8CTnIZiICWb@~@_kW<X19P.S:<U;O{:i:y:A;i7:TGk|q' );
define( 'LOGGED_IN_SALT',   'xOGJg^JBG~mU0j:vV2ILBWc&EQ)O/hVl]zJq=?D6J/N>96PlxY1qYAX[nZ>?zCc2' );
define( 'NONCE_SALT',       'y_f>rj^::[!rW:ugm$]NK-2u5#ua(cqjD-dZLw)7vA9K5,*0NdQ_,R?/&(G.C;j_' );

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
