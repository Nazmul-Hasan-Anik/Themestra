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
define( 'DB_NAME', 'anik' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '=&3BMnKh}Z)YcJz];E/Wco+fk)czBz3su0~P9|l%l+S1$1r~iq_p`] 2/gP GVIG' );
define( 'SECURE_AUTH_KEY',  '{h-uS Jr5L&^5_#kxxGy*C7LNkZKj26n`:g1(Gct<vcjhul~)vRP[LWt:U#`t(fc' );
define( 'LOGGED_IN_KEY',    ';Y]g@lZ5T.8XO]YpRA!s-0L$DryL*pl.b([sKlp+r`]-o.kuR&Di9VzYawj2631p' );
define( 'NONCE_KEY',        ';:`=aP_5$jmW|c:3!z6w 2Pz%=%--j$r{`CfP=S/r)SYH00}sIIOrAjQC]8s8gkP' );
define( 'AUTH_SALT',        '?$zG<^p_PYRF&Er(!xyF`F&Gx2F33s[N04?F}k5@~i;OuX)~S|$c;mppBHGz71 h' );
define( 'SECURE_AUTH_SALT', 'QO9gng-4fsN.l`P4[McsxR5+`94D$Q`B@_X60lsbaq`<qnQFD]984eMnUM.&S&CY' );
define( 'LOGGED_IN_SALT',   '_CORhCAgiQx1^@E,dQrm?U$LBL43,:&%$_B0j7/D4g<p>cB*AviZ=(Xh1j}K&d}r' );
define( 'NONCE_SALT',       '4U[hWd<kB1VFvGSubTnDR06v*,9}/iH~O3awaN$TxMf-#b69/vzQC[Z!d%qTT@1L' );

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
