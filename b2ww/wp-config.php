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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'devdevdev3');

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
define('AUTH_KEY',         '^KDy(6SFbul|ya;+n7fUP|,^;Bh<^A4f%Tk+7L9AgH)#m~Mo8[XgQ7wC(;6++e6B');
define('SECURE_AUTH_KEY',  '%;;H{KI6togS|{mV8@,(+&:WZ#vJ?pCv65YB}/%ZmfWOS_1M7wl1r,e`uQ|yykZu');
define('LOGGED_IN_KEY',    'Y)b ;:T@^;_%0p[=B>NzzNDv+NpA=2(8+AtTt9-.[:sC$_ZQ!`k6kUJp~du<<e--');
define('NONCE_KEY',        '<iCb$:y%e w4ckK6;r/t;=3>wcc*t6J<c#ALI.w.J?} =8~n)QaO8cRv&[L}?q0n');
define('AUTH_SALT',        '3Ewe]}k%k=c4WE?pT[jO#J|H!Zq-Mz0.6N{yKK W%UOh(mm#(A,$X._!0-Xq O<;');
define('SECURE_AUTH_SALT', '-BN/j-Px5f`LID+0Za%Q+z[Q?9*Y*9{YZl&E&ffv4e?]/A,`5O`{%$6Yh=[+J[<h');
define('LOGGED_IN_SALT',   'vYrZ9[iIu,k-ktB=MKL|5~~be<Fr;9n7&(A+)V2Y={Pj{4<|^}u)qzKHtUzsOh}v');
define('NONCE_SALT',       'B-sFcw.`q|;NFi$PdV<)G>RV6uI}2F>|GYi9:8$=8g.tP-c.W%IAM6&NY]T+17wS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
