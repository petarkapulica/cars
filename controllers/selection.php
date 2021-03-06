<?php

require_once 'models/selection.php';
require_once 'models/photos.php';

class Selection extends Session {

    function __construct() {
        parent::__construct();
    }
    
    function indexAction()
    {
        $selectionModel = new SelectionModel();
        if (isset($_POST['submit'])) 
        {
            $carId = $selectionModel->insertCar($_POST);
            $photosModel = new PhotosModel();
            $photosModel->upload($carId, $_FILES);
        }
        
        $this->view->cars = $selectionModel->getCar();
        
        $this->view->setLayout("admin");
        $this->view->render();
    }
    
    function cartypeAction()
    {
        $selectionModel = new SelectionModel();
        echo json_encode($selectionModel->getModel());
    }
    
    function uploadAction()
    {
        $uploaddir = "public/images/cars/";
        $fileName = $_FILES["car_images"]["name"];
        
        $uploadfile = $uploaddir . basename($fileName);
        
        if (move_uploaded_file($_FILES['car_images']['tmp_name'], $uploadfile)) 
        {
            echo json_encode(array(
                "status" => true,
                "photo_name" => $fileName
            ));
        } else 
        {
            echo json_encode(array(
                "status" => false,
                "message" => 'file could not be uploaded'
            ));
        }
    }

}