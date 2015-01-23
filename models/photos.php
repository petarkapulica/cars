<?php

class PhotosModel extends Model {
    
    private $uploadDir = "public/images/cars/";
    
    private $photos = array();

    public function upload($carId, $files){
        $this->uploadPhotos($files)
             ->insert($carId);   
    }
    
    private function uploadPhotos($files)
    {
        foreach ($files as $file)
        {
            $this->doUploadToServer($file);
            
        }
        
        return $this;         
    }

    private function doUploadToServer($file)
    {         
        $photoName = md5(basename($file["name"]).time()) . "." . $this->getExtension($file);
        $uploadfile = $this->uploadDir . $photoName;
        move_uploaded_file($file['tmp_name'], $uploadfile) 
            ? $this->photos[] = $photoName
            : $this->throwError();
    }
    
    private function getExtension($file) {
        return pathinfo($file["name"], PATHINFO_EXTENSION);
    }
    
    private function throwError()
    {
        echo "Could not upload photo"; die;
    }
    
    private function insert($carId)
    {   
        
        foreach ($this->photos as $photo){
            $sql = "INSERT 
                        INTO 
                            car_images
                            (
                                model_data_id,
                                image_name
                            )
                        VALUES 
                            (
                                :model_data_id,
                                :image_name
                            )";
        
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':model_data_id', $carId);
            $stmt->bindParam(':image_name', $photo);

            $stmt->execute();
        }
        
    }

}
