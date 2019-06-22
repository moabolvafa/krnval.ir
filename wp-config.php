<?php
define('WP_CACHE', true); // Added by WP Rocket
define('WP_POST_REVISIONS', 5); // Added by WP Disable
/*Start WP-Rocket*/
define ('WP_ROCKET_WHITE_LABEL_FOOTPRINT', true);
define ('WP_ROCKET_WHITE_LABEL_ACCOUNT', true);
/*End WP-Rocket*/
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
define( 'DB_NAME', 'krnval_test' );

/** MySQL database username */
define( 'DB_USER', 'krnval_test' );

/** MySQL database password */
define( 'DB_PASSWORD', 'krnval_test' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ku2,%eZ7^T%Hw:`u4oXOpF#Zkq$|2=?+q_b|XOwd{5x.*vH$z/BIp:!+<-gc7#z ');
define('SECURE_AUTH_KEY',  'l%_,&#fsym9<Hm>F~(GOY#G5]9g>}r*-)B3lvfCsw~+Yv-Q,+lBd-d-sRds${F C');
define('LOGGED_IN_KEY',    '$t:n/4SzzO3}ab>fXm3QA+FlDUb@+Dzuz$&V:`=?AG]NM[H+xSn8^v@1l<e3e-RI');
define('NONCE_KEY',        'dKD5 ^8SEa~c @ .X72xnl379EM#=)_}]d}wA{]|,$ELT:1(1aMXj{fbodl%---o');
define('AUTH_SALT',        '`9cJ33TgbLWr2)f?P9g:> 6JNXM{KLc$<9RzA&,NtlmbK:sQUXi}?-Y.~R5$Q[$v');
define('SECURE_AUTH_SALT', '|u*tpPuv^4$uQ{XH:&o1+ef!]_Amk]tm1?ew5qd)9f`y-!|ui<-G(Ty>fSX[39gn');
define('LOGGED_IN_SALT',   'kIGlWtcx<-Ek^,B^:$$Q+x>W_O?-(i%ztu=HbUX=_p3L;,(7u65(^Fr):ZW0VJs6');
define('NONCE_SALT',       '^vkZN|}~K4{j+JLYVL/gP69-V-1J^kM]SVB<Bo8)y]dYWU?+dsmmi_Hyp.8V|H(m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'db_';



//Enable for Debug
define('WP_DEBUG', false);
define( 'WP_DEBUG_DISPLAY', false);
define( 'WP_DEBUG_LOG', false);
define( 'SCRIPT_DEBUG', false);

define('WP_MEMORY_LIMIT','790M');
define('WP_MAX_MEMORY_LIMIT','890M');
define('DISABLE_WP_CRON',true);
define('CACHE_EXPIRATION_TIME',3600);
define('FORCE_SSL_ADMIN', false);

/* Compress All CSS Files */
define('COMPRESS_CSS',true);
/* Compress All JS Files */
define('COMPRESS_SCRIPTS',true);
/* Turn On GZIP Compression */
define('ENFORCE_GZIP',true);

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

# Disables the plugin and theme editor
define('DISALLOW_FILE_EDIT',true);
 
# Disables the plugin & theme editor PLUS the plugin & theme update
//define( 'DISALLOW_FILE_MODS', true );
