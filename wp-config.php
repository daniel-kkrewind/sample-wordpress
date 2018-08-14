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
define('DB_USER', 'wordpressadmin');

/** MySQL database password */
define('DB_PASSWORD', '123Kkrewind');

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
define('AUTH_KEY',         'E@i&s+!O(8:|9#H)kC=E^X^S*Jl~4R1[l)xbBTir:)[psJ6L+tUVieRq7%L,|/$>');
define('SECURE_AUTH_KEY',  'NB9liX;+ro[J{3&4MOwdPkj-qGCe=&Na(5U}i2!mX97c~x<-7OGG$I>b[&%T!Zl%');
define('LOGGED_IN_KEY',    'tb3j4!b! QW[GHJ9g<L4c2NTfC)vp>|Zmo;+-MVhSr+D[CCfJMI<3TTMu!KF3* }');
define('NONCE_KEY',        'H<UUK=T41|2R;^Mu2u!oY8{IK2;Q|}FEM8S+$Ptt|3o|#G+b)V}h5;Yt+.-k8yG)');
define('AUTH_SALT',        '7<{%B2DMiJ:;i>pb}F]O$!v4a]Ov(I+AqPFwk!]C|gqJw2A6VXmvB+;GJ6NJsh<?');
define('SECURE_AUTH_SALT', 'vbNAbnBYA<(nJ_qF}o]a)WfLV 8LO/bD:,C<WS83AOG:#DC1`-p--#|aA9$^H_Q|');
define('LOGGED_IN_SALT',   'G=}8Fg<`BuXvy:+:M=R+?x*.Ga>F/#q=V$Bxvwx+O[KMB*yaIM;kX-G0K9/MChUR');
define('NONCE_SALT',       ';I|[l|>|,c s;Yq~I}^aN +PZvqL0n)kH)!^$#aMkC`+-`+LYy#e{f,L(Tx|)b=V');
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
