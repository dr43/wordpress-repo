<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

define('WP_INSTALLING', false);

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'l1bitrix_host22' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'l1bitrix_host22' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '5629759_sav' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{u+WDZ a3kfs1-IP)0YXLx+0Ty V18ad62_c:_rE!NH.bd+ix[^v+UcQXT%pkQ93' );
define( 'SECURE_AUTH_KEY',  'wH!K10O?Z4Ec,3~pEmrj@QTeSn09P>*PuS%;4]qQor~(BtJ}=z9AinGEZ!d9NM#a' );
define( 'LOGGED_IN_KEY',    '&8>5g}%=gam^L@R3_#A Z0a/S`#1y3U~xBk~7^:sIYaDf.T#WFS2j&w%d?i&MdYe' );
define( 'NONCE_KEY',        'D;wj4DXXWGL5L9iy}@Kq6j|{:)i$m[H=7~(POr~+JBK6CN4b=48&D&@jh6H=fmDg' );
define( 'AUTH_SALT',        'BvP6qbTR|UjSD1`*DfoeX/tws,(VB[k^s1y)J@O|5H)(nO;0+[`ADr.EyNvalOdS' );
define( 'SECURE_AUTH_SALT', '3F]Z@[A(Qd@3MenM[W1>}C.Zi>00F,?nn [p5VxjN)mpH}1K:(.BsCfrh7CwM:ik' );
define( 'LOGGED_IN_SALT',   'hD@iwS6W;9YaT+W&zc0P1raKWSNT=+cb2!TuA>7&%VU 9qO<5xnu:8[Tz} sePuf' );
define( 'NONCE_SALT',       ',d_<Vd`_rAc/_dZ.6J8y_?r| 9}n3>G$HcblygFW3*Z>,v*r!k5^HbWPAwP3Q|EN' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */

###X-Frame-Options" header####
#header('X-Frame-Options: SAMEORIGIN');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
