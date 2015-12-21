<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

/** MySQL database username */
define('DB_USER', 'PcdcAdmin00');

/** MySQL database password */
define('DB_PASSWORD', 'Ns7CbwdXs22j!00');

$server_name = strpos($_SERVER['SERVER_NAME'], 'productioncompanydance.com');

if ($server_name !== false) {
    /** The name of the database for WordPress */
    define('DB_NAME', 'PcdcAdmin00'); 

	/** MySQL Production hostname */
	define('DB_HOST','PcdcAdmin00.db.9875826.hostedresource.com');	
}
else {
    /** The name of the database for WordPress */
    define('DB_NAME', 'pcdc');    
    
	/** MySQL localhost hostname */
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mN|WkqVzLI@,QOr:Z+5g-u4?{NqJ|T+7mJo15]*Q$~R?#G<BS[CrqtVFv${v&m!w');
define('SECURE_AUTH_KEY',  '<Dr/1.~9H;zT%IwBGSdfs60l,,Gm{u<g#= Z>xI9=g+GEP>[R9Ulgz/$.x:Go }W');
define('LOGGED_IN_KEY',    '[_p(4EW91p:+^Zlk(hQ^?f|_1BAD7qQ>!e+;ZP&k+Aw QI/aFT2XxP-;7jafME/J');
define('NONCE_KEY',        '.Ha{-h8079~}*4_Ffx-ECpMu7obc4GlZlT9qWP+;L^;-0*UXy_$~5lB&E}a6|sDT');
define('AUTH_SALT',        'ea[U|!3#h}#43#UFX{vlDsU[aJ-=T[WQYA[5HO^JUjceb<<>3y%m/{Ck9(eFXhoy');
define('SECURE_AUTH_SALT', 'Uib9+/kJ O|:Wj2s0WU;CGfP!i}ZP441vuyx6+ l/z>/.v0[#8/._UsxSYKnZ5C8');
define('LOGGED_IN_SALT',   '!bF]IO~avO2Q{K>fh N%R417@:+Nn|ir-u=FHNJ!FCA8BpPH< y3es^~E#)z0z$/');
define('NONCE_SALT',       ' .<qN]4:p&%@7G0FVWa ]+{u_2 mT9q502MfE|)$){OAj;B-{1+si}Z<+:/^HpKy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
