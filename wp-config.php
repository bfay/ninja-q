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
define('DB_NAME', 'byronfayDBntciw');

/** MySQL database username */
define('DB_USER', 'byronfayDBntciw');

/** MySQL database password */
define('DB_PASSWORD', 'XhT9zWLqfC');

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
define('AUTH_KEY',         '<jyny,MXfUf<3E3BMu^{^}Ufrfr$FQYNY^}7Pam;9H6Hp+#+#2Witiu6HTHPb.;A;');
define('SECURE_AUTH_KEY',  'uPbTbmAAMu^<9KW~[~[5dp-p-DOWKWh]5H5DOx_x_;Whtip+DPDPa_]9NYk}8}8');
define('LOGGED_IN_KEY',    '8}ZCN:8|TjbuAQMb>73fvn^MfYn3MFU^@}Yr#6m+x<TPe]A6Lx<.2euq*PIX.6Eq');
define('NONCE_KEY',        'zYV|80Gs|@:csk4JfuETMb<A3Iu<^bYn3IFU^>7n$v>Uj_Oeap5LDW.2]Dq*+HX');
define('AUTH_SALT',        '$Tfqfq$EQEQb.A{7Ir$r$>Qbncn7I7JQy,HSa_;9;9it*t*]SeTam;9LALX*]*');
define('SECURE_AUTH_SALT', ';pet2DPDPa.;.;Aiu*0CKs@s@[Rdodo1CK8KV~[5[5Clwlw_KVhWdp1D1DOt~]BMY');
define('LOGGED_IN_SALT',   'Rg0F8R@}[8ogwGVNd:C5Kw[_Rh$brjyIYQfB3My>,QgYr7NFU,4}Br!6L+u.Tib');
define('NONCE_SALT',       'lC1DOw_3FQy,,0Yfrgr@FQcQc,0B}7Jr@>@>Rcocov8JVJV@[4Zlw9KVKWd#1#1D');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
