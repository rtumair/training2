<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/20/16
 * Time: 10:43 AM
 */

/**
 * @file
 * Wrapper for Smarty Template Engine
 */

require_once('Smarty/Smarty.class.php');
require_once('smtemplate_config.php');


class SMTemplate{

    private $_smarty;

    function __construct(){
        $this->_smarty = new Smarty();

        global $smtemplate_config;
        $this->_smarty->template_dir = $smtemplate_config['template_dir'];
        $this->_smarty->compile_dir = $smtemplate_config['compile_dir'];
        $this->_smarty->cache_dir = $smtemplate_config['cache_dir'];
        $this->_smarty->config_dir = $smtemplate_config['configs_dir'];

        print_r($this->_smarty->template_dir); echo "<br/><br/>";
        print_r($this->_smarty->compile_dir); echo "<br/><br/>";
        print_r($this->_smarty->cache_dir ); echo "<br/><br/>";
        print_r($this->_smarty->config_dir);
        exit(0);

    }

    function render($template){
        $this->_smarty->display($template . '.tpl');
    }
}