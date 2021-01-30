<?php

include "include/dbcon.php";



if(isset($_POST['submit'])){

    $files = $_FILES['file'];

    $file_name = $files['name'];
    $file_type = $files['type'];
    $file_tmp = $files['tmp_name'];
    $file_size = $files['size'];
    $file_error = $files['error'];
    
    $file_ext = explode('.',$file_name);
    $file_actual_ext = strtolower(end($file_ext));
    
    $allowed = array('jpg','jpeg','png','pdf');
    
    echo "alllowed";
    
    if(in_array($file_actual_ext,$allowed)){
        echo "22";
        if($file_error == 0){
            echo "zero error";
            if($file_size < 20000000){
                echo "file size ok";
    $file_name_new = uniqid('',true).".".$file_actual_ext;
    echo "28";

  
    $file_destination ='uploads/'.$file_name_new;
    include_once "include/dbcon.php";
    $sql = "SELECT * FROM gallery";


    $result = mysqli_query($db,$sql);
        $row_count = mysqli_num_rows($result);
        $setImageorder = $row_counts + 1;
         $sql = mysqli_query($db,"INSERT INTO gallery (imgFullNameGallery,orderGallery) VALUES('$file_name_new','$setImageorder')");
        
        move_uploaded_file($file_tmp,$file_destination);
        header("Location:gallery.php?uploadsucess");
    

    // $stat = mysqli_stmt_init($db);
    // if(!mysqli_stmt_init($db)){
    //     echo "failed";
    // }
    // else{
    //     mysqli_stmt_execute($stat);
    //     $result = mysqli_stmt_get_result($stat);
    //     $row_count = mysqli_num_rows($result);
    //     $setImageorder = $row_counts + 1;
    //      $sql = "INSERT INTO gallery (titleGallery,descGallery,imgFullNameGallery,orderGallery) VALUES(?,?,?,?)";
    //      if(!mysqli_stmt_prepare($stat,$sql)){
    //          echo "failed";
    //      }
    //      else{

    //     mysqli_stmt_bind_param($stat,"ssss","title","DESC","$setImageorder");
    //     mysqli_stmt_execute($stat);
    //     move_uploaded_file($file_tmp,$file_destination);
    //     header("Location:upload.php?uploadsucess");
    

    //      }
    // }
    echo "uploaded";
     echo "moved";
            }
            else{
                "Your file is too big";
            }
    
        }
        else{
            "There was an error uploading your file!";
        }
    
    }
    else{
        echo "you cannot upload files of this type!";
    }
}

?>