<?php

// Declare the interface 'iTemplate'
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implement the interface
// This will work
class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
           // echo "$name\n $value";

           $template = str_replace( $name , $value, $template);
            echo "$template . \n";
        }

        return $template;
    }
}



$temp = new Template();
$temp->setVariable("a",1);
$temp->setVariable("b",2);
$temp->setVariable("c",3);
$temp->getHtml("abc");



