<?php

namespace Quora;

class QuoraPlugin{
    
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
                        new SettingsPage(), 
                        'echoOutput'
                    )
                );
            }
        );
    }
}

