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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Project URL without trailing slash e.g.: http://localhost/mytheme/cms */
define('PROJECT_URL', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(S5|e*VB$4a_*)W|ea8]-SKuS $aaFg+kAdqRT7p0x3a;6kl I@W81i{AT7q6ey$');
define('SECURE_AUTH_KEY',  '}`0/-gT3pWn[VjlNL>=,q%1hLmQI3m mAHL6Md-[z$CJdqk.ifbTpH*+<W9aW/7/');
define('LOGGED_IN_KEY',    'gq,V(0X O[54.]uhxTi#$cD]<)TminShGP)o L**$1?e6yl%|9,O(S$~.JNjomrJ');
define('NONCE_KEY',        'S>o=U@`uL*bSDiUc<<Rnk[-#K.!tnH(4=wv&t72 YR:hzwl iR1+%#QCpM+v)bVi');
define('AUTH_SALT',        'TYdP] NLqw^Up@,ajtL%weziC-B>c&l)l-=ETKA:_mq)X(#Eo0ZLE*|GQ@1&b!-&');
define('SECURE_AUTH_SALT', 'VD^rS1>O:x>NaMQ6ovxrbk=&eGkJNA:J%LgFkG:GH4R *P|GJ]x#`R!-2Pdq^ 0(');
define('LOGGED_IN_SALT',   'N*:U*4]+|p|a>G;:aQc*dLB[|w$u2H-^(-,>KZ O;el88mMzX++#1T|X0#F;1+ef');
define('NONCE_SALT',       'AZ06mSI;fa1JofJwdin`3U8Rl-h|!yH pU&o-)ZY?|N_Xg7{|K@H:SolicQ@e&~d');

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


define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' ); /* Dont change this. */
define( 'WP_CONTENT_URL', PROJECT_URL.'/wp-content' ); /* Don't change this */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
