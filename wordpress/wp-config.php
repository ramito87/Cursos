<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'Bruce1987*/' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'qbE3TY:B$`X?^H9tzgrn(ag`n 7JAcHym-W>QG`~=GEqv@IA#c}LjaFy:;P|Idu>' );
define( 'SECURE_AUTH_KEY',  'Zs(D+N:F~iVQgevS}Bc*cW~zp>X=!TZqdx)x4E2X/X-?jBdQkd/Cy.yt$;jrm5fK' );
define( 'LOGGED_IN_KEY',    'C~GwJ*c#mzr&t2=yOo,@#k1PHKLcjX5m8}>gp5U<p<8L~rw1;3ES,M47Es8-f#_?' );
define( 'NONCE_KEY',        ' EvT8$p5}W7=GS52&I.:esv5=y?c!<k+<iu5 #`3T: 5IsS&[{2jMoSJL&NGGAYK' );
define( 'AUTH_SALT',        'xvj]t#Jok>.dWuQ4/A&{.Wr1Sm@>I69J-`eY>K~Z!pwe_W3rVB.m&B0b76Y*=Oog' );
define( 'SECURE_AUTH_SALT', 'NVpF`r}O:|]Tv_bQ^*El39bZ%|3l]!iJ>dw9@oTWW)B/JXs.8*9yb!(mqe|Y_Nu ' );
define( 'LOGGED_IN_SALT',   'qwio(hl6dt5j{:,:yFTmQkTJYmX1 0&%%Z{&A;ugo}eyUN}DSz8R%4h[k;VRQT~C' );
define( 'NONCE_SALT',       '4uoFB#&+.F6L!I !c{9Cm6yB)Rl];p(Y.$O,3YB9muAcQJiypaKo3@)>  18: .X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
