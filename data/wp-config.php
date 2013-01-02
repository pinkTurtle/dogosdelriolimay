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
	     define('DB_NAME', 'xifox_dogos');

	     /** Tu nombre de usuario de MySQL */
	     define('DB_USER', 'xifox_dogos');

	     /** Tu contraseña de MySQL */
	     define('DB_PASSWORD', 'alfil10asesino');

	     /** Host de MySQL (es muy probable que no necesites cambiarlo) */
	     define('DB_HOST', 'localhost');

	     /** Codificación de caracteres para la base de datos. */
	     define('DB_CHARSET', 'utf8');

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
		     define('AUTH_KEY', '#N0K9WWxY4a=3#^{,f,tBL UvZ4Ck-!x]|qqAV|uu+*[-DF<mDjc(D<|``Uo&; U'); // Cambia esto por tu frase aleatoria.
		     define('SECURE_AUTH_KEY', '7*PSIcE[yu~MFSfGcSd.|Z+RWe;<>e/WWGOJswq=!W==.e64HDP58Cy,]S5-y{ir'); // Cambia esto por tu frase aleatoria.
		     define('LOGGED_IN_KEY', 'R<Uhsc4sWf=mR/+IG({K}7&7IBj#KXw%z,F|4&p&PHl+a+hL#dCag]%xx{G93[4X'); // Cambia esto por tu frase aleatoria.
		     define('NONCE_KEY', 'M/EK1-;{R:J1$J;4p-gd7xj+aJptajZi&=uIbb!UmJY+Cp6|d_q]$BpRCW3i/VYR'); // Cambia esto por tu frase aleatoria.
		     define('AUTH_SALT', '~]05EWwTZodQy=KxWL6@Gy<;E{67FdX<U(9%cn>H|l;<!?*QgHB0?Q4H6g)Fj5*r'); // Cambia esto por tu frase aleatoria.
		     define('SECURE_AUTH_SALT', ')?M]7J<:IwDH/ 6}4+Ej,|T-$jyS-,8|DO~{@Zn9N!l.w[F`dAzV3Nm-7FMLlu|g'); // Cambia esto por tu frase aleatoria.
		     define('LOGGED_IN_SALT', 'j4@GWWhCpgq;AfzTr]*d-IZGF+US-~6kmdzg+M_a-|N}-4F+lA-*|FOEaWb?_IHJ'); // Cambia esto por tu frase aleatoria.
		     define('NONCE_SALT', 'B|;~KQ+kw!eqao_6%qdDG-hox0!8eiG7yrA*3pdclFR)ON.lQqd^9,,Kh5oo|%RI'); // Cambia esto por tu frase aleatoria.

		     /**#@-*/

		     /**
		      * Prefijo de la base de datos de WordPress.
		       *
		        * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
			 * Emplea solo números, letras y guión bajo.
			  */
			  $table_prefix  = 'wp_';

			  /**
			   * Idioma de WordPress.
			    *
			     * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
			      * del lenguaje elegido debe encontrarse en wp-content/languages.
			       * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
			        * para traducir WordPress al catalán.
				 */
				 define('WPLANG', 'es_ES');

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


