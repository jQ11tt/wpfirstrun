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
define('DB_NAME', 'jvmdb');

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
define('AUTH_KEY',         'TLhb]hG+&8^,|5iH]8/B?W#-Yg],*6*BQ,Q?n[#0iA> $Vu^BUqaMVk@+TE%jCZh');
define('SECURE_AUTH_KEY',  'Cx}%k=y%^0Z^wH5 ]16w,S6[U] ot2&1%& _K?CyT9vq_54B}>r_HHb.]n;,6RXt');
define('LOGGED_IN_KEY',    'f1]yUS|1R&C79C3mS-(YlAQ^vuf{4Cp(2uBT|S V],x:;p!{lR@?8z|95geb{:1[');
define('NONCE_KEY',        'qB2Km(T33k:BE.p#rN^oD4GTU9eaRXsMMm2FD>oB*BMxA<4@Ff[eIK3b3!p04O%#');
define('AUTH_SALT',        '11G>xb3>-Pzds4<cp-_14!QyLQv)?&SpU~{!@:57}*G1ji;x;`H<+A<8yt]Eyr~6');
define('SECURE_AUTH_SALT', '|I(Ssw=+3P,1]}eDGN#h=8Pph#_k{gWt+sA`*rpKjxw}-`i~@de5rgZ+$W[d.0bc');
define('LOGGED_IN_SALT',   ';m<P,QmF6XCc1yG|V-CM5KRk#_QS&.wS$:.}]3.hvYkJ~#QNTc1sxS0R$$loHpAz');
define('NONCE_SALT',       '%h-,={:(ej)895ny1BM{..Ho-%@y%{#qV+H8 B|aL}9-8b+[RO4l@w|dUl3M5s9J');

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
