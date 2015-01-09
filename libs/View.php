<?php

class View {
    
    private $header = 'header';
    private $footer = 'footer';

    public function render($name, $noInclude = false , $otherHeader = false)
    {
        if($noInclude)
        {
            require 'views/' . $name . '.php';
        }
        elseif($otherHeader)
        {
            $name2 = substr($name, 0, -6);
            require 'views/' . $name2 . "/" . $otherHeader . '.php';
            require 'views/' . $name . '.php';
            require 'views/' . $this->footer . '.php'; 
        }
        else
        {
            require 'views/' . $this->header . '.php';
            require 'views/' . $name . '.php';
            require 'views/' . $this->footer . '.php'; 
        }
    }
    
    public function setHeader($header){
        $this->header = $header;
        return $this;
    }
    
    
    
}