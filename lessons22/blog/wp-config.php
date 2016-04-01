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
define('DB_NAME', 'wploc');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '$+]QB<~o7*dGGi/$z0Lg+wLN~ZZcxV[;|*j4$H[+utjB7rY9gm>q/Y?n|od-UkY;');
define('SECURE_AUTH_KEY',  'tU(l!}kR[5p*nZ|xnOq<CJu,dVo@Fur%wJ=:7]J5,3^qAd/>Df3e%co2F8U1(%;b');
define('LOGGED_IN_KEY',    ',3hHBl8{N /eG]l|]0~{0OtF0<%Tve&}@8~5FLK]A^ tzT@i-.ENA68v8Q8y}q]n');
define('NONCE_KEY',        'Xic x:tid+|q._{y?|PXvn$M4b^biBWNYaLX<h)},KktRTJ.T0J+_6C~6,l:h}Hi');
define('AUTH_SALT',        '=Uo!U8aT%cPKVbm)3j!w|i>Y1G@kPUt[(AN1{d>f^~EDscH+u*[+Ar(K;`*DJF4X');
define('SECURE_AUTH_SALT', 'LzjobPACr4Ky;DPULH2-(8;cxb*KHa-(3A+0Jrl_uJq0DQcLl:!m<f+X8ll8>2XT');
define('LOGGED_IN_SALT',   '|Dq^nZ|I{t&@<u{b|W.Uqxh])*1BlLBaJ[OhEQ{5SxuX?wW+twv|.=C!u1+O[ 5`');
define('NONCE_SALT',       'W3F5#G_culS&23HQdso`rOP9PdlN`eq{B0cxz3{t9p:C;b>4}JmP~In:Zm?e-aHn');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
