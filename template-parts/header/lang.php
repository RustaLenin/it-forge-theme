<?php

global $supported_locales;

$locales_field = [
    'name'             => 'choose_locale',
    'class'            => 'ChangeLocale',
    'data_type'        => 'select',
    'no_min_width'     => true,
    'field_type'       => 'select_list',
    'select_type'      => 'single',
    'validation'       => false,
    'checkboxes'       => false,
    'placeholder'      => '',
    'label'            => 'Choose language',
    'show_label'       => false,
    'size'             => 'tiny',
    'can_be_empty'     => false,
    'value'            => $supported_locales[Locale]['value'],
    'content'          => $supported_locales[Locale]['text'],
    'icon'             => $supported_locales[Locale]['icon'],
    'callback'         => "change_locale()",
    'selections'       => $supported_locales
];

echo nice_field( $locales_field );