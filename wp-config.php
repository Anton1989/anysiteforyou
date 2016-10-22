<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'host1258915_any');

/** Имя пользователя MySQL */
define('DB_USER', 'host1258915_any');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'xZgOtcQX');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']VDN{)TN=I#|=H{G7G.Bfs!zA.y7hi[h_g+r[GUedya>X!?abQ{4BMn sf}p.AO*');
define('SECURE_AUTH_KEY',  '&}iQ,MdqH7i45l$cw }G+X;@o_/EG4odLrUrN=&{$:=A/bE`2wW|8dfgVTm0N*~z');
define('LOGGED_IN_KEY',    'k Iw@<w=3qry$,,#hf@ELCXmAch1It~0Xg:P>Pe<0L025Z0CUklRo.<P{g#k0eM&');
define('NONCE_KEY',        '2)uxJ-^#C<1&JHgg<Z(O>a6,+[*qH!vTw- ?1r39T3!R:s: E2]pCnoEGQRh0r+H');
define('AUTH_SALT',        'u8J]OSUMFvg;64AH8Em2]X!Nu?GOr}7m<mE}Q>lPPCsa=?U:e~#Kzkv$7twzr%Pc');
define('SECURE_AUTH_SALT', 'H~|4h}z+%]i*c/Kwg#Z -,ccVSvgb7=&$@2[Am^EVu/`;wg8Pce~=.C$+EG49Nw ');
define('LOGGED_IN_SALT',   'L=N?03|:g$fjjUozK|e),<H}}?A9WD[:aKsQ2lX-%mQf~J2^K*lVU,.Lg#|`Gw8M');
define('NONCE_SALT',       '98>I=t*6DHVMs~[EN[YxjE$8gi{}m5I2Duh?A;$az2qeQhlwk|R-VjtK%$s.LJK8');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'any_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
