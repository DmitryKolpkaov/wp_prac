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
define( 'DB_NAME', 'my_database' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'my_user' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'secret' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'PS_Hf*hWiVo+ 4{-6V9`?Cdd%D:jkWx8|GJOzC<_K+n7AUcCe}*mn)hFz[|}V7{`' );
define( 'SECURE_AUTH_KEY',  'CI87IonZ34{T*n4]?b:R?R9>8hlD_7E28+2md2i(7Dtg]4CPago<UBQ+4P*jD23V' );
define( 'LOGGED_IN_KEY',    'iy. yCpe`*?Z}MW04TgXZluiU]CLbR!IX1{r-G`l!Yt[[4^Y}1z_sUSRH<+!:&1n' );
define( 'NONCE_KEY',        'm3J{mUE#8bB.ZzhY_mXyYobv;+9JRRw_TI{<uZ<etx[j6,I.}R_oP=mJ2zH|mVVO' );
define( 'AUTH_SALT',        '`YNufoC$Kl((|+Q`-.=f_T%`)uEE}Z5W3oX3>i9WG6r3u:MaN#iGdWXav8xZHwR-' );
define( 'SECURE_AUTH_SALT', '~OUF{|xDGeIX]:=hKN~y4mv0dF$-#r.W[PDVGza[fLrJG-1GX}~7*C1H7dNr(J}Q' );
define( 'LOGGED_IN_SALT',   '*+)MkZc6*wF1a1mVzEe,ADt>Lx{s$60nGU:7nq%XDY#Quo||RFZ{4c+y S::+iR{' );
define( 'NONCE_SALT',       ' (}uYFh!2Xm`YMb%Lr>ETsf}BN`d%8HZALnW0_FY4,WKjz6ANL]%CMw +p)L1%!1' );

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



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
