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
// Are we on local or live/remote site?
define('IS_LOCAL', strpos('wallindev.se', $_SERVER["HTTP_HOST"]) === false);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', IS_LOCAL ? 'wp_wallindev' : 'wp_wallindev_migr');

/** MySQL database username */
define('DB_USER', IS_LOCAL ? 'admin' : 'wallin_migr');

/** MySQL database password */
define('DB_PASSWORD', IS_LOCAL ? 'grunge' : 'Grunge_2018');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'T.>r7)M`KyIu|/h5,Edy.YUUE%oHwT1R]s>g|F5:5`n1}CNy?SY4E6?S3Zsb%/R+');
define('SECURE_AUTH_KEY',  'beW&m;n)igYV4)GZn<SN/9]_|2:L9J^TYUHA -f`l653<*%VYkq}PoCc`kUdwePj');
define('LOGGED_IN_KEY',    'ct5_Pk$o3g7L{9$|V5Gg1/-r2Xv`5@qQXa)FH9GQ3loodE^]5z:E~0[O0=y+v}s~');
define('NONCE_KEY',        'ZKiZ$yWhAm^78Qd<H=n6(X}!7jHE;XU,-IonhuI*0s/{solM(1M!;ysH2)?vpAJ5');
define('AUTH_SALT',        'S7wvP>J{yS+_VvE8<Q&nWhL%MNf$2XrKr8VZscu022ld?:B%v6Fvl;9K|C{`GW^)');
define('SECURE_AUTH_SALT', '|xP0G5,hu?jp.~,~eMPeFzWmt@3:`3?jTt9%Y?f|,z5WA,:?;Ukq@b#!T8)I.od3');
define('LOGGED_IN_SALT',   'P~S{Y<r|03brBZ7md>)dz4x@0kxD[WRNp4w(TkAh2nq}{N`X[_S6c%<{C,=)^@T[');
define('NONCE_SALT',       'dyYy_,.)0iZLU]I*G5S$:cSJdqgGdv+.?mjQ1z+*U;5O&%,q-C {t:1tq0z{gL.Q');

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
define('WP_DEBUG', IS_LOCAL ? true : false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
