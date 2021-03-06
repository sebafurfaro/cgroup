<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', "cgroup_local" );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', "cgroup_user" );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', "" );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', "localhost" );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'p)Ty?j-ruVbbSd){|S-zxo@}eYR[q_2xVWC_X}$*E 1+5<Zbvuy17Hwd5anRQ1S5' );
define( 'SECURE_AUTH_KEY', 'J=^HT2wn_F3Mx0Y~JU(jZjS{7HF}[Q3JUkLAa6^R`y_:63r}0`$uUPA&8o_xl;=8' );
define( 'LOGGED_IN_KEY', '~:PcK}&aKd@]vF)-9?+%5Suc2J&%a16(F*/=<+n&%>;t*6+,m|B4;`b{5Y.W0F.n' );
define( 'NONCE_KEY', '-x{Lq}qMGu;c%gwN(WN7pY12j3%g8_H1$CJp([L.7{38v~Lm-wO?}EE0q#zqk_z}' );
define( 'AUTH_SALT', 'q<p~si_?ew-+KNX,^I?][*|WWROh6_lfMyiLVbbv4c@Cuom_a%x7p.I19jtr;I>:' );
define( 'SECURE_AUTH_SALT', 'bF@0+;Hn&inW!!V{ %r6m<H)M8*Qc.3lUv7;Ep>#keX?&]tYm(vWnrp*m?!q_)(@' );
define( 'LOGGED_IN_SALT', 'MS/-/4 G3|^~GUAoXDZL3I#5Y{U-Pf];5I;r-V9o=Mg+PpBleP3uEilMwu`7pfrt' );
define( 'NONCE_SALT', 'ZUy1W`d6vLwM^YN]c{|(M~YJS]JQ,Y!P!..0&F h.NLh|6@oz.h|E.- >GC<q~It' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
