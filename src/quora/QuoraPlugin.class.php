<?php

namespace Quora;

class QuoraPlugin{
    
    /* In this WordPress plugin class, we try to use only WP action commands
       to call other classes. This is the only class we don't ever test.
    */
    
    public function activateSettingsPage(){
        \add_action(
            'admin_menu',
            function(){
                $slug = plugin_basename( __FILE__ );
                \add_menu_page(
                    "Quora",
                    "Quora",
                    'delete_posts',
                    $slug,
                    array(
                        new SettingsPage, 
                        'echoOutput'
                    )
                );
            }
        );
    }
}

