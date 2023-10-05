<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Add User</a><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Names</th>
        </tr>
        <?php

            $conn = mysqli_connect("localhost", "root", "","systemsos");

            $sql = mysqli_query($conn, "SELECT * from names");

            while($row=mysqli_fetch_assoc($sql)){

        ?>
        <tr>
            <td><?php echo $row['nameId']; ?></td>
            <td><a href="see.php?see=<?php echo $row['nameId']; ?>"><?php echo $row['name']; ?></a></td>
        </tr>

            <?php
            }
            ?>
    </table>
</body>
</html>