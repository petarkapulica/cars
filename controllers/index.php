<?php

require_once 'models/selection.php';
require_once 'models/cars.php';

class Index
{
  
    public function indexAction()
    {   
        $randomCars = new CarModel();
        $this->view->randomCars = $randomCars->getRandomCars(8);
        
        //for search form
        $selectionModel = new SelectionModel();
        $this->view->cars = $selectionModel->getCar();
        
        $this->view->render();
    }
    
    
}

