<?php 

function aletheme_metaboxes($meta_boxes) {
	$meta_boxes = array();
    $prefix = "wayup_";
    $meta_boxes[] = array(
        'id'         => 'testimonial_metaboxes',
        'title'      => 'Данные для отзыва',
        'pages'      => array( 'testimonial', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
      /*  'show_on'    => array( 'key' => 'page-template', 'value' => array('page-home.php'), ), // Specific post templates to display this metabox*/
        'fields' => array(
            array(
                'name' => 'Социльная сеть',
                'desc' => 'Введите ссылку на соц.сеть',
                'id'   => $prefix . 'social_link',
                'type' => 'text',
            ),
            array(
                'name' => 'Дата отзывы',
                'desc' => 'Введите дату отзыва',
                'id'   => $prefix . 'testy_date',
                'type' => 'text_date',
            ),
        ) 
    );

    $meta_boxes[] = array(
        'id'         => 'services_metaboxes',
        'title'      => 'Данные для сервиса',
        'pages'      => array( 'service', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
      /*  'show_on'    => array( 'key' => 'page-template', 'value' => array('page-home.php'), ), // Specific post templates to display this metabox*/
        'fields' => array(
            array(
                'name' => 'Стоимость',
                'desc' => 'Введите цену данной услуги',
                'id'   => $prefix . 'service_cost',
                'type' => 'text',
            ),
            array(
                'name' => 'Фоновое изображение',
                'desc' => 'Выберите фон (иконку) на выбор',
                'id'   => $prefix . 'service_icon',
                'type' => 'select',
                'options'=>array(
                	array('name'=>'Выберите стиль','value'=>''),
                	array('name'=>'Стиль Статистика','value'=>'stat'),
                	array('name'=>'Стиль Идея','value'=>'idea'),
                	array('name'=>'Стиль Интернет','value'=>'internet'),
                	array('name'=>'Стиль Инфо','value'=>'info'),
                	array('name'=>'Стиль Деловой','value'=>'busy'),
                	array('name'=>'Стиль Таргет','value'=>'target')
                )
            ),
        ) 
    );

    $meta_boxes[] = array(
        'id'         => 'order_metaboxes',
        'title'      => 'Данные для Страницы Заказа',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
      	'show_on'    => array( 'key' => 'page-template', 'value' => array('template-order.php'), ), // Specific post templates to display this metabox*/
        'fields' => array(
            array(
                'name' => 'Шорткод Формы',
                'desc' => 'Установите плагин для форм и вставьте шорткод формы',
                'id'   => $prefix . 'shortcode_order',
                'type' => 'text',
            ),
        ) 
    );

    $meta_boxes[] = array(
        'id'         => 'contact_metaboxes',
        'title'      => 'Данные для Страницы Контакты',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
      	'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php'), ), // Specific post templates to display this metabox*/
        'fields' => array(
            array(
                'name' => 'Заголовок 1',
                'desc' => 'Укажите заголовок для левой части страницы',
                'id'   => $prefix . 'contact_title_left',
                'std'  =>'Как нас найти',
                'type' => 'text',
            ),
            array(
                'name' => 'Заголовок 2',
                'desc' => 'Укажите заголовок для правой части страницы',
                'id'   => $prefix . 'contact_title_right',
                'std'  =>'Получите бесплатную консультацию уже сегодня',
                'type' => 'text',
            ),
            array(
                'name' => 'Шорткод для контактной формы',
                'desc' => 'Создайте новую форму в плагине CF7 и вставьте шорткод в данное поле',
                'id'   => $prefix . 'contact_shortcode',
                'type' => 'text',
            ),
            array(
                'name' => 'Адрес',
                'desc' => 'Укажите ваш адрес',
                'id'   => $prefix . 'contact_address',
                'type' => 'text',
            ),
            array(
                'name' => 'Телефон 1',
                'desc' => 'Укажите ваш первый телефон',
                'id'   => $prefix . 'contact_phone1',
                'type' => 'text',
            ),
             array(
                'name' => 'Телефон 2',
                'desc' => 'Укажите ваш второй телефон',
                'id'   => $prefix . 'contact_phone2',
                'type' => 'text',
            ),
             array(
                'name' => 'Email',
                'desc' => 'Укажите ваш Email',
                'id'   => $prefix . 'contact_email',
                'type' => 'text',
            ),
             array(
                'name' => 'График',
                'desc' => 'Укажите текст для рабочего графика',
                'id'   => $prefix . 'contact_calendar',
                'std'  => 'Мы работаем с 9:00 до 22:00 в рабочие дни',
                'type' => 'text',
            ),
             array(
                'name' => 'Шорткод для карты',
                'desc' => 'Установите плагин для отображения карт и вставьте шорткод карты в данное поле',
                'id'   => $prefix . 'contact_map',
                'type' => 'text',
            ),
        ) 
    );

    $meta_boxes[] = array(
        'id'         => 'woocommerce_metaboxes',
        'title'      => 'Product status',
        'pages'      => array( 'product', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'page-template', 'value' => array('template-order.php'), ), // Specific post templates to display this metabox*/
        'fields' => array(
            array(
                'name' => 'Button text',
                'desc' => 'Add text for button',
                'id'   => $prefix . 'sale_button_title',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Short title',
                'desc' => 'Add product short title',
                'id'   => $prefix . 'short_title',
                'std'  => '',
                'type' => 'text',
            ),
             array(
                'name' => 'Button color',
                'desc' => 'Add color name for button',
                'id'   => $prefix . 'sale_button_color',
                'std'  => '#fdba4a',
                'type' => 'text',
            ),
             array(
                'name' => 'Photo 1',
                'desc' => 'Upload photo',
                'id'   => $prefix . 'photo_one',
                'type' => 'file',
            ),
        ) 
    );

	return $meta_boxes;
}


 ?>