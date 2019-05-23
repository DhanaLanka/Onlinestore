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
define('DB_NAME', 'Dhana');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'u){&]u8Ef%}obnbb)kwv:73V5fw?*3d2~%=u$rXaS~0O8xaV%cA~Lc#-*I;GF2Cx');
define('SECURE_AUTH_KEY',  'IHPwr0LoFf|P0x:Nu[~CIFmc-+^%,?<?~,{V1qXWH}hJP>P055t((du{Ds o>,>f');
define('LOGGED_IN_KEY',    'JwXu@ Y7Q[$/mN>)uwq=_rHrZhG+z:Ba<Nb=mI]i~+am8<+i#<X?P#@4))nzm^+f');
define('NONCE_KEY',        ':0+y%PKnEo6^^<JE(OB^=^&Ym?zk82&;VHDA2[)BOdHR[x8l `1Avo :`GRhJcSB');
define('AUTH_SALT',        'De4vXa5uksXs(|3ew()=PeN:&3|`q){7lS.|#zUJ<tVE&U9{;6|`hu-s^{5)M<]u');
define('SECURE_AUTH_SALT', 'ItTnP^[_A0O;oh#!?vS;h7HJkMj,ky4>u;R8b+1bRf5UJb)I=fqeF |vCTNSW12o');
define('LOGGED_IN_SALT',   'aro@ J~GvOBj@)#4iA3ayhuu}VXQ.?[k-.@#ZSfCLb1cHHP>LOPX6zF}PG_!I:[H');
define('NONCE_SALT',       'WV)crS_|,Mb#TYXr!cO~%%jP9CXaiB85,d1QQdrO-1fxcLRu2m{uDIK|z#ZmX4!x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
