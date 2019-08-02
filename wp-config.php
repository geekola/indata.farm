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
define( 'DB_NAME', 'indata-farm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')U,;3Jg]7D4MPi%(BbNGAtx9C.mZ-aQ9[bUkhu vwf,(eLs|uE qj>,xe3{GHXE9' );
define( 'SECURE_AUTH_KEY',  'e.9#>MWhKvSsE>-zQDr!{2:HIF)k59T=M!mB+YQ+G)i;XS(,Z~c~hAtG^HJZs$f`' );
define( 'LOGGED_IN_KEY',    '.%NsQ(=HuSwe2>Smm(TB*r(I|E:ZZ4~s/`_k5j8qz|lGL+|R &:I~w:@LNW.LLzp' );
define( 'NONCE_KEY',        'N<o5ir5b=q^s}R,JETdd*^h#%YdHX3%!ubz2oBLKQ7X8,7n93^qE8#tg.FK.4+13' );
define( 'AUTH_SALT',        'g^*f1VcLM}V&p]G;R[&1Mq:LqXW/_kp9^uEs%[.{@b/=HIjeutYAPuf-R%w)t./m' );
define( 'SECURE_AUTH_SALT', 'n~YDRT(k.T=Nm>h{0va#DeikwbM9^ZLADPV^8,SZro|,GdVM8?4S)}dj|^Bu!BCC' );
define( 'LOGGED_IN_SALT',   'Q$>DHh5Jn/q,0f|{6U[J5PnK(oYMfaH i_qd7)I (:<>Utj vXsXGn_]y29c1,T>' );
define( 'NONCE_SALT',       'G*F|--N-;$u4p$*[jQ*BsrraSg?/8~D21JW;yH7e@Q{olEEA4/Jo1Dhsrm6z5J/$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
