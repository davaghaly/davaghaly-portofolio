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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         ',M?Bi=c[dceRTS^}Ol=J)7Oe}]rN:I-$6AHGCh2QO}}!dD{9~?p:maze~8c)yRX}' );
define( 'SECURE_AUTH_KEY',  '_$bIR @fH(B7aOQC.>P*UEetT/7-;__)wAe}nbQg)?-&D@GZe]Ij i^3EL$H<UJP' );
define( 'LOGGED_IN_KEY',    'oV~ }b?%%b`~q[By v^0Y0tQP{c,*]mjTNWzz]#Di`#UTz;@8#v0jX^wy,]CBnsa' );
define( 'NONCE_KEY',        'k(m2(~X=z@^oUlu?ckc,~&vB]z>+4;_?-QH.|By-#_]iA= ja{-[v(6@xH&]~-dK' );
define( 'AUTH_SALT',        'aS{E09wLBk3|}x7Q)S9#u_o)S&:-6,s=y;M.2`+xX2eCe9dnhs)MxY5a@mgnL!e2' );
define( 'SECURE_AUTH_SALT', 'I{Q!oWpLIy9:gx_3Tuk4QIeDuI.OIIbY8xBF56w<r3+9y2Rlzz-#n09y)2SR-|RU' );
define( 'LOGGED_IN_SALT',   '5>&|crTY!(pWgc2_kz;1)J^2[0%o! GU83q/)I^kt+B+s#qN: }Js=uyB)ji6P,z' );
define( 'NONCE_SALT',       '6CA&Qy)<y&(uJe,WvoXSi}~HN.,iV32z~b@CChWo,9.oR>D[`V-PTo..+~gD=Ya#' );

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
