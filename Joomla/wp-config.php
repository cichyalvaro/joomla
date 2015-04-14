<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'wordpress');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P<b~~ulG1Vy$uU@ohST`Zk+8]2uy!1TPmfY<V~ou/h2K?|dfQkGZKH%.u_f|-VG6');
define('SECURE_AUTH_KEY',  'gEyYU?lg-)4JY12!AG]>PI8Qd]F3Wwl@5y!k8d:Qbg! @gz9.]dMK|L;e>?+d*8(');
define('LOGGED_IN_KEY',    'J#)m|t8DnbDjdh,>RX}KiJ2.*UN+a#mI@Mwu%||-y`/(*-`Hpa8T._I?6fM%R5nJ');
define('NONCE_KEY',        'JEQ8n?8kfNU2kAJT% msE~GfK1Arm8cF#v9jBXUcq,PPPh-9`gjaN=`J36OnJvKr');
define('AUTH_SALT',        'eYX)iG#|&&!Mc)-/Qv1+{@e crTxNAm|{:-Pc6|+!ab6cHEA/J}@q.d|.7kHT-VJ');
define('SECURE_AUTH_SALT', 'vu=f~]LJ+<fwP}W<bkU2%>[:y%=S!UD#?g&04(C3W5xq?M;zY6EKn{GuF:|%w<!&');
define('LOGGED_IN_SALT',   'A^Bt^<COsP;f4u(|pZwt6)9?rGpaX?ke9{^_+`),_uf^i.m4t&>{x`w4X0w#rov$');
define('NONCE_SALT',       '/|Xxb{m-1Ki_;`_qQJN9a+-I0%Lih8aahjs!p!~6u&&(@2=R<iUNp;=*]:t$-f8u');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
