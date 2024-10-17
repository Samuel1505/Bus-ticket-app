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
        <a href="./search.php">search records</a>
        <a href="./delete.php">Delete Records</a>
       
    </header>
    <p></p>
        <form action="search.php" method="post">
            
            <input type="search" name = "search_rec" placeholder="search from DB" > <input type="submit" name ="searchBy" value ="searchBy">
        </form>
        <?php

        if(isset($_POST['searchAll'])){
            $selectsql = "SELECT * FROM bustickettbl";
            $result = mysqli_query($conn, $selectsql);
            if (mysqli_num_rows($result) > 0) {
                    echo "<table border='1'>
                    <tr>
                        <th>Pick-up</th>
                        <th>Destination</th>
                        <th>Customer Code</th>
                        <th>Amount Paid</th>
                        
                    </tr>";
                    while ($row = mysqli_fetch_assoc($result)){
                        
                        echo "<tr>";
                        echo '<td>'.$row['pickup_station'].'</td>';
                        echo '<td>'.$row['destination'].'</td>';
                        echo '<td>'.$row['dustomer_code'].'</td>';
                        echo '<td>'.$row['amount_paid'].'</td>';
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
                    <th>PICKUP</th>
                    <th>DESTINATION</th>
                    <th>CUSTOMER CODE</th>
                    <th>AMOUNT PAID</th>
                </tr>";
                while ($row = mysqli_fetch_assoc($result)){
                    
                    echo "<tr>";
                    echo '<td>'.$row['pickup_station'].'</td>';
                    echo '<td>'.$row['destination'].'</td>';
                    echo '<td>'.$row['dustomer_code'].'</td>';
                    echo '<td>'.$row['amount_paid'].'</td>';
                    "</tr>";
            }
        }
        else{
            echo "no record found";
        }

        }
        ?>
</body>
</html>