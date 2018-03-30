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
define('DB_NAME', 'wedding');

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
define('AUTH_KEY',         'D)1:HVaP=GGvtc+#+`K~aaQqomNtjJjB;N8JFF:;)V}C&@#b&,Oy|#{XFQxT%)37');
define('SECURE_AUTH_KEY',  'wvG`t,@es{+22=<i+N4hDy-rTukbGuo/z-uEzl{6]o-XreufQr?r8a-5_Lw}S9Ih');
define('LOGGED_IN_KEY',    'WVl{g7wJ[E|f#&@UyY mcm@.J,`AJ/kSvPDMc.e6BH|@]]sn$?t6GZhK~!n3oz=Q');
define('NONCE_KEY',        'qW dj{7z6,`KqNU)8|XcM5#dX}~BiMp~C5@24Sua*^]TrjZ$cYSJ+m9{%Qy,/Rzo');
define('AUTH_SALT',        '>_y*L4S$,Z1rlrh7Z-N2@A_L]G]xx vjdE5l4-)A/>fRO{jz6NZTPk[o?<`.c5Ko');
define('SECURE_AUTH_SALT', 'Wr|43G+$B55ZDGnB;A4T&[-Xtxz]ge5;CEcmYv6w/?.h:n#GfrK0uo78>stPH#Cy');
define('LOGGED_IN_SALT',   'maykm@So>Pkf=glaaJPCg ^`|P#]Q.XsgM}f0_@.by_X`;Nm0CtTT5#NuO s^Z[M');
define('NONCE_SALT',       '(!,B,%OHtdO/[3 < YU&U.J5yJT#R{T7RqSAs=(sA,jA{?LG&4b[oat-RS^(5PtV');

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
