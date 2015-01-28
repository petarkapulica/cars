<?php

class CarModel extends Model {
    
    public $perPage = 5;
    public $carsNumber;
    
    private $foundCars = [];
    private $foundCarsImages = [];
    
    public function getRandomCars($carsNumber)
    {
        $this->carsNumber = $carsNumber;
        $this->getRandom()
             ->findImages()
             ->mergeCarsImages();
        
        return $this->foundCars;
    }
    
    
    public function searchCars($data)
    {
        $this->getSearchedCars($data)
             ->findImages()
             ->mergeCarsImages();
        
        return $this->foundCars;
    }
    
    private function getRandom()
    {
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
                LIMIT " . $this->carsNumber;
        
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $this->foundCars = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $this;
    }

    private function getSearchedCars($data)
    {
        $carsNumber = $this->countFoundCars($data)["total"];
        $this->carsNumber = $carsNumber;
        
        $sql = "SELECT
                    md.id,
                    md.model_id,
                    md.year,
                    md.km,
                    md.config,
                    md.fuel,
                    md.fixed,
                    md.replace,
                    md.engine_volume,
                    md.horsepower,
                    md.motor,
                    md.drive,
                    md.transmission,
                    md.doors,
                    md.seats,
                    md.wheel,
                    md.ac,
                    md.color,
                    md.intmat,
                    md.intcol,
                    md.regdate,
                    md.origin,
                    md.damage,
                    md.phone,
                    md.description,
                    md.price,
                    c.type,
                    m.model_name
                FROM 
                    model_data as md
                LEFT JOIN
                    model as m on m.id = md.model_id
                LEFT JOIN
                    car as c on c.id = m.car_id
                WHERE 1=1";
      
        $sql .= $this->generateSearchCondition($data);
        $sql .= $this->getLimit($data);
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $this->foundCars = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $this;
    }
    
    private function getLimit($data)
    {
        return !empty($data['page']) 
            ? " LIMIT " . ($this->perPage) * ( $data['page'] - 1) . ", " . $this->perPage
            : " LIMIT " . $this->perPage;   
    }
    
    private function countFoundCars($data)
    {
        $sql = "SELECT 
                count(*) as total
                FROM 
                    model_data as md
                LEFT JOIN
                    model as m on m.id = md.model_id
                LEFT JOIN
                    car as c on c.id = m.car_id
                WHERE 1=1";
        
        $sql .= $this->generateSearchCondition($data);
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute();   
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    private function generateSearchCondition($data)
    {
        $sql = '';
        
        if(isset($data['car']))
        {
            $sql .= " AND c.id = {$data['car']}";
        }
        if(isset($data['model']))
        {
            $sql .= " AND md.model_id = {$data['model']}";
        }
        if(isset($data['body']))
        {
            $sql .= " AND md.config = '{$data['body']}'";
        }
        if(isset($data['numberlow']) && !empty($data['numberlow']))
        {
            $sql .= " AND md.price >= {$data['numberlow']}";
        }
        if(isset($data['numberhigh']) && !empty($data['numberhigh']))
        {
            $sql .= " AND md.price <= {$data['numberhigh']}";
        }
        if(isset($data['yearlow']) && !empty($data['yearlow']))
        {
            $sql .= " AND md.year >= {$data['yearlow']}";
        }
        if(isset($data['yearhigh']) && !empty($data['yearhigh']))
        {
            $sql .= " AND md.year <= {$data['yearhigh']}";
        }
        if(isset($data['fuel']))
        {
            $sql .= " AND md.fuel = '{$data['fuel']}'";
        }
        
        return $sql;
    }
    
    private function findImages()
    {        
        $carIds = implode(",", $this->getCarIds());        
        $sql = "SELECT
                *
            FROM 
                car_images
            WHERE
                model_data_id  
            IN
               ({$carIds})";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $this->foundCarsImages = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $this;      
    }
    
    private function mergeCarsImages()
    {
        $cars = $this->foundCars;
        $images = $this->foundCarsImages;
        $tmpCars = [];

        foreach ($cars as $car) 
        {
            foreach($images as $image)
            {
                if($image["model_data_id"] == $car["id"] )
                {
                    $car["images"][] = $image["image_name"];
                }
            }
            $tmpCars[] = $car;
        }
        $this->foundCars = $tmpCars;
        return $this;
    }


    private function getCarIds()
    {   
        $carIds = [];
        foreach ($this->foundCars as $car)
        {
            $carIds[] = $car["id"];
        }
        return $carIds;
    }
    
    
    
    // Details and images about specific car
    public function getDetails($carId)
    {
        $sql = "SELECT
                    *
                FROM 
                    model_data as md
                LEFT JOIN
                    model as m on m.id = md.model_id
                LEFT JOIN
                    car as c on c.id = m.car_id
                WHERE
                    md.id = {$carId} ";
        
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getImages($carId)
    {
        $sql = "SELECT
                    *
                FROM 
                    car_images
                WHERE
                    model_data_id = {$carId} ";
        
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}