<h2><?php echo __('Let It Snow', 'letitsnow'); ?></h2>
<br>
<?php
    echo (
        Form::open().
        Form::hidden('csrf', Security::token())
    );
?>
<table class="table table-bordered">
    <tbody>
        <tr>
            <td>
                <?php
                    echo (
                        Form::label('letitsnow_color', __('Snow Color', 'letitsnow')).
                        Form::input('letitsnow_color', Option::get('letitsnow_color'), array('class' => 'input-large'))
                    );
                ?>
            </td>
            <td>
                <?php echo __('Set your snow color here. e.g. white, red, blue, etc...', 'letitsnow'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo (
                        Form::label('letitsnow_flakes_max_active', __('Flakes max active', 'letitsnow')).
                        Form::input('letitsnow_flakes_max_active', Option::get('letitsnow_flakes_max_active'), array('class' => 'input-large'))
                    );
                ?>
            </td>
            <td>
                <?php echo __('Sets the limit of "falling" snowflakes (eg. moving on the screen, thus considered to be active.)', 'letitsnow'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo (
                        Form::label('letitsnow_use_twinkle_effect', __('Twinkle Effect', 'letitsnow')).
                        Form::select('letitsnow_use_twinkle_effect', array('true'=>'true', 'false'=>'false'), Option::get('letitsnow_use_twinkle_effect'), array('class' => 'input-large'))
                    );
                ?>
            </td>
            <td>
                <?php echo __('Allow snow to randomly "flicker" in and out of view while falling.', 'letitsnow'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo (
                        Form::label('letitsnow_follow_mouse', __('Follow Mouse', 'letitsnow')).
                        Form::select('letitsnow_follow_mouse', array('true'=>'true', 'false'=>'false'), Option::get('letitsnow_follow_mouse'), array('class' => 'input-large'))
                    );
                ?>
            </td>
            <td>
                <?php echo __('Allows snow to move dynamically with the "wind", relative to the mouse\'s X (left/right) coordinates.', 'letitsnow'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo (
                        Form::label('letitsnow_snow_stick', __('Snow Stick', 'letitsnow')).
                        Form::select('letitsnow_snow_stick', array('true'=>'true', 'false'=>'false'), Option::get('letitsnow_snow_stick'), array('class' => 'input-large'))
                    );
                ?>
            </td>
            <td>
                <?php echo __('Allows the snow to "stick" to the bottom of the window. When off(false), snow will never sit at the bottom.', 'letitsnow'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo (
                        Form::label('letitsnow_freeze_on_blur', __('Freeze on blur', 'letitsnow')).
                        Form::select('letitsnow_freeze_on_blur', array('true'=>'true', 'false'=>'false'), Option::get('letitsnow_freeze_on_blur'), array('class' => 'input-large'))
                    );
                ?>
            </td>
            <td>
                <?php echo __('Stops the snow effect when the browser window goes out of focus, eg., user is in another tab. Saves CPU, nicer to user.', 'letitsnow'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo (
                        Form::label('letitsnow_flakes_мax', __('Flakes Max', 'letitsnow')).
                        Form::input('letitsnow_flakes_мax', Option::get('letitsnow_flakes_мax'), array('class' => 'input-large'))
                    );
                ?>
            </td>
            <td>
                <?php echo __('Sets the maximum number of snowflakes that can exist on the screen at any given time.', 'letitsnow'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo (
                        Form::label('letitsnow_target_element', __('Target Element', 'letitsnow')).
                        Form::input('letitsnow_target_element', Option::get('letitsnow_target_element'), array('class' => 'input-large'))
                    );
                ?>
            </td>
            <td>
                <?php echo __('An HTML element which snow will be appended to (default: document body.) Can be an element ID string eg. \'myDiv\'.', 'letitsnow'); ?>

            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo (
                        Form::label('letitsnow_use_position_fixed', __('Position Fixed', 'letitsnow')).
                        Form::select('letitsnow_use_position_fixed', array('true'=>'true', 'false'=>'false'), Option::get('letitsnow_use_position_fixed'), array('class' => 'input-large'))
                    );
                ?>
            </td>
            <td>
                <?php echo __('If enabled(true), snow not affected by window scroll. May increase CPU load, disabled(false) by default.', 'letitsnow'); ?>
            </td>
        </tr>
    </tbody>
</table>

<?php
    echo (
        Form::submit('letitsnow_save', __('Save', 'letitsnow'), array('class' => 'btn')).
        Form::close()
    );
?>
