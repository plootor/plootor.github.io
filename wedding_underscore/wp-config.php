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
define('DB_NAME', 'wedding_underscore');

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
define('AUTH_KEY',         'WG<R~xY4~aJ7b]qlB(51Lvn}oE;R.E}gKtb_l*5XS84HUL6{4i1jg5[vjS4db/>=');
define('SECURE_AUTH_KEY',  '-YGn#wkSAwlLO-0} Gb&}Sb]`dM#nM:|0o{-@Dh3e^pyK7kvIetG^VJV9tR7hjCd');
define('LOGGED_IN_KEY',    '{>|NyvjDfBezs_U5vo#g&I7{#T+g1W:y:8qCk`wD.|7q#<T6P;!/)L)V^E!*0l1j');
define('NONCE_KEY',        '7A)x @n~RYW~jCRl-;L9ju76Txq~2jvZof-`qkX!)|);( @oh92|0STZ6c,pJpDi');
define('AUTH_SALT',        '}gOp2EIbWcs0fLVvTOF-K<@QHgZu4N[iBkM$`,k|pcBvoclM6PvnMN+S&C^;=hvm');
define('SECURE_AUTH_SALT', 'sN0dKc!Ab3qPw&+Km#O*l^<T#}gJ%oO%Mtv]sbfBY6cj~e1Pt+X+uDJ[%=uwh6+B');
define('LOGGED_IN_SALT',   'k,HJ7gL43%-pR])!bxa73h[sL`C0oCmJ8}=F]0P6=3h~$hcz-s59vq %`ig*ER T');
define('NONCE_SALT',       'HA_>{Klex&!n1#luVYX5D&UhR}@{LyF|E^,tv:1?;A]!1.$[0U 1vP$[0Oa =(sZ');

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
