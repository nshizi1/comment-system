<?php

    include("conn.php");

    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $image_name = $_FILES["image"]['name'];
    $img_tmp = $_FILES["image"]['tmp_name'];

    // Allowed Extension
    $allowedExts = array( "gif", "jpeg","jpg","png" );
    $image_ext = explode(".",$_FILES['image']['name']);
    $extension= strtolower(end($image_ext));
    $fileNewName = uniqid('', true). "." . $extension;

    $sql=mysqli_query($conn,"INSERT into users(UserName, userEmail, userAge,image) values('$name', '$email', '$age','$fileNewName')");
    
    if($sql){
        $upload = "uploads/";
        // Checking allowed File Extension
        if(in_array($extension, $allowedExts)) {
            move_uploaded_file($img_tmp, $upload . $fileNewName);
        } else {
            echo "Not Allowed";
        }

        echo "
            <script>
                alert('User Inserted');
                window.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "not inserted";
    }


?>