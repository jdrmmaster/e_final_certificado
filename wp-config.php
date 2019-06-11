<?php
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
define( 'DB_NAME', 'nextu' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY', 'C1:5sxri{`9`KfoFNa4m_##@srYAQda=0n,MA5h[WcIr9$^E<l9<^:!VC=#H8d03' );
define( 'SECURE_AUTH_KEY', 'LKi Ln}DFZ:7$5x#ADi:)9Z`@KjwBP$Z16fd2^<CTaq}BSGB.Z,|P0W@;wqQfOo)' );
define( 'LOGGED_IN_KEY', 'yzZgL/(4YL,pEWR]XOJ:@UQK_jA-<^H>aS$~EW+sxz;:Q;^*oZ>PzJ2;}W6>(%9w' );
define( 'NONCE_KEY', 'UJ{+DdGSc/:F(f_7BINPEVJL^-]xu&dLmVK>|;`kJsk,c-X[,.&M.#a?pwZGWk9k' );
define( 'AUTH_SALT', 'Lp!x!xm:*,Y2=L^oU ?k3LPL?lN{>%&v.T+7jfW+:@=w2KMEGGU3Fyzt=^m&OK`3' );
define( 'SECURE_AUTH_SALT', '>?(jg-^k[A=Y3Z:Lmd_|0nAlY!cX=F&FK9)|&@qgqY!L{H:t%:+8$la,>p!b*e~z' );
define( 'LOGGED_IN_SALT', '$:4z+Wv|A|6z XQLwc2=tr-{ &<75Oekf#(~DB7)@0)`nr$zJXgTI:u7vcK8@1oI' );
define( 'NONCE_SALT', '.HO[OU&Nl67r2Kc,s2TDwNw^WMC7@jluKh3/&4Vi.=b;TI=u.>MTZvz,)Inmt6~U' );

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

