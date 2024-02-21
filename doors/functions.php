<?php
add_action('wp_enqueue_scripts', 'addScripts');
add_action('wp_enqueue_scripts', 'addStyles');
add_action('wp_enqueue_scripts', 'addMyScripts');
add_theme_support('custom-logo');
function addScripts()
{
	wp_deregister_script('jquery-core');
	wp_register_script('jquery-core', get_template_directory_uri() .
		'./assets/js/jquery-3.7.1.min.js');
	wp_enqueue_script('jquery');
}
function addMyScripts()
{
	wp_enqueue_script('bootstrap', get_template_directory_uri() .
		'./assets/js/bootstrap.min.js');
}

function addStyles()
{
	wp_enqueue_style('bootstrap', get_template_directory_uri() .
		'./assets/css/bootstrap.min.css');
	wp_enqueue_style('style', get_stylesheet_uri());
}







/* Добавляем раздел "Двери" в меню */
add_action('init', 'doors_custom_post_types');
function doors_custom_post_types()
{
	register_taxonomy('category_door', ['doors'], [
		'label'                 => 'Категории', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории',
			'singular_name'     => 'Категория',
			'search_items'      => 'Искать Категории',
			'all_items'         => 'Все Категории',
			'parent_item'       => 'Родит. категория',
			'parent_item_colon' => 'Родит. категория:',
			'edit_item'         => 'Ред. Категория',
			'update_item'       => 'Обновить Категорию',
			'add_new_item'      => 'Добавить Категорию',
			'new_item_name'     => 'Новая Категория',
			'menu_name'         => 'Категория',
		),
		'description'           => 'Рубрики для категорий', // описание таксономии
		'public'                => true,
		'show_in_nav_menus'     => false, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => false, // равен аргументу show_ui
		'hierarchical'          => true,
		'rewrite'               => array('slug' => 'doors', 'hierarchical' => false, 'with_front' => false, 'feed' => false),
		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
	]);

	register_post_type('doors', [
		'label'  => null,
		'labels' => [
			'name'               => 'Двери', // основное название для типа записи
			'singular_name'      => 'Дверь', // название для одной записи этого типа
			'add_new'            => 'Добавить новую', // для добавления новой записи
			'add_new_item'       => 'Добавление новой двери', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование двери', // для редактирования типа записи
			'new_item'           => 'Новая дверь', // текст новой записи
			'view_item'          => 'Смотреть дверь', // для просмотра записи этого типа.
			'search_items'       => 'Искать дверь', // для поиска по этим типам записи
			'not_found'          => 'Дверей не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Дверей не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Двери', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => null, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-welcome-add-page',
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title', 'editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	]);
}
