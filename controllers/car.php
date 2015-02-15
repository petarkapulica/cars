<?php

require_once 'models/cars.php';

class Car extends Session {

    function __construct() {
        parent::__construct();
    }

    function detailsAction($params)
    {
        if(!$params)
        {
             require_once 'views/error/index.php';die;
        }
        $carId  = $params[0];
        $car = new CarModel();
        $this->view->car = $car->getDetails($carId);
        $this->view->images = $car->getImages($carId);
        
        $this->view->render();
    }

}

