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
define( 'DB_NAME', 'alumni' );

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
define( 'AUTH_KEY',         'MbqaC!|=TE`|wQB>L1$`Of/z>BcR6T?D_prFi|f.||zrePY2-d%lApVM[.6s?v$F' );
define( 'SECURE_AUTH_KEY',  's&{o<0m*RpyztfFEBfU?y*wN-<|,z0=Tta/gFB]gYNnN$#T:DRxp>F~wF<r,,-{}' );
define( 'LOGGED_IN_KEY',    'l-LB94RX&fk/_@F7hnVs>:kb578-ez7$:CmQj-,AZBCNq;;GrO*!PWg#oNYa|4-y' );
define( 'NONCE_KEY',        '<D4^3Gdw*/Q!~pNcth<y$y_vt~=Gr>K/>(Xg]Yc{dMQ-eo{?*zTa<CUqkZwV/hTh' );
define( 'AUTH_SALT',        '%Su~s1/p`1^vA{zRG!M&iVoff/HvR+ZQRlWKOFk9^MC0+aiQhZwnQtye*]~Y7T7%' );
define( 'SECURE_AUTH_SALT', '.^G!mEsVMct!@|8+c)e-E[:?]ro#;ddGUn&AzodXLy]uV/G I{cIhac4BAU;cGTK' );
define( 'LOGGED_IN_SALT',   '%wDB)DhJaM+cqJ 4hLQX|yU(]dIU!s-[>P`ER>bL0+Io,Z3Xanm 29u+QMzqFz9v' );
define( 'NONCE_SALT',       '9,5}o.[Nw57@#D~~#MCFNZKP];.~q$&(y~%d!HM:7FQUbn~qSLPHdQv?yAgN~cXE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp54_';

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

define('FS_METHOD', 'direct');
