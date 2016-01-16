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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'v/mF{?kZe2jGQH<X|aM$QO9be`?rBl/2Utf*^yW}^7+J;qHV&;-dHa,7_kn{5>S=');
define('SECURE_AUTH_KEY',  '&GS/:Y.m$ku#Wm42O3[@ES|+bx}q9)biIETl6?C0>+-%|W|#z=ObcWF9V`yW+[w:');
define('LOGGED_IN_KEY',    'Ghg+-*~wa RWWqugf}WwWFgCOqgvc582 =3%8}P^@ebAtj6XIV3 #c1iR99>x{5o');
define('NONCE_KEY',        '|$7lDHZ5 n:NgQN`OLYOcN>$p{f-vF6~A`2+1:|uAi V5PQ@*>n{+*732E~S0u:4');
define('AUTH_SALT',        ';tJ%q`Y./y-!j86.;_d}>/4#;48$|Sbp$p3 UlT-IRhd!)Bv1qw E-O0tbnpJu=2');
define('SECURE_AUTH_SALT', 's=Yp$m}Axx!Wm]=Ic=_U:Aqf$7Rfenc|wO~@8[vBb@qkO+<9L}r7:nXjqQw6-yxP');
define('LOGGED_IN_SALT',   '$bLcI?W?3Bo1Tz(Q5qvUR yEGJ.+g{.hd7G*Z<:I%L4mnHvd1O_.WV>3B8 ZCE$<');
define('NONCE_SALT',       '?1Xh-Ee:r7uxG6!(a2,h,7NGafW|UtagW6bFYa[olrGM|tm}^aDwNW-PRs2q&K6m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wps_';

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
