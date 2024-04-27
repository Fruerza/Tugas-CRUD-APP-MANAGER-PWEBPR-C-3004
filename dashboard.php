<?php 
include("course.php");

$cs = Course::select();

?>

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
        foreach ($cs as $row) :
        ?>
          <tr>
            <td><?php echo $row['id_guru']; ?></td>
            <td><?php echo $row['no_hp']; ?></td>
            <td><?php echo $row['nama_guru']; ?></td>
            <td><button class="update-button" onclick="showPopup(<?php echo $row['id_guru']; ?>, '<?php echo $row['no_hp']; ?>', '<?php echo $row['nama_guru']; ?>')">Update</button></td>
            <td><a href="delete.php?id=<?php echo $row['id_guru']; ?>" class="btn btn-danger">Delete</a></td>
          </tr>

          <?php endforeach        ?>
              

        </tbody>
      </table>

      <?php 
      if(isset($_GET['delete_msg'])) {
        echo "<h6>".$_GET['delete_msg']."</h6>";
      }
      
      ?>
      <button class="create">Create</button>
    </div>
  </div>

  <div class="popup">
  <div class="form-popup">
    <form action="insert.php" method="post">
      <label for="no_hp">No HP:</label><br>
      <input type="text" id="no_hp" name="no_hp"><br>
      <label for="nama_guru">Nama Guru:</label><br>
      <input type="text" id="nama_guru" name="nama_guru"><br>
      <input type="hidden" id="id_guru" name="id_guru">
      <input type="hidden" name="tambah_guru">
      <div class="btn-group">

      <a href="">
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

function showPopup(id_guru, no_hp, nama_guru) {
    document.querySelector('.popup').style.display = 'block';
    document.getElementById('id_guru').value = id_guru;
    document.getElementById('no_hp').value = no_hp;
    document.getElementById('nama_guru').value = nama_guru;
}

document.querySelector('.btn-cancel').addEventListener('click', function() {
    document.querySelector('.popup').style.display = 'none';
});
</script>

</div>

  <script src="crud.js"></script>
</body>
</html>