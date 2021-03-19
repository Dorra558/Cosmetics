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
define( 'DB_NAME', 'cosmetics' );

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
define( 'AUTH_KEY',         'sN}C0zAeO8U<#GqJJw2et1B0Vz.^xA_u>Oz@ke3R[yL_ #[`V@,e}SEB*P>OPb-O' );
define( 'SECURE_AUTH_KEY',  '_W,%A~ej.*iVB@jp^n#yB6]dUAyFUL5&A:k[kWf2ZJI&YU)SKnBlEziq !mrOsHY' );
define( 'LOGGED_IN_KEY',    't[ZGmT3/IHf?eIG|x%3bF~Q85Ba$;wm%e,I)>J|;1@0qB:}t7+|Gi.s.mMN5/>rn' );
define( 'NONCE_KEY',        'J$~+%XF@>TBKQl|#yyzh!_s3:pK&Fxy]M<eSm%v1#QJPBiWa%<:?PcWqTWQn6Wk~' );
define( 'AUTH_SALT',        '8uWkt`^xYLo]0F-s/~) rD?k+CjVn0i;.~PrCh<!4mMFF#-3y75X#l)Szu9EDDN7' );
define( 'SECURE_AUTH_SALT', '*8Vl+8yf.sD8EJH~*D;h7z|N5D5vsRU._wk;dh37{jn?~4P$J5Fl6Kfq#fNxaObE' );
define( 'LOGGED_IN_SALT',   'D[Hn=9>l5G-$eY(R&<aer{i43aq;71E=|6xCr9](=iPP)|gp~;8V7^/ $X$*8hX~' );
define( 'NONCE_SALT',       'Y(MMIQdL3frI?I4;GwcMJB|#6rX3pF-KQ15qWMsMpX({9/{ x`[<YG?]TR)dy4D!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'FS_METHOD', 'direct' );
