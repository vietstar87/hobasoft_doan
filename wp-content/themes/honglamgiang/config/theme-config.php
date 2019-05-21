<?php

/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if (!class_exists('Redux')) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "theme";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name' => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name' => $theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version' => $theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type' => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu' => true,
    // Show the sections below the admin menu item or not
    'menu_title' => __('May Studio', 'honglamgiang'),
    'page_title' => __('May Studio', 'honglamgiang'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key' => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography' => true,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar' => false,
    // Show the panel pages on the admin bar
    'admin_bar_icon' => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority' => 50,
    // Choose an priority for the admin bar menu
    'global_variable' => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode' => false,
    // Show the time the page took to load, etc
    'update_notice' => false,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer' => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

    // OPTIONAL -> Give you extra features
    'page_priority' => null,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent' => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions' => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon' => '',
    // Specify a custom URL to an icon
    'last_tab' => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon' => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug' => '_options',
    // Page slug used to denote the panel
    'save_defaults' => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show' => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark' => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export' => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time' => 60 * MINUTE_IN_SECONDS,
    'output' => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag' => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database' => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

    'use_cdn' => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    //'compiler'             => true,

    // HINTS
    'hints' => array(
        'icon' => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'light',
            'shadow' => true,
            'rounded' => false,
            'style' => '',
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect' => array(
            'show' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'mouseover',
            ),
            'hide' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'click mouseleave',
            ),
        ),
    )
);

// Panel Intro text -> before the form
if (!isset($args['global_variable']) || $args['global_variable'] !== false) {
    if (!empty($args['global_variable'])) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace('-', '_', $args['opt_name']);
    }
    $args['intro_text'] = sprintf(__('<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'honglamgiang'), $v);
} else {
    $args['intro_text'] = __('<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'honglamgiang');
}


/*
 *
 * ---> START SECTIONS
 *
 */

/*

    As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


 */

// -> START Basic Fields
Redux::setSection($opt_name, array(
    'title' => __('Company', 'honglamgiang'),
    'id' => 'basic',
    'desc' => __('Cấu hình các trường thông tin cơ bản', 'honglamgiang'),
    'icon' => 'el el-home'
));

Redux::setSection($opt_name, array(
    'title' => __('Thông tin công ty', 'honglamgiang'),
    'desc' => __('Thôgn tin công ty và người liên hệ'),
    'id' => 'basic-company',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'company-logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => __('Logo', 'honglamgiang'),
        ),
        array(
            'id' => 'company-name',
            'type' => 'text',
            'title' => __('Tên công ty', 'honglamgiang'),
            'desc' => __('Điền tên công ty của bạn', 'honglamgiang'),
            'default' => 'HongLamGiang Co. LTD',
        ),
        array(
            'id' => 'company-address',
            'type' => 'text',
            'title' => __('Địa chỉ công ty', 'honglamgiang'),
            'desc' => __('Điền địa chỉ công ty', 'honglamgiang'),
            'default' => '5th Floor, 166 Hue Street, Hai Ba Trung Dist., Ha Noi',
        ),
        array(
            'id' => 'company-hotline',
            'type' => 'text',
            'title' => __('Hotline', 'honglamgiang'),
            'desc' => __('Điền hotline', 'honglamgiang'),
            'default' => '0946688636',
        ),
        array(
            'id' => 'company-phone',
            'type' => 'text',
            'title' => __('Phone', 'honglamgiang'),
            'desc' => __('Điền Phone', 'honglamgiang'),
            'default' => '0946688636',
        ),
        array(
            'id' => 'company-email',
            'type' => 'text',
            'title' => __('Địa chỉ Email', 'honglamgiang'),
            'desc' => __('Điền địa chỉ Email', 'honglamgiang'),
            'default' => 'support@honglamgiang.com',
        ),
        array(
            'id' => 'company-workinghours',
            'type' => 'text',
            'title' => __('Giờ làm việc', 'honglamgiang'),
            'desc' => __('Giờ làm việc', 'honglamgiang'),
            'default' => 'Monday - Friday - 9am / 6pm',
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => __('Thông tin mạng xã hội', 'honglamgiang'),
    'desc' => __('Địa chỉ mạng xã hội'),
    'id' => 'basic-social',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'company-facebook',
            'type' => 'text',
            'title' => __('Facebook', 'honglamgiang'),
            'desc' => __('Điền địa chỉ Facebook', 'honglamgiang'),
            'default' => 'http://fb.com/vietnx87',
        ),
        array(
            'id' => 'company-youtube',
            'type' => 'text',
            'title' => __('Youtube', 'honglamgiang'),
            'desc' => __('Điền địa chỉ Youtube', 'honglamgiang'),
            'default' => 'http://youtube.com/vietnx87',
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => __('Config Link', 'honglamgiang'),
    'id' => 'basic-config-link',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'link-check-status',
            'type' => 'text',
            'title' => __('Link Check Status', 'honglamgiang'),
        ),
        array(
            'id' => 'link-apply-visa',
            'type' => 'text',
            'title' => __('Link Apply Visa', 'honglamgiang'),
        ),
    )
));


Redux::setSection($opt_name, array(
    'title' => __('Trang chủ', 'honglamgiang'),
    'id' => 'home',
    'desc' => __('Cấu hình trang chủ', 'honglamgiang'),
    'icon' => 'el el-home',
));
Redux::setSection( $opt_name, array(
    'title'      => __( 'Slides', 'honglamgiang' ),
    'id'         => 'additional-slides',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'          => 'opt-slides',
            'type'        => 'slides',
            'title'       => __( 'Slides', 'honglamgiang' ),
            'placeholder' => array(
                'title'       => __( 'This is a title', 'honglamgiang' ),
                'description' => __( 'Description Here', 'honglamgiang' ),
                'url'         => __( 'Give us a link!', 'honglamgiang' ),
            ),
        ),
    )
) );

Redux::setSection($opt_name, array(
    'title' => __('Chat', 'honglamgiang'),
    'id' => 'footer',
    'desc' => __('Cấu hình trang chủ', 'honglamgiang'),
    'icon' => 'el el-home',
));

Redux::setSection($opt_name, array(
    'title' => __('Facebook Chat', 'honglamgiang'),
    'desc' => __('Step 1: Go to your Fanpage → Settings → Messenger Platform. In the Whitelisted Domains, enter your domains of your website(s). Then click Save to complete.'),
    'id' => 'facebook-chat',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'facebook-app-id',
            'type'     => 'text',
            'title' => __('Facebook App ID', 'honglamgiang'),
            'desc' => 'https://developers.facebook.com/apps'
        ),
        array(
            'id' => 'facebook-page-id',
            'type'     => 'text',
            'title' => __('Facebook Page ID', 'honglamgiang'),
            'desc' => 'https://findmyfbid.com/'
        ),   
    )
));

Redux::setSection($opt_name, array(
    'title' => __('Zalo Chat', 'honglamgiang'),
    'id' => 'zalo-chat',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'zalo-page-id',
            'type'     => 'text',
            'title' => __('Zalo Page ID', 'honglamgiang'),
            'desc' => 'http://developers.zalo.me/oa/openapi/manage/oas'
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => __('Hotline Call', 'honglamgiang'),
    'id' => 'hotline-call',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'hotline-call',
            'type'     => 'text',
            'title' => __('Hotline Call', 'honglamgiang'),
        ),
    )
));
