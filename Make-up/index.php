<?php
include 'dbconnection.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <table border="1" align="center" width="80%">
        <tr height="5">
            <td colspan="4" align="center" >

                <p style="font-size: 50px;"> <b>Bus-ticket sales</b>
                </p>
        </tr>
        <tr height="80">
            <td align="center" bgcolor="">
                <a href="add.php">
                    ADD RECORDS
                </a>
            </td>
            <td align="center" bgcolor="">
                <a href="./search.php">
                    SEARCH RECORDS
                </a>
            </td>
            <td align="center" bgcolor="">
                <a href="./delete.php">
                    DELETE RECORDS
                </a>
            </td>
        </tr>     
    

    <table border="1" align="center" width="80%">
        <tr height="5">
            <td colspan="4" align="center" >

                <p style="font-size: 50px;"> <b>Bus-ticket sales</b>
                </p>
        </tr>
         <tr bgcolor="" colspan="2" style="padding: 40px;" >
                    <td align="center">Pick-up </td>
                    <td align="center">Destination </td>
                    <td  align="center">Customer Code</td>
                    <td align="center">Amount Paid</td>
                
                    <?php
                        $select="select*from bustickettbl";
                        $result = mysqli_query($conn, $select);

                    
                        if (mysqli_num_rows($result) > 0 )
                            {
                                while ($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>";
                                    echo "<td>".$row['pickup_station']. "</td>";
                                    echo "<td>".$row['destination']. "</td>";
                                    echo "<td>".$row['dustomer_code']. "</td>";
                                    echo "<td>".$row['amount_paid']. "</td>";
                                    echo "</tr>";
                                }
                            }   
                    ?> 
                </tr>
            </table>
            </tr>
        </td>
        </tr>
       
           