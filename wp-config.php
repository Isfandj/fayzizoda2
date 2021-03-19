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
define( 'AUTH_KEY',         'mrVVo2!j@rLw@[FH3I+~&? nb@WAkj[OFqk8.#LARQ@Vl_zOx#c<09+F3y`fVRJu' );
define( 'SECURE_AUTH_KEY',  'qkbqq9aGk_=]&AWp12Uz,|7.qB+ni`~XTP-GZGh~A#%%E1y#hf%bNw]gJEY3jjQb' );
define( 'LOGGED_IN_KEY',    '{F2.=h/D*vgc#,x %TLK(rU#@$_w%S7}$+c$|f4#;&C[VK9_f]TBT*()53eb]YFI' );
define( 'NONCE_KEY',        '_,%ZaTTq.DqLMUXDZd;^ba&WwvqZr*34[1&5C-6Y8rvOOyJQB;l(p0f^yYj5zzn%' );
define( 'AUTH_SALT',        'LFI0wzsa_.*A);=&[L,K ^uOfEHoi$R^Sv{e3&s=JiITatG0yH|lQ%$g~NH{S/1j' );
define( 'SECURE_AUTH_SALT', 'KD$` p*0r{J3Q_k3vtNo[JR!`hj!L|gogC[z4ERl%`qI]6C5//k_=&iP/SZ`#ySw' );
define( 'LOGGED_IN_SALT',   'N?Ik^X?W ;@M90Hq5ED=>NY+w=<[4YBGa]FKtG W*)n*EPS=DF0qFn/Z,Gj,`7<A' );
define( 'NONCE_SALT',       '%!9_#?imH6ELexHx]ejk%xA y_+etvCT gH4S>Gn]J+!G&<Zc0MPaU#8<OE>O/2O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/* That's all, stop editing! Happy publishing. */
define( 'WP_DEBUG', true );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-config-local.php';

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
