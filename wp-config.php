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
define('DB_NAME', 'projectdi_dbtuky2');


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
define('AUTH_KEY',         'xGP=:]jKP1;x &-XDebKW+P+Cozt#5b*kEVnTe^fi{JRANy`!f<5#2pJB/,bBEF8');

define('SECURE_AUTH_KEY',  '-Ou*KbZzg=ofueSQ6q;U|VR]9dH[*UonAC<C-H2+Sg>qK}t+@sUkjVP{sI=JPs_x');

define('LOGGED_IN_KEY',    'm@jfr?X AQ@/wH6R#9`<.:hHwlxG&vPZ6654kqgrfS]{7eJuHQ/9=)Q_m!L/qahj');

define('NONCE_KEY',        'RQ/E-%#H];v;&t[NB:wOL:&Po3jsf4]ZS}3Y2;55PMa$&w%PY;yRC8~hRFCN;z)v');

define('AUTH_SALT',        '7_oB[0ID{SC$c`S~$y*eF{=lYun;Kzj4N4mJy/|Zb b=Axz;uE/;Mw.0UG6<]L?E');

define('SECURE_AUTH_SALT', 'nE{Rn)*OJO)o:X!e3V&c6IsWmA&v6;W+@4vD@BWn 6,]UQ9 Unqs%=uf[c?sLo|B');

define('LOGGED_IN_SALT',   '=)ts{lR>])vbs#]7cY$<ZzLs3C&Uw$LxbApr-mG;bLS9N~HLMsuib?hoI#H$ZC}c');

define('NONCE_SALT',       'q:t2t=9w2u+,$^O/-H9W]^CijT3~!{dW!}=033_oB{<%L?Q4m;XY,s+8 :@7O-EJ');


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
