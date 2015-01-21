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
                year,
                km,
                config,
                fuel,
                fixed,
                `replace`,
                engine_volume,
                horsepower,
                motor,
                drive,
                transmission,
                doors,
                seats,
                wheel,
                ac,
                color,
                intmat,
                intcol,
                regdate,
                origin,
                damage,
                phone,
                description,
                price
            )
            VALUES (
                :model_id,
                :year,
                :km,
                :config,
                :fuel,
                :fixed,
                :replace,
                :engine_volume,
                :horsepower,
                :motor,
                :drive,
                :transmission,
                :doors,
                :seats,
                :wheel,
                :ac,
                :color,
                :intmat,
                :intcol,
                :regdate,
                :origin,
                :damage,
                :phone,
                :description,
                :price
             )";
         
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':model_id', $data['model_id']);
        $stmt->bindParam(':year', $data['year']);
        $stmt->bindParam(':km', $data['km']);
        $stmt->bindParam(':config', $data['config']);
        $stmt->bindParam(':fuel', $data['fuel']);
        $stmt->bindParam(':fixed', $data['fixed']);
        $stmt->bindParam(':replace', $data['replace']);
        $stmt->bindParam(':engine_volume', $data['volume']);
        $stmt->bindParam(':horsepower', $data['horse']);
        $stmt->bindParam(':motor', $data['motor']);
        $stmt->bindParam(':drive', $data['drive']);
        $stmt->bindParam(':transmission', $data['transmission']);
        $stmt->bindParam(':doors', $data['doors']);
        $stmt->bindParam(':seats', $data['seats']);
        $stmt->bindParam(':wheel', $data['wheel']);
        $stmt->bindParam(':ac', $data['ac']);
        $stmt->bindParam(':color', $data['color']);
        $stmt->bindParam(':intmat', $data['material']);
        $stmt->bindParam(':intcol', $data['interior']);
        $stmt->bindParam(':regdate', $data['regdate']);
        $stmt->bindParam(':origin', $data['origin']);
        $stmt->bindParam(':damage', $data['damage']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':description', $data['desc']);
        $stmt->bindParam(':price', $data['price']);
        
        $stmt->execute();
        
//        echo "\nPDOStatement::errorInfo():\n";
//            $arr = $stmt->errorInfo();
//            print_r($arr);
        
        return $this->db->lastInsertId(); //or error
        
    }
}

