<?php
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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'c7,b#`KZZkiP0h%ig@[Sw3HG{sN3-~#<US:5HQ/|)Nf3@kqXkbdKbaZNROPskcCa' );
define( 'SECURE_AUTH_KEY',  ';@]FTo<8h$G)J>N2wqPWDNmvDpd)729(pN-*(W#c@`~>I1HLiTRIdcYt)_&;Nj}E' );
define( 'LOGGED_IN_KEY',    'afNKDAE$5g83YcW*Eq.2@;/cL?xm90]#q|k%1) f|b.DOk2OT9}bGJuxm;XEMS:.' );
define( 'NONCE_KEY',        'OL<S4V(S;?B9T:pDW=Fys_`;0-=f=qxjs7`A{.u6BNwznaE>G5K[GUZ^bYzi=2);' );
define( 'AUTH_SALT',        'f>M+mI<guD`0mXR9j_ToG#_A~?ekM`xWzZlx-(LKJ{#&y[HeSH5SS`*AgH6+nD%y' );
define( 'SECURE_AUTH_SALT', 'P8fJ#YjZ ]vzx/}):~$W-wHQ&%6]oMIBJR@s( _-B6aT7M;oyj,)[E2/f2Ud/RUx' );
define( 'LOGGED_IN_SALT',   'KLI[lVI8 X@>Xbr$x/y}j{7Jsf_=}/|7]L@I0.8meT7{KUF auk5E4TL2Np$_M[h' );
define( 'NONCE_SALT',       'Tb;d8kS@IJuv~R#!U#vL-W/qMicjq>.Jrf(_8*w5o7+`!qxl(M5aOyqNhc{iG80:' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_wordpress_';

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



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
