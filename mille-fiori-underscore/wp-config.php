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
define('DB_NAME', 'underscore');

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
define('AUTH_KEY',         'lmX#$n9yhOjMX9V$Wp{DyZQKauAh:HdoIO_ wrI[65d>[j=7d38XrYL{$T|9gpeS');
define('SECURE_AUTH_KEY',  'h#G|J+FiHpEB =V``<Bt&HD]C}~O5smyUJCumqeMedo#P20&Ss?l.F;`55Jqn>!.');
define('LOGGED_IN_KEY',    'oZ3@Lv}? >Qd[<.?x9U0~,h9{vb}L?K x__8Kn$Lt|MB7<xZI&hH6lmO=KS>1(rp');
define('NONCE_KEY',        '-E+j6q+u=_qO)?)*m.,. 4o}Ou0{pA.OwI?[;uoe9&P[pEb[fXGULMtSaU@t][Yv');
define('AUTH_SALT',        '?$6 zo|7%$M7~=&1I6(M{V_F)Y(j|o[dp!hoAR9ej<}mT0r5y(N/P|HjZxG:b89M');
define('SECURE_AUTH_SALT', 'lxO+SM9:^QCPxMzEfpxl2W*KT]P}zA[Wn=GitXxOZq;WVO8&s>G*jN+q-( {Dkxp');
define('LOGGED_IN_SALT',   'I+U[ur9s$O(J7/T)$Z1n;w%Hs6o^Hq1HA0*)wY^}4H8ZE509ZIxR!WuSDv;Lm$a(');
define('NONCE_SALT',       'iZZ1m1>JM8Y/YG;iW,D-{YXtm{29zYI{pk]geZUZID[]P@TnLW_8cnohRtk*kOr0');

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
