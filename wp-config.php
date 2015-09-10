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
define('DB_NAME', '15a_wordpress');

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
define('AUTH_KEY',         '}<1;WREZ+7>ouTC?&(<lwYC)4?2]eY){Nzx<HWT}.)D2T+esf-[j4IAM#{9G+9Z#');
define('SECURE_AUTH_KEY',  'es$n@hxHq=-T5wF%Vy~`kOgnX+B-_kh{}{@uUrmj|cO]sll7mDnUZvYz|f+V?dNe');
define('LOGGED_IN_KEY',    '6pNI>V*[$|=.?-d|=d VEI[!d_*:8.k_*A=_a172*+ef_dihFSSf*Yeapl*U.L.*');
define('NONCE_KEY',        '!P&+jM2Jo),|DHy_JWx.eG8MA.PJ)Q+DhzrSN{j8aUYsLI||]zF-P_SH_Es<`MK?');
define('AUTH_SALT',        '}>?Gnv:JOhGK0Y6b 4ewJzeShSC)XHwgg`WB!pKg!4J*VI2psj&mA2jEi+luvU>e');
define('SECURE_AUTH_SALT', '[bTdS> klBO0s]Si}%(mfa9>+=9;{x9tWZvc{E|6mgyUyohsY]*j#.MR{b(CLK`c');
define('LOGGED_IN_SALT',   '@-|o:,T~+gda2=%,p+f_``uj3GAg@+Ct{Yfp$7{SG$j$JjL_DPaNC|_X^3Lsdvb1');
define('NONCE_SALT',       ':kL|STL=-m[4{ p`3Uwyi,W81pV-MOk[YN__b< ;h4)e?1EZ94{X~)q~cE-2rsW~');

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