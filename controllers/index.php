<?php

require_once 'models/landing-cars.php';
require_once 'models/selection.php';


class Index
{
    private $_view;
    
    public function __construct()
    {
        $this->_view = new View();
    }
 
    
    public function indexAction()
    {   
        $randomCars = new LandingCarsModel();
        $this->_view->randomCars = $randomCars->getRandomCars();
        
        $selectionModel = new SelectionModel();
        $this->_view->cars = $selectionModel->get_car();
        
        $this->_view->render('index/index');
    }
    
    
}

