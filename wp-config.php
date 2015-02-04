<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'altitude_2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'aUHE;hkh:CL{DL-;OrX8_2j-%M,HFAfg4)k+jn^K:k+Qd%_tAxkB9wX}!ei~_bZ8');
define('SECURE_AUTH_KEY',  ';S|o9C<`|-+;uki-.W8]Q;31+I*yHwf[[vGwMp?|GW{nC@zrXdln,*!+xj$z=O*5');
define('LOGGED_IN_KEY',    'Ql T|V55Oelq#kHV3swHq?Pw`i8`T=HrJpIr>G>]Ms5]fnQ^}XLv|2LFJcR])8{_');
define('NONCE_KEY',        '3!>]h&qdrg-qEF~k_d)Snn<{}8I.;-&7yR,azda~,L2#3Jz5~|~QvWoe|OWx-:7y');
define('AUTH_SALT',        '|4K+X-KT!KQtPiwR)Y e-=rF=!3Nf?KH)REi=&~(*.L24%qB4E+!5sdu/dx-<+S]');
define('SECURE_AUTH_SALT', 'd|c8tvG[rd7H^S{>hk&.rExJ~i0BwBgCHm!A(U[Y*DpDQO9xh<8N;rX:ykl-:YgH');
define('LOGGED_IN_SALT',   'Jf<-B~RZidJ0:}ah(.M@.g*t79T@::^@Mg D=4-DHWQp9-`#1A,X@)+/]USIdio|');
define('NONCE_SALT',       'I;RE@[R-y}7&s%L+=;sR_wSuO82SZgQW96HVn2;)*>@H0=1WqE0@oz3Pp)IO2ep8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
