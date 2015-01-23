<?php

require_once 'models/selection.php';
require_once 'models/cars.php';

class Search extends Session {

    function __construct() {
        parent::__construct();
    }
    
    function indexAction()
    {
        $selectionModel = new SelectionModel();
        $this->view->cars = $selectionModel->get_car();
        
        $searchedCars = new CarModel();
        $this->view->searchedCars = $searchedCars->getCars($_GET);
        
        $this->view->render();
    }

}