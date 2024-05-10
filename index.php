<?php 
include("course.php");

$query = "SELECT * FROM guru";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$cs = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
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
				<a href="routes.php?route=landing" class="logout">
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
            <th scope="col">Foto</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
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
            <td><img src="uploads/<?php echo $row['gambar']; ?>" alt="" width="50" height="50"></td>
            
            <td><a href="routes.php?route=delete&id=<?php echo $row['id_guru']; ?>" class="btn btn-danger">Delete</a></td>
            <td><button class="update-button" onclick="showUpdateForm('<?php echo $row['id_guru']; ?>')">Update</button>
    <div class="update-form" id="update-form-<?php echo $row['id_guru']; ?>" style="display: none;">
        <form action="routes.php?route=update&id=<?php echo $row['id_guru']; ?>" method="post" enctype="multipart/form-data">
            <label for="no_hp_update_<?php echo $row['id_guru']; ?>">No HP:</label><br>
            <input type="text" id="no_hp_update_<?php echo $row['id_guru']; ?>" name="no_hp" value="<?php echo htmlspecialchars($row['no_hp']); ?>"><br>
            <label for="nama_guru_update_<?php echo $row['id_guru']; ?>">Nama Guru:</label><br>
            <input type="text" id="nama_guru_update_<?php echo $row['id_guru']; ?>" name="nama_guru" value="<?php echo htmlspecialchars($row['nama_guru']); ?>"><br>
            <label for="gambar_update_<?php echo $row['id_guru']; ?>">Gambar:</label><br>
            <input type="file" id="gambar_update_<?php echo $row['id_guru']; ?>" name="gambar"><br>
            <input type="hidden" name="update_guru">
            <div class="btn-group">
                <button type="submit" class="btn-submit">Update</button>
                <button type="button" class="btn-cancel" onclick="hideUpdateForm('<?php echo $row['id_guru']; ?>')">Cancel</button>
            </div>
        </form>
    </div>
</td>

          </tr>

          <?php endforeach?>
              

        </tbody>
      </table>

      <?php 
      if(isset($_GET['delete_msg'])) {
        echo "<h6>".htmlspecialchars($_GET['delete_msg'])."</h6>";
      }
      
      ?>
      <button class="create"><a href="routes.php?route=create" style="text-decoration: none; color: inherit;">Create</a></button>

    </div>
  </div>




<script>
  document.querySelector('.create').addEventListener('click', function() {
  document.querySelector('.popup').style.display = 'block';
  });

    function showUpdateForm(id_guru) {
        var updateForm = document.getElementById('update-form-' + id_guru);
        if (updateForm) {
            updateForm.style.display = 'block';
        }
    }

    function deleteSuccess() {
        alert("Data berhasil dihapus.");
    }

    function updateSuccess() {
        alert("Data berhasil diperbarui.");
    }


    function hideUpdateForm(id_guru) {
        var updateForm = document.getElementById('update-form-' + id_guru);
        if (updateForm) {
            updateForm.style.display = 'none';
        }
    }


  document.querySelector('.btn-cancel').addEventListener('click', function() {
  document.querySelector('.popup').style.display = 'none';
  });

document.querySelector('.btn-cancel').addEventListener('click', function() {
    document.querySelector('.popup').style.display = 'none';
});
</script>

</div>

  <script src="crud.js"></script>
</body>
</html>