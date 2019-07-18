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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         'X-00r}*1.ew-A .38j8M?M1CQs/=,]!XaD9$WD*R:zaysw7*)#u7G#2 eUsl}_jK' );
define( 'SECURE_AUTH_KEY',  '@h+(&a6*/omdddP]@)Zeh+&>gks{}H-bii#uP*tLzm<cOnLw;)f-274RGld)?~X(' );
define( 'LOGGED_IN_KEY',    'mA;C2g]9(6rfMYPZe[n7,:n=i yR]m%[lx{i` t}>|.k%==dv=k T<qWF>]t.-[U' );
define( 'NONCE_KEY',        'BO%$=R9U<^oK7I*!Dzn5#-x.JddWl,0`SNrigOT&dUdj( E[h3a${5|T/WUrgU]:' );
define( 'AUTH_SALT',        ']1N@2PP1>QaHmhrLmHSGVesj ^Zz#iV[bIm4eAUyR*UCO])C@9> bovFn3>8a]+z' );
define( 'SECURE_AUTH_SALT', '1.uuBqdnhciWrK%-SGOIWOTR#wpF~-XS Cxgu%i.$Am@.LMm/8Xh}Fpz?rKO{|{B' );
define( 'LOGGED_IN_SALT',   '6as#seCIths>x`Idth6e]}{W??gb`:/;zYmqK@v_}:w}c+qvR-GOC(:=dt1ATROg' );
define( 'NONCE_SALT',       'dTW4v)=rmeQ`Y-uwRjXN%kp?4si(K6>`>G{w{(SMl| ^O5h$V^X{n)He,qDoyG$g' );

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
