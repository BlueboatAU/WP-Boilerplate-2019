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
define( 'DB_NAME', 'boilerplate_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Bwg?j6A&I67_`b%el16J6`OkU_SdGO`K:yzo{.|[O[4-.7&uJy/I-Sr!>-kR+.sE' );
define( 'SECURE_AUTH_KEY',  'AHF]IVcYP{KP .{Y$oK<kt6ifYWr*Y=B,qNjmLN}Isk/cjpzw h9Q@1v,4?t^x_&' );
define( 'LOGGED_IN_KEY',    'itK/=bga{mo:BDS?jTZMm9Qq-@nam+SyH[Gj%Jee%H@48hZJU?>|4GIha*3M+ewK' );
define( 'NONCE_KEY',        'zJTKAW{i^=P^c&dc);I`0A<Dxoo%swbKO/Vxiw}`4..j57/.n,Lz4?5>xpxabeyw' );
define( 'AUTH_SALT',        'a==Q#wk3QlqVGZ>Ih&ts}Yd6<{zgJyz~VZZ=lZoZoSt_ma(#l4FI`R?[{Axw;w7&' );
define( 'SECURE_AUTH_SALT', '7(*.Hls6)shWveIP}v0(1[3*#=;^eIw8c!x&iH|yK/r$ke_H9@$wV6glx}3cu5k)' );
define( 'LOGGED_IN_SALT',   '.ge;dK}1L-!*3Cq`z)y^[U/@Pq}0+(r,i}XHT^6vH0_l.-L4/{v]KNsMo+tG&@;&' );
define( 'NONCE_SALT',       'z`lUbY:9P(JJlPK-Ec){Y<<J4QAZ`|xB!.r+g1&zX/I:H*b`K{y}*q.s|as<+0Uz' );

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
