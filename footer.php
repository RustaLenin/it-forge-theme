<?php

include ('template-parts/footer-content.php');

?>

</div>

<?php wp_footer(); ?>

<script type='text/javascript'>
    /* <![CDATA[ */
    window.ajaxurl                        = {"url": "<?php echo site_url(); ?>/wp-admin/admin-ajax.php"};
    window.isUserLoggedIn                 = <?php if ( is_user_logged_in() ) { echo 1; } else { echo 0; } ?>;
    <?php if ( is_user_logged_in() ) { ?>
    window.currentUserId                  = <?php echo get_current_user_id(); ?>;
    <?php } ?>
    window.currentLocale                  = `<?php echo Locale; ?>`;
    /* ]]> */
</script>

</body>
</html>

