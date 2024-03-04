<?php
$connection = new mysqli("localhost","root","","zangtics");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}
