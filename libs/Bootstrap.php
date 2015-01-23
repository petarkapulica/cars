<?php

class Bootstrap {
    
    private $_url = array();
    private $_controller = "index";
    private $_action = "index";
    private $_params = null;

    function __construct() {  
       $url = $_SERVER["REQUEST_URI"]; 
       $url = explode("?",$url);
       $url = explode("/",$url[0]);
       foreach ($url as $u)
       {
           if(!empty($u) && $u!=='cars')
           {
                $this->_url[] = $u;
           }
       }
       
    }
    
    public function run()
    {
        $this->_setController();
        $this->_setAction();
        $this->_setParams();
        $this->_includeController();
        $this->_doAction();
    }
    
    private function _setController()
    {        
        if(!empty($this->_url))
        {        
           $this->_controller = array_shift( $this->_url); 
        }
      
    }
    
    private function _setAction()
    {   
        if(!empty($this->_url))
        {
           $this->_action = array_shift( $this->_url);            
        }
    }
    
    private function _setParams()
    { 
        $this->_params = $this->_url;
    }
    
    
    private function _includeController()
    {      
        $controllerPath = 'controllers/' . $this->_controller . '.php';     
        if(file_exists($controllerPath))
        {   
            require($controllerPath);
        }
        else
        {
            require('controllers/error.php');
            $this->_controller='Error';
        }
    }
    
    
    private function _doAction()
    {            
        $controller = new $this->_controller(); 
        $action = $this->_action . "Action";        
        
        $controller->view = new View();
        $controller->view->path = $this->_controller.'/'.$this->_action;

        if(method_exists($controller, $action))
        {   
            $controller->{$action}($this->_params); 
        }
        else
        {
            require('controllers/error.php');
        }
    }

}

