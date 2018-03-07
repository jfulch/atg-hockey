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
define('DB_NAME', 'WP');

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
define('AUTH_KEY',         'ivsy]w)z{$;gH;8utx[R/3d/.yY#B:]hB%h8OM`[z#Vi/#&aGhRpwc;~H7-PL}dw');
define('SECURE_AUTH_KEY',  '[)5x/+vXZO@y-z^M4)q@o+dKk&Gut^&Ut?(e{_/4W yGP!8EmGuxb,QuPgDPJdq;');
define('LOGGED_IN_KEY',    'sfUc#N|A,Qv(a79<JJz%:3)B?v]ObNd]CU%{pWM_PCkNL~}2S+GD5XMEy|,76`un');
define('NONCE_KEY',        'PpaShs/XycVZpe >y6IqZWY9WMRG5@`@-Hy3b~{o!Z`B{mnH{skmm!2][1 6%9t%');
define('AUTH_SALT',        'OF<&p5I#3.~:9n;lOPrcT$&jWhn^gP:(jYkT{fKE;#]1Ay8i33)+as(M4YFpm7=%');
define('SECURE_AUTH_SALT', '$iJjN-?Fad}S^s, %v:8k9|!*f&^(E`yD*fbM;x?Ff}=GQ9L`z$-{Jh2Y TgVrW<');
define('LOGGED_IN_SALT',   '0_htSHgr>3i)nk[!N2*}0Ec4+7|BJmGI+>kPL(E1M(=+L~013qo5jL=s)$r?Y;B|');
define('NONCE_SALT',       '9Ub@R2w)CGa8u FO{7Hb))H3~/]`DGo^T-gh5J0j2:aMXS2p~}&cED-m$rzI+4F2');

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
