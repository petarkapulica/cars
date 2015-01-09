<?php

require_once 'models/selection.php';

class Selection extends Session {

    function __construct() {
        parent::__construct();
    }
    
    function indexAction()
    {
        $get_car = new SelectionModel();
        $this->_view->cars = $get_car->get_car();
        
        $this->_view->render('selection/index');
    }

}