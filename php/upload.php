<?php 
if(isset($_POST) == true){
    // echo '<pre>';
    // print_r($_FILES);
    // die();
    // Generate unique file name 
    $fileName = time().'_'.basename($_FILES["file"]["name"]); 
     
    // File upload path 
    $targetDir = "../uploads/"; 
    $targetFilePath = $targetDir . $fileName; 
     
    // Allow certain file formats 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
    $allowTypes = array('jpg', 'png', 'jpeg', 'doc', 'pdf', 'docx'); 
     
    if(in_array($fileType, $allowTypes)){ 
        // Upload file to server 
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
            // Insert file data into the database if needed 
            //........ 
 
            // Success response 
            $response['status'] = 'ok'; 
            $response['path'] = $targetFilePath; 
        }else{ 
            $response['status'] = 'err'; 
        } 
    }else{ 
        $response['status'] = 'type_err'; 
    } 
     
    // Render response data in JSON format 
    echo json_encode($response); 
}