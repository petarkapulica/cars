<?php

require_once 'models/selection.php';

class Selection extends Session {

    function __construct() {
        parent::__construct();
    }
    
    function indexAction()
    {
        $get_car = new SelectionModel();
        if (isset($_POST['submit'])) 
        {
        $get_car->insert_car($_POST);
        }
        
        $this->_view->cars = $get_car->get_car();
        
        $this->_view->render('selection/index');
    }
    
    function cartypeAction()
    {
        $car_model = new SelectionModel();
        echo json_encode($car_model->get_model());
    }

}