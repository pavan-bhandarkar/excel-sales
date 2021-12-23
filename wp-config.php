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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project4' );

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
define( 'AUTH_KEY',         'U8+0fNS7b:# |?;6yXP`2Eo%hd/v7?v/Ewg:i#=(wk.)NxnVg*oen4fR]C{aP~:B' );
define( 'SECURE_AUTH_KEY',  'RLXyoErF(=2i=~3?OHcw9~*:v(%!>9lWnQ7^MI1KPrg<*kKGLe?>#S834[@c #~_' );
define( 'LOGGED_IN_KEY',    'WlU{-Lfpz/euYa=IaKO@LS)(<PNykvFc=e@;SnI^D[jav/qGjcW~;[9M$+|>YC-P' );
define( 'NONCE_KEY',        'rKdGEe:luNL.^wd%1Lb`d.& 9cLIdCM=.Cce2UcAW,i iY6?kf7A<77}]2ElDrAK' );
define( 'AUTH_SALT',        's!fZaTG>%Q;q?BUp%EL7s(Rip1lW-]hsX~^UgGh]xWN:y.OX<3a<,G$2s_D}W}xt' );
define( 'SECURE_AUTH_SALT', '&>5v_R$siElovIUh~-jbX/U!.OShd83WC2m#p&R`X5fr+~yyXDQmO*sW-8Ts$}^K' );
define( 'LOGGED_IN_SALT',   '@:pi&j$hRde@!72#zfBWWIi3%Fbr1nO[E:-{YGgo}M)RYdY-iO6{CgA hN9K=5qo' );
define( 'NONCE_SALT',       '8dmXCZl(TChQ3(W5^d$XOn.F#5-8A})qYP>I0b@[FZ1=Ffn^b6]wWXrF9nSt49Ur' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
