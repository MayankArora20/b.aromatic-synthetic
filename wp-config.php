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
define( 'DB_NAME', 'uifqlybh_wp703' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'dgdtmbgh67efwk8pdetcwv5kjyxug2vrhoodmlltapxkszh4fgryjlhlft39z6it' );
define( 'SECURE_AUTH_KEY',  'bsfdiadpkvh8xmsmibiue5mxpyn5kzrgyfyxev2rkfv6snmdsvtg54swjg63aaf6' );
define( 'LOGGED_IN_KEY',    'uzkgy0vttryksiwlhlhvxbhy06lrdton4p8ivrgdunsnvvawu9n7xtdchp7u4rbo' );
define( 'NONCE_KEY',        'lwgp4zuxai3z2zn7usazg70tquascwajufpjolrbef2mbfornpdyakuio3aqxtvk' );
define( 'AUTH_SALT',        'fhsu7x2prfxq0xxlnewlkat82hgyx4vbhffukxpeqkqr1ybyrv4wnlsfs4fcq7re' );
define( 'SECURE_AUTH_SALT', 'a6fzr3tbtples6f7ismoo1penqi2dhjmimzjltahtlahn43lzvkjzfxmsxtek3ix' );
define( 'LOGGED_IN_SALT',   'ftkezfqwplxlfcwstwsyhwddbid5f4zhixbrqihfr24ow2vpminpfp6cldlew1fd' );
define( 'NONCE_SALT',       '5dzyuvukf3qqufztcs0ds6ylxe7jyykgdnjuy2yvllous1ykniahtkaj5khlhixy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjn_';

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

define( 'WP_MEMORY_LIMIT', '256M' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
