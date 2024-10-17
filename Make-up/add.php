<?php
include 'dbconnection.php';

if (isset($_POST['add'])) {
    $pickup_station = $_POST['pickup_station'];
    $destination = $_POST['destination'];
    $dustomer_code = $_POST['dustomer_code'];
    $amount_paid = $_POST['amount_paid'];
    $query = "INSERT INTO `bustickettbl` ( `pickup_station`, `destination`, `dustomer_code`, `amount_paid`) 
    VALUES ('$pickup_station', '$destination', '$dustomer_code', '$amount_paid')";
    $result = mysqli_query($conn, $query);
    header("location: index.php");

}

?>


                <form action="add.php" method="post">
                <table >
                    <tr>
                        <td width="100" align="center">
                            <input type="text" name="pickup_station" placeholder="Enter your pickup_station" required>
                            <p></p>
                            <input type="text" name="destination" placeholder="Enter your destination" required>
                            <p></p>
                            <input type="text" name="dustomer_code" placeholder="Enter your customer_code" required>
                            <p></p>
                            <input type="text" name="amount_paid" placeholder="Enter your amount_paid" required>
                            <p></p>
                            <input type="submit" name="add" value="Add">
                        </td>
                    </tr>
                </table>
                </form>