<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'C;?I2P^U>@#$,^q2mRBrjd*m^EJO|m6X.ZzKC[N8?|M@bl|Y>Q5&:i?BQ*O]r`V-' );
define( 'SECURE_AUTH_KEY',   'NLM[7l8JzGsFWYT-qVP{MH0F;2POBI:fVw639h;nMVu7&]VEr_JT=~YF^*=&,pc4' );
define( 'LOGGED_IN_KEY',     'cn<dAze2.uCujZg_b<Tkw2[Y}e>pfD<PgL;F<QUK|RqtqXWE{y3moUS/H>S82QjG' );
define( 'NONCE_KEY',         'ymttWqApt[E^#>32[O)&Iv83!e,E}LUEwcyc|x!~8,bP(xjiQE/]6Cii<-8XiDJ{' );
define( 'AUTH_SALT',         'iSH1jzaK*h64b]O?{~0A[FL!evJieqSz]a-9)3yjoF{7[A5LfgGHn/yA*6%vngU5' );
define( 'SECURE_AUTH_SALT',  'p+VUI(qa+usI0Lj>x-5zh=3v|C-&O5wqt.~`VVE4ws_?=7Oia*^Kwf`u]bh]`8O7' );
define( 'LOGGED_IN_SALT',    '{lo$RARt2Db>o=W#s 8hyr JYXxb1`q8.$]Zi$0~ej]92.A`P+YwaPx@/C=3gUPA' );
define( 'NONCE_SALT',        'j5*j:%e2lh)/i|ab(/;P2Ki&69eQnTOec;r7F~qhT?ICVUnrRyf`G*i.iRaWB~>g' );
define( 'WP_CACHE_KEY_SALT', '%nbx&aDP94T9lBMSA{#3c!/abPA3vtFNWThDRql?,!a>v2;#QU0`e6f-nvAqS|4L' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
