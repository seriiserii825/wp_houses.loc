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
define('DB_NAME', 'wp-houses.loc');

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
define('AUTH_KEY',         '} W3.{ZObn{dgN_@lUau9pBMWj7 lW+T&-_;5 Ty~XpvK6awW7lWW;!z5-xW?Gjz');
define('SECURE_AUTH_KEY',  '`{V]O@`|NPSS$h~)Z>[Uhz6_lP)LF8@uDdkPur3g03]QE8XG{++Ru%bDUD+m3ED9');
define('LOGGED_IN_KEY',    '~^;;@DCZ=YIa*Z~YB!W-0`xZfdqR|J#Z,W=lDMG4#H$2V bh-Zk,AoyEq0r0:=|v');
define('NONCE_KEY',        'lA!pa+-)&C%bRuN~iLi8R0bz=x-XNXvm$+DKJ#xS8A)]x1bHBCY`w?R~0Ahwc%2V');
define('AUTH_SALT',        ';&Nt%Tu~9{YzsO%Y6Uj]Wf}dR?|6AI<VKS8Q`I%U/P1e[DpaS|.Q|~ZdB,Hj)~?1');
define('SECURE_AUTH_SALT', 'Y@&aC>N6m<1NG6Qh|}%jlBeW1j{A&-7#!ldCzGGi=;d)T7bLF_CrG9^PKi]P1D?7');
define('LOGGED_IN_SALT',   '{+q(cwB{YQL@HhBG}jIMt]od.Z(zalg82:S-LZotSnhZr4;fUkjv33EZ:hBw2~J:');
define('NONCE_SALT',       'eE)gY&2Nx_x+Iuq:z?vd+fj6-l*Tg2SN(=]?yP)Y++Hy0|H`iS`nfv]jO6M8+2(+');

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
