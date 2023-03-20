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
define( 'DB_NAME', 'pochta2' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'sus2' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'sus2' );

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
define( 'AUTH_KEY',         '{]?5AEd3k7 F(N2KtgZeL7;`cC}CZ TeDvQ=v#3,4|BT/5}Ab2!ftb!_P)U<V@|[' );
define( 'SECURE_AUTH_KEY',  'R:B: eGb?9kNC .RH_+p <wK[j9<DyU4_Dcffq$%WM.|9FT)NBS[cn^e|i6hf#)S' );
define( 'LOGGED_IN_KEY',    'LPFGjFZ;dh]YC6Em&K&$tM-AG1opa|6wG/e,,K/~p;#Pc=k$^r@+D?8sN :AmvaJ' );
define( 'NONCE_KEY',        'H$()0(QZLgD>SR3w-0EP]VQC;UY5Lp2gV4JNT^B#>)P;jd+h0s<C]g1],A@l_J{|' );
define( 'AUTH_SALT',        'dbb!i2#_E_-]naqF0if]nZhL6i{q+`,(Fc0PdmCI/F]AQ,*9~eM4V_jeR6*VDU$l' );
define( 'SECURE_AUTH_SALT', 'X%^j6uL}.0[[>UdP7/=IQk;:g?EAhDYZbjuH=I/9rn:V^dO)(Q)l2Ui@rcb;NORa' );
define( 'LOGGED_IN_SALT',   '7w{:Qt)N0V8%XsY/Ml:J@Lrvrs~[~3P]?y3 ^0)lmBO8lb+VNQsZbP<Aen:m%x?+' );
define( 'NONCE_SALT',       'kve93+9JLqvYu[{X,V!Wl/|P$2p9bk+V?sA@p9#E-lPu$tZ&um%eq4s(u0NW]DjO' );

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
