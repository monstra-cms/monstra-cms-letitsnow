<?php

    // Admin Navigation: add new item
    Navigation::add(__('Let It Snow', 'sandbox'), 'content', 'letitsnow', 10);

    /**
     * Let It Snow admin class
     */
    class LetitsnowAdmin extends Backend
    {
        /**
         * Main Let It Snow admin function
         */
        public static function main()
        {
            if (Request::post('letitsnow_save')) {
                if (Security::check(Request::post('csrf'))) {

                    Option::update('letitsnow_color', Request::post('letitsnow_color'));
                    Option::update('letitsnow_flakes_max_active', (int) Request::post('letitsnow_flakes_max_active'));
                    Option::update('letitsnow_use_twinkle_effect', Request::post('letitsnow_use_twinkle_effect'));
                    Option::update('letitsnow_follow_mouse', Request::post('letitsnow_follow_mouse'));
                    Option::update('letitsnow_snow_stick', Request::post('letitsnow_snow_stick'));
                    Option::update('letitsnow_freeze_on_blur', Request::post('letitsnow_freeze_on_blur'));
                    Option::update('letitsnow_flakes_мax', Request::post('letitsnow_flakes_мax'));
                    Option::update('letitsnow_target_element', Request::post('letitsnow_target_element'));
                    Option::update('letitsnow_use_position_fixed', Request::post('letitsnow_use_position_fixed'));

                } else { die('Request was denied because it contained an invalid security token. Please refresh the page and try again.'); }
            }

            // Display view
            View::factory('letitsnow/views/backend/index')->display();
        }

    }
