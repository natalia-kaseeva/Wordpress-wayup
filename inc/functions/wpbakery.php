<?php 

/*
 * Map Shortcodes
 * */

//About Company Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_About_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Company Info', 'wayup' ),
        'base'                    => 'wayup_about_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные для компании', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Почему мы –","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
           	array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "ПРАВИЛЬНЫЙ ВЫБОР ДЛЯ ВАС","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Description1", "wayup" ),
                "param_name"  => "desc1",
                "value"       => '',
                "description" => esc_html__( "Введите описание", "wayup" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Description2", "wayup" ),
                "param_name"  => "desc2",
                "value"       => '',
                "description" => esc_html__( "Введите описание", "wayup" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Description", "wayup" ),
                "param_name"  => "desc3",
                "value"       => '',
                "description" => esc_html__( "Введите описание", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Module Image", "wayup" ),
                "param_name"  => "featured_image",
                "value"       => '',
                "description" => esc_html__( "Загрузите картинку", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Author Photo", "wayup" ),
                "param_name"  => "author",
                "value"       => '',
                "description" => esc_html__( "Загрузите фото", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Signature Photo", "wayup" ),
                "param_name"  => "signature",
                "value"       => '',
                "description" => esc_html__( "Загрузите подписи", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Quote", "wayup" ),
                "param_name"  => "quote",
                "value"       => esc_html__( "Мы здесь, чтобы помочь вам построить и поддержать свою мечту.","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
             array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Author name", "wayup" ),
                "param_name"  => "author_name",
                "value"       => esc_html__( "Дмитрий Львович","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
             array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Position", "wayup" ),
                "param_name"  => "author_position",
                "value"       => esc_html__( "Директор компании","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
        )
    ) );
}

//Progress Company Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Progress_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Progress Module', 'wayup' ),
        'base'                    => 'wayup_progress_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные для модуля', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 3", "wayup" ),
                "param_name"  => "title3",
                "value"       => esc_html__( "","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
           	array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 4", "wayup" ),
                "param_name"  => "title4",
                "value"       => esc_html__( "","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Value 1", "wayup" ),
                "param_name"  => "value1",
                "value"       => esc_html__( "","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Value 2", "wayup" ),
                "param_name"  => "value2",
                "value"       => esc_html__( "","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Value 3", "wayup" ),
                "param_name"  => "value3",
                "value"       => esc_html__( "","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
           	array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Value 4", "wayup" ),
                "param_name"  => "value4",
                "value"       => esc_html__( "","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Background Photo", "wayup" ),
                "param_name"  => "bg",
                "value"       => '',
                "description" => esc_html__( "Загрузите фото фона", "wayup" )
            ),
        )
    ) );
}

//Contact Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Contact_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Contact Module', 'wayup' ),
        'base'                    => 'wayup_contact_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные для модуля', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title", "wayup" ),
                "param_name"  => "title",
                "value"       => esc_html__( "","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Link", "wayup" ),
                "param_name"  => "link",
                "value"       => esc_html__( "","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
        )
    ) );
}

//Office Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Office_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Office Module', 'wayup' ),
        'base'                    => 'wayup_office_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные для модуля', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
             array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => "Наши офисы расположены по",
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => "всей России",
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Главный офис", "wayup" ),
                "param_name"  => "office1",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Главный офис (фото)", "wayup" ),
                "param_name"  => "office1photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Калининграде", "wayup" ),
                "param_name"  => "office2",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Калининграде (фото)", "wayup" ),
                "param_name"  => "office2photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
             array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Казани", "wayup" ),
                "param_name"  => "office3",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Казани (фото)", "wayup" ),
                "param_name"  => "office3photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Тюмени", "wayup" ),
                "param_name"  => "office4",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Тюмени (фото)", "wayup" ),
                "param_name"  => "office4photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Благовещенске", "wayup" ),
                "param_name"  => "office5",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Благовещенске (фото)", "wayup" ),
                "param_name"  => "office5photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Норильске", "wayup" ),
                "param_name"  => "office6",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Норильске (фото)", "wayup" ),
                "param_name"  => "office6photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис во Владивостоке", "wayup" ),
                "param_name"  => "office7",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис во Владивостоке (фото)", "wayup" ),
                "param_name"  => "office7photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
        )
    ) );
}


//Team Slider Extension
if ( class_exists( "WPBakeryShortCodesContainer" ) ) {
    class WPBakeryShortCode_Wayup_Team_Slider extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Team', 'wayup' ),
        'base'                    => 'wayup_team_slider',
        'as_parent'               => array('only' => 'wayup_team_slider_item'),
        'description'             => 'Описание для модуля',
        'content_element'         => true,
        'category'                => 'Wayup',
        'icon'                    => '',
        'show_settings_on_create' => false,
        'params'                  => array(),
        'js_view'                 => 'VcColumnView'
    ) );
}

if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Team_Slider_Item extends WPBakeryShortCode {}
}

