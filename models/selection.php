<?php

class SelectionModel extends Model {
    public $db;
    
    public function get_car()
    {
        $sql = "SELECT * FROM car";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function get_model()
    {
        $sql = "SELECT * FROM model";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function insert_car($data)
    {
         $sql = "INSERT INTO model_data(
            model_id,
            price,
            year,
            fuel,
            engine_volume,
            horsepower,
            phone,
            description)
            VALUES (
            :model_id,
            :price,
            :year,
            :fuel,
            :engine_volume,
            :horsepower,
            :phone,
            :description)";
         
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':model_id', $data['models']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':year', $data['year']);
        $stmt->bindParam(':fuel', $data['fuel']);
        $stmt->bindParam(':engine_volume', $data['volume']);
        $stmt->bindParam(':horsepower', $data['horse']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':description', $data['desc']);
        
        $stmt->execute(); 
    }
}