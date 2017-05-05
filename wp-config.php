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
define('DB_NAME', 'newpacif_wp1');

/** MySQL database username */
define('DB_USER', 'newpacif_wpu1');

/** MySQL database password */
define('DB_PASSWORD', 'P{utWIRDD47h');

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
define('AUTH_KEY',         'GZ6aST<N|st+msLbg]5T.G%]6HYz.y`-vib%ED$6vU?j48RUjhl}49QE+VH1IFgE');
define('SECURE_AUTH_KEY',  ',r[{{?L>5[isGQ[KE!xOtGwG>pcL{JX+tOk]S(ZGu7`e6PP!mtl-rJ8]yI_`*@Yy');
define('LOGGED_IN_KEY',    '|r32-^9`cd[6) DQ ))?g8uO>)5w 48No}:VX5:gFw]IuB;tY=,Ddolo{D5i>Sb6');
define('NONCE_KEY',        'nbMB<u/oKT#2ol q>5-=s}J*)jQ<-aSG]Z*];?zsQ?1U/Z53_f$6JjXo;<m_QKLm');
define('AUTH_SALT',        'd&?C:`*A.aDpb}-^x:*~+hR;&<R(j9v,}#,;>CPnVz7#4:IDT(dw94L/M.a`_Aru');
define('SECURE_AUTH_SALT', 'FYQ6&z#p/|0ie[-TfOw-N7dAwATGT(bsPb,{is1[}O7o|qHp<HquI4>RKUv*y`kJ');
define('LOGGED_IN_SALT',   'Y2V+b%{7u){c*C yq!%$se1R]MWj7RU1Lz}c&1y3y7h6z_bz-+E#,CZAqnY!ArRm');
define('NONCE_SALT',       '.M,w,X$Dep8J,S`v&^Tm(R-AAGgCQ]7dpi)X/[.]T)br}{pP=D{.[hq@8I,omXmN');

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
