<?php include("koneksi.php");?>

<?php

if(isset($_GET["id_guru"])){
    $id_Guru = $_GET["id_guru"];

    $query = "DELETE FROM guru WHERE id_guru = $id_Guru";

    $result = mysqli_query($con, $query);

    if(!$result){
        die("Query failed: " . mysqli_error($con));
    }else{
        header('location:dashboard.php?delete_msg=Data has been deleted.');
    }
}
?>