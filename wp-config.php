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
define('DB_NAME', 'finenest_dbinterior');

/** MySQL database username */
define('DB_USER', 'finenest_JadIn97');

/** MySQL database password */
define('DB_PASSWORD', '&l?xgJu~M}Dm');

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
define('AUTH_KEY',         '{RvC=l-[SX!EO8*%!G-71(ztLN(sh0;QYEWu2bu;f++,}bNNpie[ly/iS^(=R30b');
define('SECURE_AUTH_KEY',  '-$>b^Fvd1z4C9;X>~ve!%eJ@xN2_C;^HcNrUJQe81;K=2uL^/A62E)L>[L~vz^p&');
define('LOGGED_IN_KEY',    'Ij6;>BPWcC7P KeKO/}sGRFQ7Y7MPSv3{#2v+Gpq|K|s=joSQ?Fd%|oD,H$d]_Z~');
define('NONCE_KEY',        'mNVCpfk3t1|,#feN:~+qqxebp.d9]L(Q*@aqXrC-^1,:#;kd3(QfRL~{a!/6qiA ');
define('AUTH_SALT',        '};q~na|&ke=Uc^d.6SI|->ClE)5aF#Tm[H*HCqr4htmB-L NxXMQiys;6EgsPpc=');
define('SECURE_AUTH_SALT', 'yg6O|H=;3-#!R[blW$3r)>vO3<r}7xHuv1:z3wVSR?X{=sco-Gk6Y.H0&H$|Dc6m');
define('LOGGED_IN_SALT',   ';zS@E 8w#mw|]kIF-&fC}pJp%@V#bbt_z!NJvC@>r~t-5Wu<tH]|0ue$$!iS35HA');
define('NONCE_SALT',       'cgXn= PAp,Q0^Emxv-CS*w5hkvv-$)>OJeKf@#H_zhhp|t5F^3}r[8sTV(T:vl|t');

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
