<?php
/*
Plugin Name: Mytory Codeview Page
Description: Get codes by post request, print code, and highlight by highlight.js
Author: mytory
Version: 1.0
Author URI: http://mytory.net
*/
function mcv_script(){
    wp_enqueue_script('mytory-code-view', plugin_dir_url(__FILE__) . 'js.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mcv_script');

function mcv_print_post_form(){
    ?>
    <form class="mcv-code-view-form" action="<? echo plugin_dir_url(__FILE__)?>code-view.php" method="post" target="_blank">
        <input type="hidden" name="pre" class="mcv-code-view-form__input">
    </form>
    <?
}
add_action('get_footer', 'mcv_print_post_form');