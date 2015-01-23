<?php

class View {
    
    private $header = 'header';
    private $footer = 'footer';
    private $layout = "main";

    public function render()
    {        
        require_once 'views/layouts/'. $this->layout .'.php';
    }
    
    private function display()
    {        
        require_once 'views/'.$this->path.'.php'; 
    }


    public function setHeader($header){
        $this->header = $header;
        return $this;
    }
    
    public function setLayout($value)
    {
        $this->layout = $value;
    }
    
    
    
}