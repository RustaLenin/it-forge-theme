<?php

Class ITForge_User {

    public static function change_locale( $user_data )
    {

        $required = ['locale', 'id'];

        $answer = NiceResponse::default_answer();
        if ( !$user_data ) {
            $answer['message'] = 'No user data received';
        } else {

            foreach ($required as $key) {
                if ( !$user_data[$key] ) {
                    $answer['message'] = 'No ' . $key . ' received';
                    return $answer;
                }
            }

            $update_result = update_user_meta( $user_data['id'], 'user_locale', $user_data['locale'] );

            if ( $update_result ) {
                $answer = NiceResponse::update_answer($answer, [
                    'result' => 'success',
                    'message' => 'locale changed',
                    'update_result' => $update_result
                ]);
            } else {
                $answer['message'] = 'Update failed';
            }

        }

        return $answer;
    }

    public static function isUserAdmin( $id = false )
    {
        $userID = $id ? $id : get_current_user_id() ;
        return user_can( $userID, 'administrator' ) ? true : false;
    }

    public static function ajax_handler()
    {

        $answer = NiceResponse::default_answer();

        if (!$_POST) {
            $answer['message'] = 'No request received';
        } else {
            if (!$_POST['command']) {
                $answer['message'] = 'No command received';
            } else {
                if (!$_POST['payload']) {
                    $answer['message'] = 'No payload received';
                } else {

                    if ( method_exists(__CLASS__, $_POST['command'])) {
                        $command = $_POST['command'];
                        $answer = self::$command($_POST['payload']);
                    } else {
                        $answer['message'] = 'Unknown command ¯\_(ツ)_/¯';
                    }

                }
            }
        }

        echo json_encode($answer);
        wp_die();

    }

}

if ( !function_exists('isUserAdmin') ) {
    function isUserAdmin( $id = false ) {
        return ITForge_User::isUserAdmin( $id );
    }
}

add_action('wp_ajax_nopriv_theme_user', ['ITForge_User', 'ajax_handler'] );
add_action('wp_ajax_theme_user', ['ITForge_User', 'ajax_handler'] );