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
define('DB_NAME', 'sanichauff');

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
define('AUTH_KEY',         '/[k,VALW+U=&Mws/t8i@?hv$cKq/H_Q7Ll*|p~h3F)(*-p[TC2e#PdALG{Oy^W>F');
define('SECURE_AUTH_KEY',  'T*)@=E5&]#6L0x?(WRm]VBVY%*ZaD4|@stknffPHziU TPefO7Q5YcDM%^Us-Hr9');
define('LOGGED_IN_KEY',    'l0vo. JxMP96}}Z`X#I|z83{_sC4Bt{<}i(F,OaUfD:7y ACX <-?L![t3wLHtX2');
define('NONCE_KEY',        '%dntAX0DjOlgY0*`Pyo7@q&>$B9B*<nclu]j/ZIs%|mbT5XskeDRz4`#%G+(kUAG');
define('AUTH_SALT',        'Scr<zHJ/%5rPNC{h!;|wh^}wMYb52UX2i6dqiWw,2l{JPNP3Ac(m7QUn$r0E=ta-');
define('SECURE_AUTH_SALT', 'Xf6U BK(0$@`5!r=Kz0I!gg5D<3NK?$b[ GnFyXkTbi[|aJw`<nnBc%d/g3g -*]');
define('LOGGED_IN_SALT',   'xXK1Rq5D;U&X9wm~yc3t{%jaAIM~fj*]Dy8#kQd.,1-Q;p2R68sSbxNQ+AVrj!XT');
define('NONCE_SALT',       ']UirRX#D:)q Ke ./;u[d&)qm9Md(Ez2BE,8H+&M$8wNDc/Nl$Lvg,)V0+GyGZZi');

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
