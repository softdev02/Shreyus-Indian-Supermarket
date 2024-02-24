<?php
include '../config/dbconfig.php';
include './models/users.php';
require './models/monthly_specials.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
        try {
                $json_data = file_get_contents("php://input");
                $reqdata = json_decode($json_data, true);
                $gallery=new ModelsSeasonaldeals($conn);
                $resdata2 =$gallery->lastrecord($reqdata['id']);  
                $filename = $resdata2['image']; 
                $file_path = $filename;
                if (file_exists($file_path)) {
                    unlink($file_path);
                } 
               $resdata =$gallery->Delete($reqdata['id']);
               http_response_code(200);
               echo json_encode(array("status" => "ok"));
            
            
        } catch (Exception $e) {
            echo 'Error Message: ' . $e->getMessage();
        }
    
}

$conn->close();
?>
