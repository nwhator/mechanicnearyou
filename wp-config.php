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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'upsolara_wp910' );

/** Database username */
define( 'DB_USER', 'upsolara_wp910' );

/** Database password */
define( 'DB_PASSWORD', '8527(6FSp]' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'wesdejdw3jdzanwboesa8h86dxacspq9fl2k7n3xnakqtv7v78sbjnj1xbjpfuzi' );
define( 'SECURE_AUTH_KEY',  'rdk9n5l4inbyg71bfrj5z3ld5b78crzzvzbdtenkdgpilbty5tpyx8rpboetdkk9' );
define( 'LOGGED_IN_KEY',    'a42g1fjrxh8baxvgtfpkcjvhohrar7c5aclbcpq1egmnjpxssfxtaamrdnopavt1' );
define( 'NONCE_KEY',        'ry3qgr0jd1k9sctob2yhbf9b5gxsjsw8ik8zhwn0irgrwnxq9jal5xzek8fs2xuf' );
define( 'AUTH_SALT',        'kxnj1hccguw6cghjwjh6msyufhkigvvwrridssw5zifkt00rzqnc4k3bdmzcxgh6' );
define( 'SECURE_AUTH_SALT', 'trnba5nylwgkpicqbzhyol6mhkrcespj8fhnxx7v7zr3z6fdwkcgxxhjgfnqctse' );
define( 'LOGGED_IN_SALT',   'z55kmelvwtogn6cbsq0jqpndfux6axxvrfrijgrkwyqzbgeauxorqmxj3pcfdkxu' );
define( 'NONCE_SALT',       'b9blblwwwc36hacbhxk4mtnui8wrv4tpolm21t1qruusb8deu45fdtmsharmlck7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqo_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
