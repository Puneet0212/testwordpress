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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '@ah/qym]O$nMhq@a@hI]b{#n3u]SUbbxB3c2H;5ArDvX/4+E$ n:R>DmFflNH%&Q' );
define( 'SECURE_AUTH_KEY',  'Gos2HWKNM7{ 9rKT4vTp2;cR)s,[Li5[sV^%=tgDF>@n#*u0Nbfaiw|x1 BdI[zm' );
define( 'LOGGED_IN_KEY',    '%tQ#Q*R(&*DZW^H$&Vs$+nSigjBjuiGUDHL+A=}@T,*LalfD!e3r}d_+#.[h0b_k' );
define( 'NONCE_KEY',        '4}kootF5d5KGj&h-2t>VVR~N8~XS~zLXfFnT`1-ADI4,PlR;K J*K*Jl3})Xwg]=' );
define( 'AUTH_SALT',        'vY^%yPb&16 V|5xk6!D$x6v7q@77w9kkl2+f.BG8*NdJ2&-qs+I__Ke[+$D}EHbf' );
define( 'SECURE_AUTH_SALT', '6LUd~po%iWBmHTX!k$-ZHMBERgItYP-D)_nj+c|l#wxDwH4YYfBJ,2^oUznmAg-6' );
define( 'LOGGED_IN_SALT',   'xW2Q=lkd7azaF^q4yEVs2<u{} `Wwx_NDMa3|>E2QP9qVlmx,u|ES++-dU^Co|&0' );
define( 'NONCE_SALT',       'Q_YO~WfL&aCoLO9a}|-dq{WjtN{F$A$8}>]NUnrvX_T-7LJj0o@r=hh}*w%fo6AD' );

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
