<?php

class CarModel extends Model {

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
    
    public function getCars($data)
    {
        $sql = "SELECT
                    *
                FROM 
                    model_data as md
                LEFT JOIN
                    model as m on m.id = md.model_id
                LEFT JOIN
                    car as c on c.id = m.car_id
                WHERE 1=1";
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
        
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    
    
}


?>