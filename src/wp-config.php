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
define('DB_NAME', 'ecshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root123@#');

/** MySQL hostname */
define('DB_HOST', '172.19.0.2');

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
define('AUTH_KEY',         '3+801tQ2+C|D<!;42~8BZ~jTF JCs<z<$)zSB85;C}#<}[fYKYU|Hv^^fH@;?>dM');
define('SECURE_AUTH_KEY',  'Zso/%uL,<`#+w?&.7{5i-)mUet,vP.>xr6`hGb<<QT@!Q4a$u}[dsSE){S%.3uQo');
define('LOGGED_IN_KEY',    'aF*&~;qMW#r@kCZg5<?9q+ltu|-G8jEk5Zj5|Z&M}~/(7CER|$RpB5?FM_]AqcRa');
define('NONCE_KEY',        'Z?~9.4ECt,BKAL.flX,9^ag0N,W+1eNhc9nQ`Ao{,CTFheH6)mmpZM:8gESzOi1/');
define('AUTH_SALT',        '%:>FShQ1xAV@E$qD7f6$m6`l)Yx`3,(i~~umG$s[}ijI`drh8pw2[U3Bc(1 }!$$');
define('SECURE_AUTH_SALT', '1c9S$2RvYxv:X/|rZA>J:FAkQZ_+Z8FIQWklE7t(=?Q2@cYWn!f$Hae~E8rt]~$?');
define('LOGGED_IN_SALT',   'BDY46{[6k*+M+A7z}yy`w<e@=&6XNs0$!)_:u+Wq#lj<JpFVewIWS#,_EU8]nnRN');
define('NONCE_SALT',       'f[CzXq&Vy|4E$?xFK*wXUF(lV<Fj8-C<r#ZV7Q5L_jQ_SG/!dSAO+]V*F!>Df<$w');

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
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
