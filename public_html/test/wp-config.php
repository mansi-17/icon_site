<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u419687700_8ncAm' );

/** MySQL database username */
define( 'DB_USER', 'u419687700_YLt2g' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FXPL672vC8' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '#Wz2u!}>AB$%bSu3+=gott[9{*^!$1-Rp(sa<!tCIt(v=&#=D6oK9y<n .Y)_%NE' );
define( 'SECURE_AUTH_KEY',   'nTHv.X5kBn~,?(p~hrh#.^62z<Gw^iASV+qNMj6p=Uc7emrTYmvsW<#9}MbbgbG/' );
define( 'LOGGED_IN_KEY',     'K<fv*j]>V_px-%b/s)9)905)w|:&ZzjWyHa5s3)c)libUh<rk!{Pc*v{?+,~ClV@' );
define( 'NONCE_KEY',         'h(x/10rcam3AonZHvhhoq>w.sXGS6-JlIeBv|bir(mzgE~jYc#=|@5erJZ`4;-/u' );
define( 'AUTH_SALT',         '/gs!yG3D},/ym*_RfL=Hq)w~aMTBe~}!o+n>2f]F;ckDfMnZuTx~J,%=enGqC:u-' );
define( 'SECURE_AUTH_SALT',  'zaGkFRW;8vv.S s3!z.Tg=:rF p8$U]z(}K3V!3:lsXLR(@vmLcDw4A/8A8h%goC' );
define( 'LOGGED_IN_SALT',    '>b@EG{s^T4`/_@%d|I<8/ p&=zNL:[}BQR&NaIdJ RKMyC$5x4`-8q()OV&DU3CL' );
define( 'NONCE_SALT',        'LO~;KE+6n&}|Gb#fQ>s d(a/or~|qxkz1xsb3Kao<6f ;h)3_wxTU4>0*64-pw@C' );
define( 'WP_CACHE_KEY_SALT', 'HW17J:B^tuvCX[t)!omO`QfZ(out-%j|xe&|E4=;;X{8G<rIh6uJS$`zzWS6W+0`' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
