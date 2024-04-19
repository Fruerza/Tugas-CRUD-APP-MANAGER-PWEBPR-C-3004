<?php

$con=new mysqli("localhost", "root", "", "crudweb");

if($con){
    echo "";
}
else{
    die(mysqli_error($con));
}

?>