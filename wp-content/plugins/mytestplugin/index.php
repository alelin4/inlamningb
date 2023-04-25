<?php
/*
Plugin Name: mytestplugin
*/


function welcome() {
    echo"Welcome to my new sport shop";
}
add_action('welcomehook', 'welcome');
?>
