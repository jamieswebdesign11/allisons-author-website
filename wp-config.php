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
define('DB_NAME', 'allisonsDBynhve');

/** MySQL database username */
define('DB_USER', 'allisonsDBynhve');

/** MySQL database password */
define('DB_PASSWORD', '1C6ql4zFAR');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'd!sK48wV:1!nN,>zR0oYc4zRVJrc48}G59wh]~_WKthlD_WLO#lOCG~d58:hG~osK');
define('SECURE_AUTH_KEY',  'oV[-R1osh5-SVK!vJNBkYc4zNCF@c48}gGpth]-SWLth59;iH*_xL]whlC_ZdO#lD');
define('LOGGED_IN_KEY',    'S8sh[~_VKshlR0oZc4zRVJsd48:VKN|w]~_WLtilD_WLP#mDH2qP59:WG~_w9:hla');
define('NONCE_KEY',        'V3,cfU$nFJ7gUY0vJ7BzYhlV:sKOClV:~_Z9whlD_osd4zRVKsg48:VKO|w8:1a9t');
define('AUTH_SALT',        'I$nA3cBz@rF|cgV[oGJ8gR[:!jJ^,zN}knc,vNRFoc04>_wKODlZd5#ODH~p1#]h');
define('SECURE_AUTH_SALT', '}zNBkYBE3bQU}rF37vf>$^UJrgj:@G48wV[~!Z8whlC_ZKO4zRVJ@c48}VG@!w8:h');
define('LOGGED_IN_SALT',   'T.uL{YJN,kBF4cRV>@F48wV}@!nM,vzQnrg3zQUJrc47}G58wh[~SWKshl9:WKO#');
define('NONCE_SALT',       'A*qE.bfT$qEI6fTX|v8}0oZ!wzRCkZd4zRVG}rJNBkU}0,NBFzo0,>cRlZd5-ODG~');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
