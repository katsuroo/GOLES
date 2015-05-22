<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_default');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '19KTo<iFF2(CE)0r+whToB0)wd/U-42/FdvF$kpau{mmL`wrZK%R/V+z1c|+k3]*');
define('SECURE_AUTH_KEY',  'U7Z`~>2LYYdvZ$cWV`lR 6#pTHy8icW)o+oape5[]Z`6HOwU)tHBVAfrK/J}9ghx');
define('LOGGED_IN_KEY',    '-t-.4X Y6u6--WaD+7CE?R+Fgaj;MAr$tyarC:.}7V:2)G+7+iU0p*82,{_jY4.$');
define('NONCE_KEY',        'BB%uyqXru{swnh<etmj3y!2X90iXNn^><av)f.e]}k}le|i*qs##XcQ[jdSTqxMX');
define('AUTH_SALT',        'fMQ&c[eq+.`Sz|/CyV--/-dD2)A4rZtEkX;dZb]R5,;0;n)-#ePgzcw!3O-M,~@N');
define('SECURE_AUTH_SALT', '.m@QIB4pronGOwc.7`T~N5~|D 9Om+0FMz?S[U0/=`1Rt5Q5Y31[b5q[ci?+vXF ');
define('LOGGED_IN_SALT',   '?EPGYp4Lxg^65~__N*2/6?+X6f&S(r`UB662Nn)?]$^n+4k|VkSUuYhf)f8B~t<o');
define('NONCE_SALT',       'c^=^#Z`O:2R#|QTnOg8TTEcd$FQM^=g#j(p!bP)Vdq|&Z1w~`99vK4,]-(3r2%8M');


$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
	define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
	define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}

define( 'WP_DEBUG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
