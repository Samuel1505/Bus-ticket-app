<?php
include 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <header>
        <a href="./index.php">Add records</a>
        <a href="./search.php">Search records</a>
        <a href="./delete.php">Delete Records</a>
       
    </header>
    <p></p>
        <form action="delete.php" method="post">
            
            <input type="search" name = "search_rec" placeholder="find record in the database" > 
            <input type="submit" name="searchAll" value="display all records"> 
            <input type="submit" name ="searchBy" value ="searchBy">
        </form>
        <?php

        if(isset($_POST['searchAll'])){
            $selectsql = "SELECT * FROM bustickettbl";
            $result = mysqli_query($conn, $selectsql);
            if (mysqli_num_rows($result) > 0) {
                    echo "<table border='1'>
                    <tr>
                        <th>Pickup</th>
                        <th>Destination</th>
                        <th>Customer code</th>
                        <th>Amount paid</th>
                        
                        <th colspan=2>Action</th>
                    </tr>";
                    while ($row = mysqli_fetch_assoc($result)){
                        
                        echo "<tr>";
                        echo '<td>'.$row['pickup_station'].'</td>';
                        echo '<td>'.$row['destination'].'</td>';
                        echo '<td>'.$row['dustomer_code'].'</td>';
                        echo '<td>'.$row['amount_paid'].'</td>';
                        echo '<td><button><a href="update.php?editId='.$row['id'].'">Edit</a></button></td>';
                        echo '<td><button><a href="update_and_delete.php?deleteId='.$row['id'].'">Delete</a></button></td>';
                     
                        "</tr>";
                }
            }
        }
        elseif(isset($_POST['searchBy'])){
            $search_rec = $_POST['search_rec'];
            $selectsql = "SELECT * FROM bustickettbl
            WHERE `pickup_station`='$search_rec' or `destination` = '$search_rec' or `dustomer_code` = '$search_rec' or `amount_paid` = '$search_rec'";
            $result = mysqli_query($conn, $selectsql);
            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1'>
                <tr>
                    <th>pickup</th>
                    <th>Destination</th>
                    <th>customer code</th>
                    <th>Amount paid</th>
                    <th colspan=2>Action</th>
                </tr>";
                while ($row = mysqli_fetch_assoc($result)){
                    
                    echo "<tr>";
                    echo '<td>'.$row['pickup_station'].'</td>';
                    echo '<td>'.$row['destination'].'</td>';
                    echo '<td>'.$row['dustomer_code'].'</td>';
                    echo '<td>'.$row['amount_paid'].'</td>';
                    echo '<td><button><a href="delete.php?deleteId='.$row['id'].'">Delete</a></button></td>';
                    "</tr>";
            }
        }
        else{
            echo "no record found";
        }

        }

        if(isset($_GET['deleteId'])) {
            $deleteId = $_GET['deleteId'];
            $sql = "DELETE FROM `bustickettbl` WHERE `id`='$deleteId'";
            $runQuery  = mysqli_query($conn, $sql);
            if($runQuery == true){
                echo "record for ".$deleteId." deleted successfuly";
                header("Location:./index.php");
            }
        }

        ?>
</body>
</html>