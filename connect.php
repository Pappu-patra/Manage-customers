<?php

$con=new mysqli("localhost","root","","manage_customers");

if(!$con){
    die(mysqli_error($con));
}

?>