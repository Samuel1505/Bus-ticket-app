<?php
$conn = mysqli_connect('localhost', 'root', '', 'busticket');
if (!$conn){
    die("Connection failed:" .mysqli_error());
} 