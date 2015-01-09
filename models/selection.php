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
}