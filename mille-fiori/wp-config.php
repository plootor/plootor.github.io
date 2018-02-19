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
define('DB_NAME', 'mille-fiori');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '#AW0Kspa[^|HkBvU_hi@K,WG^A!L85D#_x3>,l%$;6pwW<S2Aer8pv&+.$oPv_G#');
define('SECURE_AUTH_KEY',  'rq{k]5@}~wpfNtY=A`p)F^ N8|+h| g>/>.7A{I}=e~pSs|o=a>;Mey>1,HMNW>|');
define('LOGGED_IN_KEY',    '58A.D-H*lwW~`VlTy?^=l^%9T9I1Qn(N7YCHIBNn_,u|#a2PY+KQ89WHN+x;;PQl');
define('NONCE_KEY',        '_HdLXodn~M+_*wSk[LGu<We[poigtaeZ}B,TS|^!3(G9?5P70./aC?Y1Cal79km+');
define('AUTH_SALT',        '9[X$QxAOV$,K2?PJxV2mqhJ-6%&6Jly/RKlC7v#Na+gEP{JlXz]mu/4W}4 WO:Pk');
define('SECURE_AUTH_SALT', '{N88#B>?/nN~R8J7+6LC!4|j{VOFu9YR-c8|Pt63pByiWNR+;<Jj90zy|2/;~cje');
define('LOGGED_IN_SALT',   '4]`6jYfpTtf.]]s|m5T8n:@Vv~)(^t(rSPxxH6w4CKj+*e>byn6>19g r*gY+?%C');
define('NONCE_SALT',       'XHLc1t%R71%m,LPYJ3PT:gq:XCLeLA|uMl!H|Fhxiu&ZF]gd~ T/H/P4GdI A7{F');

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
