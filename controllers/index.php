<?php


class Index
{
    private $_view;
    
    public function __construct()
    {
        $this->_view = new View();
    }
 
    
    public function indexAction($param)
    {        
        $this->_view->render('index/index');
    }
    
}

