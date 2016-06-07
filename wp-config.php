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
define('DB_NAME', 'hb87812_proteingrot');

/** MySQL database username */
define('DB_USER', 'hb87812_master');

/** MySQL database password */
define('DB_PASSWORD', '7k4D0!74');

/** MySQL hostname */
define('DB_HOST', 'mydb2.surf-town.net');

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
define('AUTH_KEY',         '=w:G_zpbJ@qsd 7`&6zqt):XFjx<?nAOjroS&X7W<A]s,Rrx-Hh5QwZa%/up$-9^');
define('SECURE_AUTH_KEY',  'JpSqjn`Y6lM>hQ dJin-f!o`?l:88HF;dM)P$$8,5<,=D2`N(t)J}<3A+kVCf_3~');
define('LOGGED_IN_KEY',    'tLsX_EhWFV-7] ^k-F `h )po@RHheX@CzuT5LF$.eEP).)w`U-uG;UQ6RL,/]q@');
define('NONCE_KEY',        'zAU %Lp}z{V4>tOZhrI}6/`KKM)_nqB(Vlt^(4z7E)SM)^pHo3DQsZI czUn(.23');
define('AUTH_SALT',        'im~<o..[t$1`8J;r3Vg`}X7(sLP?]n+^`}Z;JYG~F#7% !_rTes4<3z:.G*G.O7N');
define('SECURE_AUTH_SALT', 'dG<B_20QMUMvB1ClfD`]n1#>_)HXPfg?k>iZt%*7R]z]??eQlA!Lg;`k9[(u{ZU ');
define('LOGGED_IN_SALT',   '}k9g!.@]}AVW)GSdU@>s;t3Q3 rs~U mJ/-Vz`:r=ktL ;j[.|_nV2S{m^t^_gPb');
define('NONCE_SALT',       't%$#fcIS#&WGq#[En2a)6M:3Bu_-(C|7qHuqAk![M AK&O)?ka`mU)WhWmKPxujI');

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
