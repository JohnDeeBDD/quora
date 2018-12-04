<?php

namespace Quora;

class SettingsPage{
    
    public function echoOutput(){
        
        //I like to do WordPress strings like this.
        //I only compile the output view this way, any processing should go elsewhere.
        
        //WordPress l18n, I make the variable name like the English translation
        $QuoraRules = __('Quora Rules!', 'quora');
        
        //I use heredoc to compiles the general shape of the output.
        $output = <<<output
$QuoraRules
output;

    echo($output);

    }
}

