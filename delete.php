<?php include ('koneksi.php');?>

<?php 

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM guru WHERE id_guru = '$id'";
        $result = mysqli_query($con, $query);


        if(!$result) {
            die("query failed".mysqli_error($con));
         } else{
            header('location:dashboard.php?');
        }
    }

?>