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
define( 'DB_NAME', 'data_css' );

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
define( 'AUTH_KEY',         'vas|RL*mc5c}u5O/W.%SJ{hs=usi%D}~k=&G-(@gPPiWT1u2%3H@([l]-b4 G1[.' );
define( 'SECURE_AUTH_KEY',  'T~Xb%{CL/0^(-`Ge:<N2z`fo.iDi:Xr*AGs-+0hcqi Z?6j!~.Sd=)0A-1QY1]3e' );
define( 'LOGGED_IN_KEY',    'XpnQ{dg(Vj/8M%fq1h}- JxB`b}{L1)/VPk;~?0MD0bBx-m*Y[3V!P?,>yi?v8_P' );
define( 'NONCE_KEY',        '-Jx6UA|KV,*o!dEfl,iR$_Zd~JX>%]rc]CMK4)jtAp{n9iI+yMR$B;9C6*Yq=]NV' );
define( 'AUTH_SALT',        '`h4=W:l$cko,h&PCe|{0Z%fY@FRi4,UwW@ANOho|!qt#G~E;d]>E!4s&ZIMziEV$' );
define( 'SECURE_AUTH_SALT', 'TBudJ)uz]{X2;iY!02|ABXs4,9BA3qi~(323a+$NCM+T@m}fx+-^n8j^#miLZS;v' );
define( 'LOGGED_IN_SALT',   'p>&Mu`r1hwES:S8vYo1xS|_`eoPmX%&y;}S)6}Bwzn a*Nx  ~nu!bzSl?|R4h+o' );
define( 'NONCE_SALT',       'yEW%sii/bzW+~PgoTq$4g!,BFljtq[B48l|knhST0Z(<TSB]e<V7)*Kl_?dm(lMY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cd8234_';

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
