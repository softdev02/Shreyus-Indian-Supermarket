<?php

class ModelsSeasonaldeals {
    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }
    public function lastrecord($id){
        $query = $this->db->query("SELECT * FROM seasonal_deals WHERE id=".$id);
        if ($query) {
            return $query->fetch_assoc();
        } else {
            return null;
        }
    }

    public function getallimage(){
        $query = $this->db->query("SELECT * FROM seasonal_deals");
        return $query->rows;
    }
   
    public function saveimage($data) {
        $array_keys =implode(",", array_keys($data));
        $array_values = "'".implode("','", array_values($data))."'";
        $query = $this->db->query("INSERT INTO seasonal_deals (".$array_keys.") VALUES (".$array_values.")");
        return $query;
    }

    public function Delete($id) {
        $query = $this->db->query("DELETE FROM seasonal_deals WHERE id=".$id);
        return $id;
    }
}