<?php

$supported_locales = [
    'en' => [
        'value'      => 'en',
        'text'       => 'EN',
        'default'    => true,
        'permission' => 'all',
        'icon'       => 'flag_en_circle'
    ],
    'ru' => [
        'value'      => 'ru',
        'text'       => 'RU',
        'default'    => false,
        'permission' => 'all',
        'icon'       => 'flag_ru_circle'
    ]
];

if ( is_user_logged_in() ) {

    $user_locale = get_user_meta( get_current_user_id(), 'user_locale', true );

    if ( $user_locale ) {
        if ( $supported_locales[$user_locale] )
            $locale = $user_locale;
    } else {
        $locale = 'en';
    }

} else {

    if ( $_COOKIE['locale'] ) {
        if ( $supported_locales[$_COOKIE['locale']] ) {
            $locale = $_COOKIE['locale'];
        }
    } else {
        $locale = 'en';
    }

}

define( 'Locale', $locale );

define ( 'THEME_LANG', json_decode( file_get_contents(THEME_LAN . Locale . '.json'), 'ARRAY_A' ) );

if ( !function_exists('t_') ) {
    function t_( $key, $lang = THEME_LANG ) {
        return $lang[$key] ? $lang[$key] : $key;
    }
}

if ( class_exists( 'NiceTranslate' ) ) {
    NiceTranslate::defineLanguage( Locale );
}
