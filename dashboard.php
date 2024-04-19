<?php include("koneksi.php");?>
<?php include("insert.php");?>
<?php include("delete.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Common Course</title>
  <link rel="icon" type="png" href="img1.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxl-discord-alt'></i>
			<span class="text">Common Course</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
      <li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Daftar Guru</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Pesan</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu bottom">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bx-log-out' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>

  <section id="content">
    <nav>
      <i class='bx bx-menu' ></i>
      <a href="#" class="nav-link">Menu Halaman</a>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Cari..">
          <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
        </div>
      </form>
      <a href="#" class="notification">
        <i class='bx bxs-bell' ></i>
        <span class="num">10</span>
      </a>
      <a href="#" class="profile">
        <i class='bx bxs-user'></i>
      </a>
    </nav>
  </section>

  <div class="tabel">
    <div class="form_tabel">
      <table class="table table-hover table-bordered table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">No_Hp</th>
            <th scope="col">Nama_Guru</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody class="table_data">
          <?php
          
          $query = "SELECT * FROM guru";

          $read = mysqli_query($con, $query);

          if (!$read){
            die("Pembacaan Gagal".mysqli_error());
          }else{
            while($row = mysqli_fetch_assoc($read)){
          ?>

          <?php
              if (isset($_GET['delete_msg'])) {
                echo "<h6>".$_GET['delete_msg']."</h6>";
               }
          ?>



          <tr>
            <td><?php echo $row['id_guru']; ?></td>
            <td><?php echo $row['no_hp']; ?></td>
            <td><?php echo $row['nama_guru']; ?></td>
            <td><a href='update.php?id=<?php echo $row['id_guru']; ?>' class="btn btn-success">Update</a></td>
            <td><a href='delete.php?id=<?php echo $row['id_guru']; ?>' class="btn btn-danger">Delete</a></td>
          </tr>




              <?php
            }

          }
          ?>

              

        </tbody>
      </table>
      <button class="create">Create</button>
    </div>
  </div>

  <div class="popup">
  <div class="form-popup">
    <form action="dashboard.php" method="post">
      <label for="no_hp">No HP:</label><br>
      <input type="text" id="no_hp" name="no_hp"><br>
      <label for="nama_guru">Nama Guru:</label><br>
      <input type="text" id="nama_guru" name="nama_guru"><br>
      <input type="hidden" name="tambah_guru">
      <div class="btn-group">
      <?php
      if (isset($_GET['message'])) {
        echo "<h6>".$_GET['message']."</h6>";
      }
      ?>

      <?php
      if (isset($_GET['insert_msg'])) {
        echo "<h6>".$_GET['insert_msg']."</h6>";
      }
      ?>
        <button type="submit" class="btn-submit">Submit</button>
        <button type="button" class="btn-cancel">Cancel</button>
      </div>
    </form>
  </div>
  </div>


  <script>
  document.querySelector('.create').addEventListener('click', function() {
  document.querySelector('.popup').style.display = 'block';
  });

  document.querySelector('.btn-cancel').addEventListener('click', function() {
  document.querySelector('.popup').style.display = 'none';
  });
  </script>

</div>

  <script src="crud.js"></script>


</body>
</html>