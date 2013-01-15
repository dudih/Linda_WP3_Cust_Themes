<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_db_linda_com');

/** MySQL database username */
define('DB_USER', 'development');

/** MySQL database password */
define('DB_PASSWORD', 'MJdBSFB746wM7aaK');

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
define('AUTH_KEY',         'TgU^IeevL@OOP|MB4&u}r<g0=X6uK]`Shs2SR9tPG~nB%IN 5iuz}x+:%-w]fhka');
define('SECURE_AUTH_KEY',  'D9i)_=5RVE^Ia^q=:_>PUXgfJ3&~}~gZxLFDF|,TtaK,j8$pmbY1F@u5B6{F:D&h');
define('LOGGED_IN_KEY',    ':h~120`#O5bfKc{`{Gr6TKl=)$^o|<}8}5?23XRj:+]zJQ.MN^,92-jekmx,Vn?S');
define('NONCE_KEY',        '^Ta!y]KGc&+aqrNW+P3%-lvmeb_2Z_d._8kTh&:SRMy6>zei_moB*gx*06IpmN[n');
define('AUTH_SALT',        'Rc`0d&)3Yn+;l#s$,la~XcXf6$+~Tl|6vY?IA~Go/>E5_cGTaO_FRYw0<Scy@$ t');
define('SECURE_AUTH_SALT', ')&OOq{hie76)BvD;v5>aV]Gl1jU{E&qZtGYcoS!Jk:`-xGM5200MIp@?7CqPIRv5');
define('LOGGED_IN_SALT',   'NXTL?bZvy[d|PWb?Uz{I7o(.TO{XsOH&o35DKO2x3G%@}4errG+rChxtQ%AY?UDg');
define('NONCE_SALT',       'W~I/ad$f^nAXJFaw`U|Mm!OloT9IDS< &< u.A]>e732uBNEvwP-e/O02 :0b?{^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
