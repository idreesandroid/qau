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
define( 'DB_NAME', 'ginesconst_web_db' );

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
define( 'AUTH_KEY',         ':X*Uv3E})S(`Kj5(rF=*f*$6KZfzJ)xJzP_%M_l;kgBi^CEw%R@<]NkO8w5tx5[_' );
define( 'SECURE_AUTH_KEY',  ' 8uM[~r=bqtgu_lRMff=L=p^MQ]&?}hq!4Jn0s2S8Pdv7J;DSZEMD:9V*5*=:YnS' );
define( 'LOGGED_IN_KEY',    'x@5LszVg;C|zhmuhZ4$:~+)FNrV_u7()Ww;^<QvSpK}2mqi768J5!b8BskCCj4YR' );
define( 'NONCE_KEY',        '#fS/$YWDEB(sr?S`uda 0mf1k.-]%[nQeBn)9F$i_f`oxR^tQ$XjwKr3}m{E4PtY' );
define( 'AUTH_SALT',        '@wf[{}<`@+|Uyfydvw-mMT $oAZg;hQ)Y{F9!5|r^kdJdb|-jT:vmX5~@1[SUaMW' );
define( 'SECURE_AUTH_SALT', '-YPg^sEo@XKS4Dqin].iOAC}KdK|^q!+cK*_zVa^{[[f}-*-Jd5vM-kct;<aVM08' );
define( 'LOGGED_IN_SALT',   '52vlM+ysIR4o]9l;pv8s}}Bt}XBIm:`2+5nfh*]rJwZnf4^aoU9_umJE{o@Ex4k(' );
define( 'NONCE_SALT',       'CQrp`$E^Nsd/03|kHTy_UBFGh,]Qh$q,PzvPHVrO|^gPtRP2|*5Ycz }(0X6SE^a' );

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
