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

define('AUTH_KEY',         'sGRh9RzuFK6O9pIxuBG4c+2J+yG67Uy28A5zTLqmCccXavM828MSDSUkJL/x+hTJ399EfCKWF1ZjfmCk/64/1A==');
define('SECURE_AUTH_KEY',  '+gMc3SV5c7hoh5xkyssOeDTVuB3+5M2sjFTRX7PVNGMmUWuimtfCgUKOp+asKoc70is4XR30/HJLTChZP4y3Sw==');
define('LOGGED_IN_KEY',    'QRlYcVaCHhBo2/U/Dn+gGoGxprWNDs4z01sQLko5U9nCPagn2QgnQrcsuOeAc4DCyJvy2Bc+MLGxydItIV7kog==');
define('NONCE_KEY',        'gl2ofiMBNpi4Z8rusUweEGJEp6B2KVGZ2LeBzcjKl3MdtfQbFAOhKB9LMzHmvS50Fhrk5JfR1788Fbf8RXxKCA==');
define('AUTH_SALT',        'LLBJqiFzayzoEKkD2eQrfbEiyJEfIS5c6h7Qct/Jwi2OrzMb2OjIX5m74Q39gGEKtOYXXU78odWOiQQ4u/Df7g==');
define('SECURE_AUTH_SALT', 'M0q++uSwYn/4zvZ1vJ6kb/b7mmuki9jlp81/EoPJZjGoWL17Ebyun+5/sPsDAQJk793ts98/RvZbC8ecp5r/mw==');
define('LOGGED_IN_SALT',   '3RBvdsY4vTldrKrAY6+OQptrt4026eH56M5nmiUyJUzaTF3ovD76YsvRVgL/6dRuC+zaF87/HJlc0UL48r/EMQ==');
define('NONCE_SALT',       'NAQt+6DfRo9coDE/tl1zJxu+idBSp5ErbXYn6p1WFxBF2xfQWtFajgez4URGHxSXB9ucWXTc61Pjl6Sqdlmbcw==');