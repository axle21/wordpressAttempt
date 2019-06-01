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
define('DB_NAME', 'gtcodingDBnrwni');

/** MySQL database username */
define('DB_USER', 'gtcodingDBnrwni');

/** MySQL database password */
define('DB_PASSWORD', 'L1wfifORJz');

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
define('AUTH_KEY',         '#G_~5l-,Tnj3QT.67m^.Xqm6TX<AAq.k7RNg03N@@0gj$QMg07M^3byZ[CCs|[dw');
define('SECURE_AUTH_KEY',  '2lp#WatGDW#i+Lee;IL+2]ex+Pii2LO~1;i+fFFY>{Euu>XbyIEX<AIy{<buV|C8');
define('LOGGED_IN_KEY',    '!0nv>cgzJcY}F]atp9SW|C9p_[ZspCVZsGCw[2i+yMfi+LIb;2L+x;ei+PLe;z}cv');
define('NONCE_KEY',        'Ub3AT.^7nNh41K-@4kgGZc0JFv[0gzv>YDW##9pt#aWpDCZ[#9tw[ZZsCV;i+xLei');
define('AUTH_SALT',        '#hi59S_51l~f3MIy{3i$yMfi2LIb2L+x;eFY>|8z@QjgzNQj33Jz^3jf$M:G-w[Z');
define('SECURE_AUTH_SALT', 'w|ZwsCVc}FCw[;e+xHbi2LHa];H+x;eh-OLe;y{bYvFIb{{Eu<fyuEbe;IIu<zNJ');
define('LOGGED_IN_SALT',   '>7uq,TXqA6T.o!RNg08R!40g@!Unk4RU^74j@#Wpl~OSl95O~|9pl_SVoC8S_m*Pi');
define('NONCE_SALT',       'a66P*#9p_.TmM^30gz$MjfFMf{FuybuqEX8o!~Rko8RN!48R!!4kr,URo79W#_');

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
