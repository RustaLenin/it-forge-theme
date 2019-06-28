<?php
wp_footer(); ?>

<script type='text/javascript'>
    /* <![CDATA[ */
    window.ajaxurl                        = {"url": "<?php echo site_url(); ?>/wp-admin/admin-ajax.php"};
    window.isUserLoggedIn                 = <?php if ( is_user_logged_in() ) { echo 1; } else { echo 0; } ?>;
    window.currentLocale                  = `<?php echo Locale; ?>`;
    window.ThemeTranslate                 = JSON.parse(`<?php echo json_encode( THEME_LANG ); ?>`);

    <?php if ( is_user_logged_in() ) { ?>
    window.currentUserId                  = <?php echo get_current_user_id(); ?>;
    <?php } ?>

    /* ]]> */
</script>

<script type="module" src="<?php echo get_template_directory_uri() . '/assets/js/index.js'; ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/languages/language.js"></script>

</body>
</html>

