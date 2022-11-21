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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'belfiu90_wp434' );

/** MySQL database username */
define( 'DB_USER', 'belfiu90_wp434' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S09po!06.4' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '9kiqr89dt16fuygbuqxjd2mclpdsrkoxk4gyify7ottzpudylxnldoqlqv7vt5yb' );
define( 'SECURE_AUTH_KEY',  'uzzi1xzp5evy6mb1rcyl4kybrfdczqkc9p1fgvby2qhxsb61kqs5fslu00xrxlqm' );
define( 'LOGGED_IN_KEY',    'knqbrxut2kxx2kddf3xx9de0lbyzvg1lx7uxcsdwct0e9u4z5adi83btc3siyxur' );
define( 'NONCE_KEY',        'p7oboo4ae0zdx0elrznhsnmwxz8olvgmf3ml8bjfuehghu7iq58apkrx9yblhcbq' );
define( 'AUTH_SALT',        'gm5wobl0zfdnqqzevudgwuwhz8cwfan1w1hhx4pjnufbjbhvmzxcox6n9qhy4pjs' );
define( 'SECURE_AUTH_SALT', '9rotheh3ors7brjtrqeibzb4a3uwjhb0vixbvqn0ssqhr979p1g7vpvnll6bpw4s' );
define( 'LOGGED_IN_SALT',   'syzyddvx9xjzmchabwqocd2c5snh25p42r1rhrf25l5hwz9auvppzd7w0kzqctdn' );
define( 'NONCE_SALT',       'hpjxf8ergadtmlzsst3nedrpytwn0nw96cuacuukhtmcljz5kwjpj2tmjeff6icj' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpq1_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
