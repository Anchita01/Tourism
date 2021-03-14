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
define('DB_NAME', 'sharan_ash');

/** MySQL database username */
define('DB_USER', 'sharan_ash');

/** MySQL database password */
define('DB_PASSWORD', '@ash123');

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
define('AUTH_KEY',         'E#^V{uJUSgd b=-$Ie*-AgY!Gnd8~GQkB9Z]x$Gm@^}[lL8=g_i?pyD!s]~+nS8X');
define('SECURE_AUTH_KEY',  'p=KT^Wr42q{p2A6OY %5M=]X>Vct{T Iw5W[QOjD9^`R;,B]m0jhh$MeT~}FGC7Z');
define('LOGGED_IN_KEY',    '?x3!/>H0rAq-1|_X[x3hdf s7YBSrq4+aYlk@Xv_e[=Fa|*[;MT]@}{F,?W|3=M6');
define('NONCE_KEY',        'JmBm=9YSXsj4TdVr){J?&jyz(TLH2W[>j[;0nLxu5BIzkO<UCB``>~Db[GG9z]Ev');
define('AUTH_SALT',        'B_Y/rY5GJ&wf=W&,@0D)C8[c0@=hM7^1~Da-^?t]8q xVB1&bY/+[pZ^3IWbFe)_');
define('SECURE_AUTH_SALT', '@L-T+e5C11-OzWrn> JnW27ZH ~r#[!)BYzi%/ 4?@+RS|TS4(:=$>LqwqL jIx{');
define('LOGGED_IN_SALT',   'tOJ.awttc46 < u7@p70GdyWo dyH])+`;cR?#&G-.DIa4 !J[VrQeJ{-5[p.%>p');
define('NONCE_SALT',       'X*0Ft4gPpaHM&ag_Z}B>ojcU+HwUe>.ge[yN{W {OB=f$i*F{ii$6ohe/hG.nYZ0');

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
