<?php

// Llamado a la clase Smarty
require('C:/wamp/www/Smarty/libs/Smarty.class.php');

class Smarty_Setup extends Smarty
{
    
    public function SmartySetUp ()
    {
        //Llamado al constructor de la clase smarty
        $this->__construct();
        
        //asignacion de directorios 
        $this->template_dir = 'templates';
        $this->compile_dir = 'templates_c';
        $this->config_dir = 'configs';
        $this->cache_dir = 'cache';
        
        $this->caching = true;
        $this->assing('app_name','Test');
        
    }
    
}

?>
