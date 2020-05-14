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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'furniture' );

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
define( 'AUTH_KEY',         'WB-F;qh*A5hBij]qmk)-)cry@jq98].=w$Rv|u*>->Cxyp3^_!b>J>!^:7moXsF!' );
define( 'SECURE_AUTH_KEY',  '@&!S9k@4n8|XX`:j!VQS_~lbuSCc-Jo/22Vf-x-ctvlfdx5Yvs5:P;K&ueReS]+)' );
define( 'LOGGED_IN_KEY',    '7SdH+y[1} HY95kVy2]c(f7Rm7N^DNxQHn-q;7vm9{_VRNb<WI;;RU3kGO,YC$c_' );
define( 'NONCE_KEY',        'bwuuJZH9N&ao=WGM:%W_HIbwCVXqo1:BJ7qhZ|!+:OB.|[@n%>749foXbvJh^-7p' );
define( 'AUTH_SALT',        '(b]xi7;wbcfscj!z8(c8el||?rs8xe@h_[0SN7c7jbAru43=f4|E)17F-y{sazKP' );
define( 'SECURE_AUTH_SALT', '&9^By:(h<ui4YICv|MF-^/g56B(|!~|K!e:Wyd}_LjxB7Ctgg5vm,sLxY1_I-GdH' );
define( 'LOGGED_IN_SALT',   'u@*[pLf6S|yj%3GJ@>q:f9C?mJ8o^&Eyqfn!YmY^E@,&Nl)b-3DOz+}q@W:azpm ' );
define( 'NONCE_SALT',       'o8Rg)<dLf^zBRA#-6]*Q^P:2|TdB|+vC*h&ym-%%,fE?`PwS^.Wu$]byo-3Dl|Yu' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
