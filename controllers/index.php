<?php

require_once 'models/landing-cars.php';
require_once 'models/selection.php';

class Index
{
  
    public function indexAction()
    {   
        $randomCars = new LandingCarsModel();
        $this->view->randomCars = $randomCars->getRandomCars(8);
        
        $selectionModel = new SelectionModel();
        $this->view->cars = $selectionModel->get_car();
        
        $this->view->render();
    }
    
    
}

