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
define( 'DB_NAME', 'brujulaed' );

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
define( 'AUTH_KEY',         '/7};@drUyF*E-&]-9O&Zj6)0Zgi_W]_zlv0M1mGVY[x73jKj>dYaPk=a&G2U14}-' );
define( 'SECURE_AUTH_KEY',  'FmW~:7FP4Fj^:j_1a]9pF@gP*uYEod>k<tMoQ,c$R.3*.+-y<i$N*6%m?4yE~opb' );
define( 'LOGGED_IN_KEY',    'z#@8_+#Vs6I-?-5~V&H(H~O@$2B1J>`b$SyKo~ R#<sF~tVdpo&d{ZsR2xG*}Q_a' );
define( 'NONCE_KEY',        'wPkZk;oTnk|uJ(e]VP;>-Z<m>X8=3(= +:> #NpyEL)C]ZZ!X~5rL=`vMuvJJM_T' );
define( 'AUTH_SALT',        'kP]Os69[R~s>q5b$ny5[sl% UiU2JvI?}$_oC!,M`F@cd1-g/0R]1/LjwVrR*KQ{' );
define( 'SECURE_AUTH_SALT', 'EJQ?WA#W:^t7[@{92 /q[6.|MMAU9ze?UPM25lIJ@4lTapBLK&8oID2+|9i&Md9C' );
define( 'LOGGED_IN_SALT',   'YF7e-VxRSxsLE?&vgVj%>JE0dX3eAJxg;4gS2A(s:;_^hfL>xddi^[g8z_]:jah%' );
define( 'NONCE_SALT',       'wmlMycsK7}ptUiIY7gq<1nUEq$H1q4W{>_ROtK@KD=1w0)95ixYpvfC[UKD;3`($' );

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
