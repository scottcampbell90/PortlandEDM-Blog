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
define('DB_NAME', 'edmblog');

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

define('WP_DEBUG', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '13|dT8AsLJM9OB#d=Z>2=vJUhJ03/A7/1j32+%Z0/5WL$T}<Jw|;-1Y54,@ih[:o');
define('SECURE_AUTH_KEY',  '@{vovW]-Dl)Mvy+T>bI_a/^I0V1EtKM/IJ4|>g{+:/M^fL{?WjT|hK=cx-gD9N;!');
define('LOGGED_IN_KEY',    '=~V->sYZrb>O-U}H.T)I<9,}e752Y7?.mhsbWX3v=O(N|loAO=6&b}6mW+G25|l1');
define('NONCE_KEY',        'U@jN$n;s!YlL0Di3!{1JLo{9~MQ(_R(2AU*b!*0 amf@`+wxo3K@o5xhN7:^AG.6');
define('AUTH_SALT',        '7*:xG|M*-vf<&KJI;Ss&!T2 o}`Y] H%/4L[L2?!?#p&p4]IVz-[-k_Kq4&ENiDI');
define('SECURE_AUTH_SALT', '|EvT#W6N*+#$jN<(|fgfx0l Az${I2|(&cC@ES`8]O7|l;rW=cR)y<l3m?-}3 {D');
define('LOGGED_IN_SALT',   '@!;e^d]C~<mT-25cWV$nwN,{GA,rT!=<ftXddiL0fxD9-rL}^2,gJn1S9TLsKZzT');
define('NONCE_SALT',       '~%k4/e_ABpNX0Pl@c9(>0IG{$]_geHHXr:*&`bewN|WN%VqTDe^0``L|Ut;+MN)@');

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
