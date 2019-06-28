function t_( key, lang = ThemeTranslate ) {
    return lang[key];
}

function change_locale() {

    let locale = Nice.form.getFieldValue('.ChangeLocale');

    if (locale !== currentLocale) {
        if ( isUserLoggedIn ) {

            let request_data = {
                'action': 'theme_user',
                'command': 'change_locale',
                'payload': {
                    'id': currentUserId,
                    'locale': locale
                }
            };
            Nice.ajaxPost( request_data, false ).then( function ( answer ) {
                if ( answer['result'] === 'success' ) {
                    location.reload();
                }
            });


        } else {
            Cookies.set('locale', locale);
            location.reload();
        }
    } else {
        console.log('Same locale');
    }

}