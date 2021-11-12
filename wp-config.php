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
define('DB_NAME', 'sql10450497');
/** MySQL database username */
define('DB_USER', 'sql10450497');

/** MySQL database password */
define('DB_PASSWORD', 'cZxXYca4YC');

/** MySQL hostname */
define('DB_HOST', 'sql10.freesqldatabase.com');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '*@6;*OV1R<y9 >nr-hw[y~T=R}v?G^P_Spdv[QB-39@]UEZ8uP?##3m>BU$-:AXG');
define('SECURE_AUTH_KEY',  'DEjFM2Lm<yW9cc9nQARy0pl{)b3r#Bj.spJceSq /$WIJ*ZyZv#5}8S7SAzV}ndY');
define('LOGGED_IN_KEY',    '<-k7b_1%p}]1SiPGpgA9-N8*RKbGQHJDR1tr`5%Z0-13%qR <N%xSp)W;8MvbpSg');
define('NONCE_KEY',        '{%h@m/t7]@wOj]^iU!@8U.1QZoVMcG=W >3(|I:efE&tlMv{9hTB%$UU|F4;K8R^');
define('AUTH_SALT',        'qw_/8CprmGN`KHfe$[<X-fiQ?BRX0nr~UI atRQ7Dt [c]XWlI3^O&m|oX~[N!gm');
define('SECURE_AUTH_SALT', 'Kcg2O^R:.Oaw4ksVe9-F(G(l[[#5ppWDIso_1)?KpLAS}NeJIF!VTw#7QdaFk_K@');
define('LOGGED_IN_SALT',   '[d;E^bRV_wZ;hHC$Nk1~~s7/Z.C4Aac.tpN,4Y0ljo~OW(:;W8hwp#UY[:.K4Pkq');
define('NONCE_SALT',       'R-JYFdtG~2Fs-H8JtUesIZDS8T@<flNUTM-H2([[OWoFB|XTR1{=Zb35t0-7:7`P');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
