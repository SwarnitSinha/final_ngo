<?php

include "include/dbcon.php";



if(isset($_POST['submit'])){

    $files = $_FILES['file'];
    $description = $_POST['description'];
    $date = $_POST['date'];

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

  
    $file_destination ='upcoming_event/'.$file_name_new;
    include_once "include/dbcon.php";
    $num_rows =mysqli_num_rows(mysqli_query($db, "SELECT * FROM upcoming_event")) ;
    if($num_rows==1){
        $query =mysqli_fetch_array(mysqli_query($db, "SELECT * FROM upcoming_event where counts = '1'")) ;

    $get_name = $query['name'];
    $get_description = $query ['description'];
    $get_date = $query ['date'];
$query = "select * from previous_event";
    $result = mysqli_query($db,$query);
        $row_count = mysqli_num_rows($result);
        $setImageorder = $row_counts + 1;


    mysqli_query($db,"insert into previous_event(name,description,date,image_order) values ('$get_name','$get_description','$get_date','$setImageorder')");
mysqli_query($db,"delete from upcoming_event");
    }


         $sql = mysqli_query($db,"INSERT INTO upcoming_event (name,counts,description,date) VALUES('$file_name_new','1','$description','$date')");
        
        move_uploaded_file($file_tmp,$file_destination);
        header("Location:event.php?uploadsucess");
    

   
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