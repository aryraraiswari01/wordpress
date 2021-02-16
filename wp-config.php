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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'm-#lIPLY|2su+:pRk,cJmzdar&T:Sg)nX/aAwb^j(QhZ=DBoWX`_@80qo#7q+SA<' );
define( 'SECURE_AUTH_KEY',  '[lMg,*.Yle*zuJ}Q4fP[2VXE8t_|ggIVl@{qnK_&o[c~s-F~p~Qxo~Bc@@E3B70k' );
define( 'LOGGED_IN_KEY',    'kr54<+K4)UcgyV(+PzW&L7lH0oi$O//cb.NPE</BO<Tr-+sIm*3c9$ ?Zh!,/5V5' );
define( 'NONCE_KEY',        '*QtA)I2S2iE7/qx9@yI?[O6n+G,nP~gzDi/=Q;~[;jIC*m;$LBJuv3$)|uPC<A{&' );
define( 'AUTH_SALT',        '~Z;S=ZFMw4TY:BlX.`Q&kna[K:4;Y>F{J<RY=S/l6qasS>sTEFZ-s[&;w@v^1?H:' );
define( 'SECURE_AUTH_SALT', ' t t7w~0bq-(#Yy7MU;s%1iUr&d*dx.P[ZwX5y:NI;8DsUP>>Ey}cff0cL#P_@?y' );
define( 'LOGGED_IN_SALT',   '^zD,}:@Uh+yo~lp^1u/ y^SSGYKXKmH}<%!Jx#d;,Iii:=wH0?0;Q^*D]uaKY,2q' );
define( 'NONCE_SALT',       '7x%eCpmUi;rrX8DW&?xqIXNiD,{{Uj>61=Os]jchM25YW9nai%Oj=Xm>!BcVZoxp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp34_';

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
