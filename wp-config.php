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
define( 'DB_NAME', 'gcp-advisory' );

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
define( 'AUTH_KEY',         '<baCt):(m_fo8)0|H8zF{3xbwSL}>=senjCYMGi gA Nec 5L5mr|sn( ID=#{0a' );
define( 'SECURE_AUTH_KEY',  'o}RuOL|3,^F=qt;6,iq M:[Vl|3wYuRY>7|F1WNsg~X9s|hkE:x#*MMpdC8b^P37' );
define( 'LOGGED_IN_KEY',    'iiDN[)HkMl+JA!`B$^Qs<@&57Eyl~#*FAE#_=@k|:@5C,~wiDmb&=d)zkv):ER2v' );
define( 'NONCE_KEY',        'qzs|nJjDX!7kJ!k,Cz><@oz)Ib^,[W:4|M_5%DG4r5r6OA4T{k,F[[Y ~i% ,i 0' );
define( 'AUTH_SALT',        '>0*;DL|,v{dd-akhEV,[_*G)l2%^&Q&uPmM+L;.-y[r@CEB#72)ETt>Q~&zzPcCp' );
define( 'SECURE_AUTH_SALT', 'tIwQ.^NYOco1lw|{8%(Y+{PyIHgn6n)H(;N0p+Oo3s)*b}Kb`H{6^b`Q3j8!(67l' );
define( 'LOGGED_IN_SALT',   '85iY{1J}1S-VG^oj))6jZXbpWpcN/lkl]8%@G}H+Qg>RMHN:U/r5t[H*{Bwh2=,n' );
define( 'NONCE_SALT',       '^~zUs4D2@Bld^jr!a,i%v/eAe,t1f}Fn;|~:MpNYHGD~o~~aTR9V0A7:{;5|fQq^' );

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
