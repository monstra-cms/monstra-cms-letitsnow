<?php

    /**
     *  Let It Snow plugin
     *
     *  @package Monstra
     *  @subpackage Plugins
     *  @author Romanenko Sergey / Awilum
     *  @copyright 2012 - 2014 Romanenko Sergey / Awilum
     *  @version 1.1.0
     *
     */

    // Register plugin
    Plugin::register( __FILE__,
                    __('Let It Snow', 'letitsnow'),
                    __('Let it Snow Plugin for Monstra CMS', 'letitsnow'),
                    '1.1.0',
                    'Awilum',
                    'http://monstra.org/');

      // Add hooks
    Action::add('theme_footer', 'Snow::_themeFooter');

    if (Session::exists('user_role') && in_array(Session::get('user_role'), array('admin', 'editor'))) {

        // Include Admin
        Plugin::Admin('letitsnow');

    }

    /**
     *	Let It Snow class
     */
    class Snow
    {
        public static function _themeFooter()
        {
            echo ('
               <script type="text/javascript" src="'.Option::get('siteurl').'plugins/letitsnow/js/snowstorm-min.js"></script>
               <script type="text/javascript">
               snowStorm.snowColor = "'.Option::get('letitsnow_color').'";
               snowStorm.flakesMaxActive = '.Option::get('letitsnow_flakes_max_active').';
               snowStorm.useTwinkleEffect = '.Option::get('letitsnow_use_twinkle_effect').';
               snowStorm.followMouse = '.Option::get('letitsnow_follow_mouse').';
               snowStorm.snowStick = '.Option::get('letitsnow_snow_stick').';
               snowStorm.flakesMax = '.Option::get('letitsnow_flakes_мax').';
               snowStorm.freezeOnBlur = '.Option::get('letitsnow_freeze_on_blur').';
               snowStorm.targetElement = '.Option::get('letitsnow_target_element').';
               snowStorm.usePositionFixed = '.Option::get('letitsnow_use_position_fixed').';
               </script>
            ');
        }

    }
