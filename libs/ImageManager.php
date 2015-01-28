<?php

class ImageManager {

    function __construct() {
        
    }
    
    public function displayImage($original, $derivative, $dimension)
    {
        header("Content-Type: image/jpeg");
        !file_exists($derivative)
            ? $this->createDerivative($original, $derivative, $dimension) 
            : $this->showDerivative($derivative);    
    }
    
    private function createDerivative($original, $derivative, $newWidth)
    {
        List($Width, $Height) = getimagesize($original);
        $newHeight = $this->calculateHeight($newWidth, $Width, $Height);
        $tmpImage = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($tmpImage, $this->getImageFromString($original), 0, 0, 0, 0, $newWidth, $newHeight, $Width, $Height);

        imagejpeg($tmpImage);
        imagejpeg($tmpImage, $derivative);
    }
    
    private function showDerivative($derivative)
    {
        imagejpeg($this->getImageFromString($derivative));
    }
    
    private function calculateHeight($newWidth, $Width, $Height)
    {
        return $Height * ($newWidth / $Width);
    }
    
    private function getImageFromString($imgUrl)
    {   
        $content = file_get_contents($imgUrl); 
        return imagecreatefromstring($content);        
    }
}