if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Member of the team', 'wayup' ),
        'base'                    => 'wayup_team_slider_item',
        'category'                => 'Wayup', 
        'description'             => esc_html__( 'Введите данные для модуля', 'wayup' ),
        'show_settings_on_create' => true,
        'as_child'                => array('only' => 'wayup_team_slider'),
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
        	array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Фото человека", "wayup" ),
                "param_name"  => "photo",
                "value"       => '',
                "description" => esc_html__( 'Select or Upload an image', "wayup" )
            ),
             array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Имя", "wayup" ),
                "param_name"  => "name",
                "value"       => "",
                "description" => esc_html__( "Введите имя", "wayup" )
            ),
             array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Должность", "wayup" ),
                "param_name"  => "position",
                "value"       => "",
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Описание", "wayup" ),
                "param_name"  => "desc",
                "value"       => "",
                "description" => esc_html__( "Введите описание", "wayup" )
            ),
             array(
                "type"        => "textfield",
                "heading"     => esc_html__( "VK", "wayup" ),
                "param_name"  => "vklink",
                "value"       => "",
                "description" => esc_html__( "Введите ссылку", "wayup" )
            ),
              array(
                "type"        => "textfield",
                "heading"     => esc_html__( "FB", "wayup" ),
                "param_name"  => "fblink",
                "value"       => "",
                "description" => esc_html__( "Введите ссылку", "wayup" )
            ),
               array(
                "type"        => "textfield",
                "heading"     => esc_html__( "TW", "wayup" ),
                "param_name"  => "twlink",
                "value"       => "",
                "description" => esc_html__( "Введите ссылку", "wayup" )
            ),
                array(
                "type"        => "textfield",
                "heading"     => esc_html__( "IG", "wayup" ),
                "param_name"  => "iglink",
                "value"       => "",
                "description" => esc_html__( "Введите ссылку", "wayup" )
            ),
        )
    ) );
}

//Help Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Help_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Help part', 'wayup' ),
        'base'                    => 'wayup_help_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Кому мы","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
           	array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "ПОМОГАЕМ","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Description", "wayup" ),
                "param_name"  => "desc",
                "value"       => esc_html__( "Мы фокусируемся на юридических вопросах, актуальных для успешного современного бизнеса","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Link", "wayup" ),
                "param_name"  => "link",
                "value"       => esc_html__( "#","wayup" ),
                "description" => esc_html__( "Введите ссылку", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title of block 1", "wayup" ),
                "param_name"  => "block1title",
                "value"       => esc_html__( "Стартапам","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Description of block 1", "wayup" ),
                "param_name"  => "block1desc",
                "value"       => esc_html__( "Когда вы будете готовы вывести свой стартап на новый уровень, мы можем оказать вам юридические услуги, чтобы помочь вам расти","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title of block 2", "wayup" ),
                "param_name"  => "block2title",
                "value"       => esc_html__( "Фрилансеру","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Description of block 2", "wayup" ),
                "param_name"  => "block2desc",
                "value"       => esc_html__( "Начать независимый бизнес проще, чем когда-либо. Неважно подрабатываете вы или работаете самостоятельно, мы можем помочь вам сделать все правильно","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title of block 3", "wayup" ),
                "param_name"  => "block3title",
                "value"       => esc_html__( "Малому бизнесу","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Description of block 3", "wayup" ),
                "param_name"  => "block3desc",
                "value"       => esc_html__( "Мы поможем направить ваш бизнес в правильном направлении. Окажем услуги в области договорного, трудового права, недвижимости и многое другое","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),

        )
    ) );
}

//Help Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Why_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Why is our company part', 'wayup' ),
        'base'                    => 'wayup_why_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Почему мы –","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
           	array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "ПРАВИЛЬНЫЙ ВЫБОР ДЛЯ ВАС","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textarea_html",
                "heading"     => esc_html__( "Description", "wayup" ),
                "param_name"  => "content",
                "value"       => esc_html__( "<p>Placeholder</p>","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Link", "wayup" ),
                "param_name"  => "link",
                "value"       => esc_html__( "#","wayup" ),
                "description" => esc_html__( "Введите ссылку", "wayup" )
            ),
           
        )
    ) );
}

//Features Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Features_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Features part', 'wayup' ),
        'base'                    => 'wayup_features_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
        	 array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Наши","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
           	array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "КЕЙСЫ","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textarea_html",
                "heading"     => esc_html__( "Description", "wayup" ),
                "param_name"  => "content",
                "value"       => esc_html__( "Кейсы – это описание конкретной ситуации или случая в определённой сфере юридической практики. Вы можете ознакомиться с конкретными ситуациями, с которыми сталкивались юристы компании JC","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),

        )
    ) );
}

//Testimonials Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Testimonials_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Testimonials part', 'wayup' ),
        'base'                    => 'wayup_testimonials_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
        	 array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "За нас говорят","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
           	array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "НАШИ КЛИЕНТЫ","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
        )
    ) );
}

//Services Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Services_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Services part', 'wayup' ),
        'base'                    => 'wayup_services_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
        	 array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Наши","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
           	array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "УСЛУГИ","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
        )
    ) );
}

//Services Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_News_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'News part', 'wayup' ),
        'base'                    => 'wayup_news_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
        	 array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Актуальные","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
           	array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "НОВОСТИ","wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
        )
    ) );
}



 ?>