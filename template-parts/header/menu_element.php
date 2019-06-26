<?php ?>

<a
    class="header__menu_element <?php if( $menu_element['current'] ){ echo 'current'; } ?>"
    href="<?php echo $menu_element['href'];?>">
    <?php echo nice_svg($menu_element['icon']); ?>
    <span class="title"><?php echo $menu_element['title']; ?></span>
</a>
