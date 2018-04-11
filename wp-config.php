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
define('DB_NAME', 'blogger');

/** MySQL database username */
define('DB_USER', 'pfuser');

/** MySQL database password */
define('DB_PASSWORD', 'abcd@1234');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'eUjY^zExeK.cf(nK&XF:GsJqX+v/W%M;>(<l/QmZWM#fPMrDB]$%B2i`isuGRm$P');
define('SECURE_AUTH_KEY',  '[ ;C;EnitY,&uO*` jwZ0^-}T.}`W@Z-sZsM5[[q7X8-EZ -#a2H/V3YMIqDF%Rp');
define('LOGGED_IN_KEY',    'opw/>VHEl!AYqD]sejI4Hob~:oV&^H4smh}^k:.|LL}f4O]=H|jtiD:^OhloT{#n');
define('NONCE_KEY',        't:y<D>K]c)LjLNL{@4<?7WWP3zlr[D=PLkn;6pr<p|C&009I8+@64aeAs`o(?trj');
define('AUTH_SALT',        'CGZg<H }#Yj^2a;[)<[2ICpZ/8K~GsYp}#adtL-fz%z{Mvh<~K4Db;+O=qKb-)1$');
define('SECURE_AUTH_SALT', '`c#vZ,f(=kToD m-)CMKSy|mXTmwFSyHga|IkU$XRn<1tQ;#M0)Rn^EY-enfUK*|');
define('LOGGED_IN_SALT',   '%n*G]CBtw6@37@-&[gjmJ.xjW;nTR<De6xP)zSsBwU%*V/W[Dms-2ht=7qBVf9(%');
define('NONCE_SALT',       ')k-%LH.Zr=YQ7g:1:aeI5D~spE!l7*4z2|<c0<vFl`mx]Lggo6qB{C06DWij>#N9');

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
