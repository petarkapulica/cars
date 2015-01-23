<?php

class LandingCarsModel extends Model {
    
    private $randomCars = array();
    
    private $carNumbers;

    public function getRandomCars($carNumbers = 8){
        $this->carNumbers = $carNumbers;
        $this->getRandoms()
            ->getPhotos();
        return $this->randomCars;
    }
    
    private function getRandoms(){
        
        $sql = "SELECT
                    md.id,
                    md.model_id,
                    md.year,
                    md.price,
                    m.model_name,
                    c.type
                FROM 
                    model_data as md
                LEFT JOIN
                    model as m on m.id = md.model_id
                LEFT JOIN
                    car as c on c.id = m.car_id
                ORDER BY RAND()
                LIMIT " . $this->carNumbers;
        
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $this->randomCars  = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $this;
    }
    
    private function getPhotos()
    {
              
        $i=0;
        foreach($this->randomCars as $key=>$value)
        {
            $sql = "SELECT
                        image_name
                    FROM 
                        car_images 
                    WHERE 
                        model_data_id = {$value['id']}
                    LIMIT 1";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $photo = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->randomCars[$i][] = $photo;
            $i++;
        }
    }
    
    

}
