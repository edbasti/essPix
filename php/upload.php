<?php
    $target_path = __DIR__ . "/pics/";
    $arrData = array();
    echo $target_path;
    if (isset($_FILES['upload_file'])) {
        if(move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_path . $_FILES['upload_file']['name'])){
            $arrData['photos']['src'][] = $_FILES['upload_file']['name']; 
            $arrData['photos']['desc'][] = $_FILES['upload_file']['name']; 
        }
        print_r($arrData);
        exit;
    } else {
        echo "No files uploaded ...";
    }
?>