<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="view.php">See Accounts</a>
    <?php

    $conn = mysqli_connect("localhost", "root", "","systemsos");

    $id = $_GET['see'];

    $sql = mysqli_query($conn, "SELECT * from names where nameId = $id");

    while($row = mysqli_fetch_assoc($sql)){

    ?>
        <h2>User Names: </h2>
        <!-- <img src="image.jpg" style="width: 70px; height: 70px; object-fit: cover; border-radius: 50%;" alt=""> -->
        <img src="savedImages/<?php echo $row['images']; ?>" style="width: 250px; height: 250px; object-fit: cover; border-radius: 3px;" alt="A posted image">
        <h3><?php echo $row['name']; ?></h3>
    <?php

    }

    ?>

    <div class="comment">
        <h4>Comments</h4>

        <?php

            $conn = mysqli_connect("localhost", "root", "","systemsos");

            $id = $_GET['see'];

            $viewComment = mysqli_query($conn, "SELECT * from comments where nameId = $id ");

        
        ?>

        <?php

        if($viewComment->num_rows < 1){
            // echo 'No Comment Yet';
        ?>
            <p>No comments</p>
        <?php 
            }else{
                while($viewCommentRow=mysqli_fetch_assoc($viewComment)){
        ?>
            <p><?php echo $viewCommentRow['comment']; ?></p>
        <?php
                } 
            }
        ?>

        <h5>Add comment:</h5>
    </div>
    <div class="insert">
        <form action="insertComment.php?cmt=<?php echo $id; ?>" method="post">
                       <input type="text" placeholder="comment..." name="postedComment" required><br><br>
                       <button type="submit">Comment</button>
        </form>
    </div>
</body>
</html>

