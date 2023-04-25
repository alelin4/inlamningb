<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'inlamningb' );

/** Databasens användarnamn */
define( 'DB_USER', 'alexander' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'alexander' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/wNQ/)fL5 w4XJ{n7}z7r9mE$_I8u]%{*sb-B8uB/`O]}1>]AC888JU:8XD<T;>`' );
define( 'SECURE_AUTH_KEY',  'o~M}H{B39LF!Xq&)LQ:mmU#QH.2S1}`ZwEqU|bh2TSR%WK zWP[A!0F=[[3]W8;c' );
define( 'LOGGED_IN_KEY',    'tYr!]T;>Q:-Kz,?l`WC:f/p]wH/mK:l$A{1@PujS`^R?D8SQ}My_NZ,[},-tZmQB' );
define( 'NONCE_KEY',        'Yh<5jEwr1wMTw[kT0+ lX|0SwDaWE9#lYG+shDk5jX!}/myelt_jrP+ XWay4TY2' );
define( 'AUTH_SALT',        'TcKe[<jp.C6.&)-c,[K&Z&T(BIaR.Sr-Y^3qtDwmw_N#3@Lr7.LLxN$(CIVk;2fD' );
define( 'SECURE_AUTH_SALT', 'hhbUa`Xf*|IbqtOd6b:8SGq,*85h%t{An:e_b4(wxDtdi t?/y#iIkO)ui#0^[Eu' );
define( 'LOGGED_IN_SALT',   '@7)$/Q1OF(r8N+Ro`x|l=e?#Jvryp#rbVvwx7Fl-yr/h`h5Ydavqta@G=p&X5e,{' );
define( 'NONCE_SALT',       'NVu( EZxax&]U$Ixvq*=~T!kvPl,O;C`~D~-J:3g(TxTQ!uXi[Er01F[1CVVXyhx' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');