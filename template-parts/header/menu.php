<?php

$uri_parts = explode('/', $_SERVER['REQUEST_URI'] );

$model = [
    'main' => [
        'title'      => t_('Main'),
        'icon'       => ['id' => 'home', 'size' => 'tiny'],
        'href'       => get_bloginfo('url'),
        'current'    => is_front_page(),
        'permission' => 'all',
    ],
    'team' => [
        'title'      => t_('Team'),
        'icon'       => ['id' => 'users', 'size' => 'tiny'],
        'href'       => get_site_url() .'/team',
        'current'    => in_array('team', $uri_parts ),
        'permission' => 'all',
    ],
    'portfolio' => [
        'title'      => t_('Portfolio'),
        'icon'       => ['id' => 'portfolio', 'size' => 'tiny'],
        'href'       => get_site_url() .'/portfolio',
        'current'    => in_array('portfolio', $uri_parts ),
        'permission' => 'all',
    ],
    'service' => [
        'title'      => t_('Service'),
        'icon'       => ['id' => 'code', 'size' => 'tiny'],
        'href'       => get_site_url() .'/service',
        'current'    => in_array('service', $uri_parts ),
        'permission' => 'all',
    ],
    'contacts' => [
        'title'      => t_('Contacts'),
        'icon'       => ['id' => 'at', 'size' => 'tiny'],
        'href'       => get_site_url() .'/contacts',
        'current'    => in_array('contacts', $uri_parts ),
        'permission' => 'all',
    ],
];

?>

<div class="header_menu">

    <?php foreach ($model as $name => $menu_element) {
        include('menu_element.php');
    } ?>

</div>
