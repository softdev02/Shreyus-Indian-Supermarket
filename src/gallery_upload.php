<?php
include '../config/dbconfig.php';
include './models/users.php';
require './models/gallery.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
        try {
                $reqdata = $_POST;
                
                if (isset($_FILES['image'])) {
                    $uploadedFile = $_FILES['image']['tmp_name'];
                    $folderName = 'Upload/galleryimg';
                    if (!file_exists($folderName)) {
                        mkdir($folderName, 0777, true);
                    }
                    $destination = $folderName . '/' . time() . $_FILES['image']['name'];
                    if (move_uploaded_file($uploadedFile, $destination)) {
                    }
                }
            
                $reqdata['image'] =$destination;
                $gallery=new ModelsGallery($conn);
               
                $resdata =$gallery->saveimage($reqdata);
                header("Location: ../dashboard");
            
            
        } catch (Exception $e) {
            echo 'Error Message: ' . $e->getMessage();
        }
    
}

$conn->close();
?>
