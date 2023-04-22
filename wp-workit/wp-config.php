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
define( 'DB_NAME', 'wp-workit' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'I2Ut`_arJ:NDIHN?2}JIO(g4nvAkD`A;Oy+`TS3Et![9gq>f]1ZT3ab3$x}#9?qc' );
define( 'SECURE_AUTH_KEY',  '0Gw3nWU2Bj&p.*}5olw)E$Jjywb2/;,11IdW Bmqd]]Gw]R>W5c2{ICi?yvU7l)m' );
define( 'LOGGED_IN_KEY',    'qkT^n,]0[@U{u3l`DIgU7M2$-WXq+,B!dRPb!~7uMNiPQIp_uuwFO77XF5n<9.tQ' );
define( 'NONCE_KEY',        'WOS|Bhf`v<,WQH%@~yqQSbn7-zz=rF%H%`q3^,-DfFMA:/UO5T})ve*:uAdX&`3E' );
define( 'AUTH_SALT',        'G*T9}{bfEme2x!Q Ay%_5R_lqaR:~Bv0FJ01W[/yq/TlG X3,b?n Ujq9R*-n37`' );
define( 'SECURE_AUTH_SALT', 'cjV1zcFU?(?~,Vl[:L8y%DgH<vDE,& .EcGcl>)jF-V`O6RHfa@U)ucV[*}oS1gi' );
define( 'LOGGED_IN_SALT',   '}XeoU ~3&_-.QWQLGF{cV0,gtQ1i->5>P1/Uy{>oHT2!j+DBG:q/4Jbf^X8;kDH{' );
define( 'NONCE_SALT',       '(5lR:vL%sP}&V=>9UNr.|A7QrvG0,bocM,?DR!wjF4j/-33fezok|ztSGo/j=AK%' );

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
