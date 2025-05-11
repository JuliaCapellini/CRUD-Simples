<?php
$con = mysqli_connect("localhost", "root", "", "crud-php-bootstrap");
if (!$con){
    die('Connection Failed'. mysqli_connect_error());
}
?>