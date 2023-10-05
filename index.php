<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
        Name:  <input type ="text" name = "name"><br><br>
        Image: <input type="file" name="image" id=""><br><br>
        <button type="submit" name="send">Add User</button><br><br>
    </form>
</body>
</html>


<?php

    if(isset($_POST['send'])){

        $conn = mysqli_connect("localhost", "root", "","systemsos");
        
        $name = $_POST['name'];
        $image_name = $_FILES["image"]['name'];
        $img_tmp = $_FILES["image"]['tmp_name'];

        // Allowed Extension
        $allowedExts = array( "gif", "jpeg","jpg","png" );
        $image_ext = explode(".",$_FILES['image']['name']);
        $extension= strtolower(end($image_ext));
        $fileNewName = uniqid('', true). "." . $extension;

        $sql = mysqli_query($conn, "INSERT into names(name, images) values('$name', '$fileNewName')");

        if(!$sql){
            echo "
                <script>
                    alert('User not inserted');
                    location.href='index.php';
                </script>
            ";
        }else{
            $upload = "savedImages/";

            // checking allowed file extensions

            if(in_array($extension, $allowedExts)) {
                move_uploaded_file($img_tmp, $upload . $fileNewName);
            } else {
                echo "Not Allowed";
            }

            echo "
                <script>
                    alert('User inserted');
                    location.href='index.php';
                </script>
            ";
        }

    }

?>