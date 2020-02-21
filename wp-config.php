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
define( 'DB_NAME', 'weremnant' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         ',V-,O@~Wy=UA&C[e;Km1a(?,H9c~z1F<@!2,8f474&`JfKsP@!0QUA.OIHJhMFx9' );
define( 'SECURE_AUTH_KEY',  'm[V!rP)x0?G-4;exM?G;b-+Yf_0 IH.6 K:O9oN:,6f7.ak~W>.8lN:}:D~?nX}n' );
define( 'LOGGED_IN_KEY',    'BuW/XahYmg5(h9xJr$^dci{*{_e?+Q,w9A~m/* *>{7:}/B(},R3(6bF:VdK}uXj' );
define( 'NONCE_KEY',        '_N<`~;{om`0k5C+Sx!cgDu=cK{dpA(mN|`l}BG`/se9y1Lg.P;d:Lcr[Uy`o^zr&' );
define( 'AUTH_SALT',        'H#p6WpfBry)/!x>`=0AQ,lbi2kHMu&j6Y;azA`HFIL,4U@f.~1pdztI/ag]$^{B;' );
define( 'SECURE_AUTH_SALT', '?+!qtd$cle1cB,3rAk1-1zreE~$! _m?i?u)JuybB?P=i08WA9$R|k*}=fbm@6g8' );
define( 'LOGGED_IN_SALT',   'K;]}PYm8?+<wPqZ+:UYiJthR[XX;?OoVn/<G:}e~5C<`VhLLdlE2^[CK_U9A<F O' );
define( 'NONCE_SALT',       'cSf>G5!OwiX5+7`k0w<y$h5<r*]PE[m?tf-f6RYR]+$9/rA%l~ `Al}*zs+dE+(G' );

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
