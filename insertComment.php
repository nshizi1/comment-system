<?php

    $conn = mysqli_connect("localhost", "root", "","systemsos");

    $id = $_GET['cmt'];

    // echo $id;


    // declare comment

    $postedComment = $_POST['postedComment'];

    $addComment = mysqli_query($conn, "INSERT into comments(comment, nameId) values('$postedComment', '$id')");

    if(!$addComment){
        echo "<script>
            alert('error commenting!');
            location.href='see.php';
        </script>";
    }else{
        header("location: see.php?see=$id");
    }

?>