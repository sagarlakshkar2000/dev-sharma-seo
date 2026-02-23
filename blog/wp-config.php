<?php
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
define( 'DB_NAME', 'dev-sharma-seo' );

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
define( 'AUTH_KEY',         '>]J.qsK,Mt-?[c( z2,BYUzks7rEI7&}]0>g9Io+v@_!7v4J>L[xlJ6exT~Vnxw}' );
define( 'SECURE_AUTH_KEY',  'ZCy/YCN6jLiP0s{|n/l^LljQT-LPW:Z%3:}ygO!3&lF:S 7GnyROtvL z=8P-YG>' );
define( 'LOGGED_IN_KEY',    'j Dk%T#[A&PZ!&q-WAP=z$31@T:^}pL`bg(#{.&FkB8s|O+t[?~;2Lv2#*;,An/6' );
define( 'NONCE_KEY',        'xQ7KV6nv(~:b-V1H3El~HjaHrZakN@Fea yw}DnrlwZRo[p]-kA3eiI]Rswz&j}5' );
define( 'AUTH_SALT',        'w1*BpGg6|HfQ#qAj7p8Pocc?RC{EH3|,xE7c)6O[S@;kFw85V!l)?OO Rz;`=~zR' );
define( 'SECURE_AUTH_SALT', 'X$=52qT+<OVsj!yT:-x#{ILi`&3Y+n5-cbp=yS>f?NlIp!q~A!Tu&vcKE8.!v?ki' );
define( 'LOGGED_IN_SALT',   'OyFqf$`M5<g4!Qa`7wH#L|O|iOUV}f4*~NN`O9kaM9#F+W=YL&]r4P ?<PA>>=b9' );
define( 'NONCE_SALT',       '2w{h=^wB($u,-B4=S~(j[`Z@*$BR1m=%z9GA>:^4:t9A-> %xdS^yX9sOg9&._Mq' );

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
