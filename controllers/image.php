<?php

require_once 'models/photos.php';

class Image
{
    public function indexAction()
    {   
        $ImageManager = new ImageManager();
        $ImageManager->displayImage(
                PhotosModel::getOriginal($_GET["img-name"]), 
                PhotosModel::getDerivate($_GET["size"], $_GET["img-name"]), 
                PhotosModel::$imageSizes[$_GET["size"]]
        );
    }
}

