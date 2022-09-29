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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nadir_bd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'k^.Jcn^GNbJlctfmKE:Kpqu,^AUM_r!&KJT}8E.]Z}].@JNrB7_,o()/WOmC_[ q' );
define( 'SECURE_AUTH_KEY',  '|>,T_*$)aGikMUNMn$.fFsL(15a=1bF*WRh+;l~s)Q<e#?3]>s)Rn=F#Kt.0cKFM' );
define( 'LOGGED_IN_KEY',    ';lJ~LRz9lDW;yKv}9%Yj_1Y1r&:rDxq-Ttv}#GTb}L?J=B<grbWuSk7XY8$Uf*D7' );
define( 'NONCE_KEY',        '^a=>)bNL9:D>2nx!pz6B&.()[z{$Yp}hG~S/-2FD9%nguz2qCV&ZC-L3Ydb<FAf$' );
define( 'AUTH_SALT',        'ia*A9p$Bb^f&aP?*PO;?O|(.d&~in KyQoS}}(zo9Zz9=)Y~v6B`MO}*+>@xZInX' );
define( 'SECURE_AUTH_SALT', 'YnT#5]F|bav(9QH#C5x]bHe58dfw}*SNX59<]c`H+)nyX#^pZcf{V#:J+p+9</f.' );
define( 'LOGGED_IN_SALT',   '4@N<~n@*Z7gv=lVt30 PPO$<_gov);iD9Y}SGst.e8p7-c/Y|fw2/lZX*E#`U6i#' );
define( 'NONCE_SALT',       'oT.l4m)ps0gp`5[S3.P*3j87ciP.;ddgco_kE#%Ob=VKZ^f=kUU[KO#7]d|.[$^E' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
