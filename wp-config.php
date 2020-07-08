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
define( 'DB_NAME', 'lab' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '39]!Rr1l!J!EJ=oC9y.)SK9)7[ei4LwuC}DlXVc-(@.Xh4#VO_etL+qjD]jf.P3:' );
define( 'SECURE_AUTH_KEY',  'F^Jxc!+<9?%Q~s0rTLNUhYwl I+S=x%>I*;*$0r#,[kTlU(l>3Xo@I`5NH(NQ}o*' );
define( 'LOGGED_IN_KEY',    'tg~|bc}<S.vHx+>yR(qlZ%!rNAX>iIZCa PXbul9)r=Fcw71oaB*[:o*UcZ8O2RG' );
define( 'NONCE_KEY',        'Pw?CW.>ENr.RbH%}Zq#+H-0+r|hRYfcK-1^`l<pK6Fc*qdFdHX7$`t|4GxM{>gml' );
define( 'AUTH_SALT',        '1eGuDKMl[@!P#Al ~}bY-(Fff9b<UM4{+j7+%FAMqcM/MOxUN_t;g)}*`]qo/7}d' );
define( 'SECURE_AUTH_SALT', ' :^>bud`{>zgFC8W.s};xCwtN]ng]F7bbNHd(uS=:J~$a,x5xPjfZ4dO3FkMs()g' );
define( 'LOGGED_IN_SALT',   'i(jO-KXVD4/WB:$[PsmD6O_ZxJrom~P-I4f{bpc.cvT?+zI G+/{,P7-!5d968uj' );
define( 'NONCE_SALT',       '5;E-G.ei)pVZHDz!4>p5!3fB1K,(VT2/<3CRhFDQr02M}_S|#S<e9#$G3o7.+N=s' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
//  ini_set('display_errors','Off');
 ini_set('error_reporting', E_ALL );
 define('WP_DEBUG', false);
 define('WP_DEBUG_DISPLAY', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
