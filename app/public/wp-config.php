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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '9KDmZuCe7rDMRSilSCbPBcstJvdT4fLqZcdFAaRGxZa/iFgcFlW1m0tV/UzCqi03t8tQRI70Ue3G64gY/EBmaQ==');
define('SECURE_AUTH_KEY',  'i893aeZGIyS7XwdDYXQ92o+McSMOeB2XYphFC9xf0ElxQpz0N6tBY3cZ7dh7K2D34aKUD1eA0fLFVmMk91HsRw==');
define('LOGGED_IN_KEY',    'IjLTAHL9bwuTW0VLqku7iii9hGDzh6IA0dOvrCFv/k+8sGAGDrLVyVmsNByBiorfjix/BNsfFHwIwUZ6qZtnlQ==');
define('NONCE_KEY',        'trxOnubBSKGOoBjk2lE8gnMrIa6QBhukaDkvYI58LPx6vw8Dq0+BopLl/+4aqGVmbrMWG/4X0Tdv5chMSlSQbw==');
define('AUTH_SALT',        'rt8rOe2V6hGJ+6KvbdREovo731fjMz4PF3zzjrUbQWwqoGWykfiWGwR7wl2KekMXsxUZbOM+dd8bv6/hhVH1QQ==');
define('SECURE_AUTH_SALT', 'GBr+i6dauq+HT8FXne5yC/30/oiQ6HVsP2WwFHKUUxCVpgC6w+jta5p6k1eABaR1rKCicHGmU53ni4l8YyDxWA==');
define('LOGGED_IN_SALT',   'xb8VgmzYK1wkxch1/zZ4BmOJDlVFWp0pd5TueoTHTOfeEVYYGprlkHqiXN3KSzBYtlGUrHV/fATdg1d8AgwAjw==');
define('NONCE_SALT',       'vOpjZin2KJgOuhcL/EmjSRCpoGOoTWSmyDJjf6Aeo6joWJbqPGsdPMXxcpns9pl9/BI6afosRbFa9ySMiOV1oA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
