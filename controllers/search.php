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
        $this->view->cars = $selectionModel->getCar();
        
        $searchedCars = new CarModel();
        
        $this->view->cars = $searchedCars->searchCars($_GET);
        
        $this->view->searchedCars = $searchedCars->searchCars($_GET);
        $this->view->count = $searchedCars->carsNumber;
        $this->view->perPage = $searchedCars->perPage;
        
        $this->view->render();
    }

}