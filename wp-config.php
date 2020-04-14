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
define( 'DB_NAME', 'sunify' );

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
define( 'AUTH_KEY',         '8:qNi9%cX>VyBxO|GyDV[t=8R31XBdkq>W@48t_Oi!h,|V1Lrlofzb-VUE&2~]%p' );
define( 'SECURE_AUTH_KEY',  '%KIwp 0(p>~]/^?|exM:dMl(7-|I!@U!4`6O$;[=y G2n-3]JMhBQ@XySi4r,]mn' );
define( 'LOGGED_IN_KEY',    'E SYg]if4Q4@{;CmhP^{g->i]P]}AN2mbc3=M`[g@pNdZ9~UUNR!`>rZ5f|Ew%c_' );
define( 'NONCE_KEY',        ' NEqBv_#TANh!XCsN}F9yjo_G7zISk>:u[u2%nhj$LI/M)2Oq(8z(+nr5MgopVA&' );
define( 'AUTH_SALT',        '*DI kcZOmv>C-[MX!U0I0c7@qvK=:K5O:sSm{.)8k9(p3[0dn;ly=l |:n_q}E=^' );
define( 'SECURE_AUTH_SALT', 'sv(IO/LOSp1GUfh{iD 147y9Yl6|rb+|$ljG*mmbQb#!OGZkFbPMoPS-H?E1rKDS' );
define( 'LOGGED_IN_SALT',   '&wox8j=f=POF1PF@g|>qZtByPrD=XzoqscRe`Ge]u.>[qfyqpV/5U>rX)=hAG;EU' );
define( 'NONCE_SALT',       'K|?(}oTN#sU/!Bb/6K~vZ`?yB<FmuTp>}f@fzVteH%^N6eaqZa}iTY;RJCfgc7Kq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'su';

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
