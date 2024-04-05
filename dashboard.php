<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>English Tutoring</title>
  <link rel="icon" type="png" href="img1.png">
  <link rel="stylesheet" href="style.css">
</head>
<body onload="readAll()">
  <section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxl-discord-alt'></i>
			<span class="text">English  Tutoring</span>
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
      <form class="create_form">
        <input type="text" placeholder="Masukkan No Handphone" class="NOHp">
        <input type="text" placeholder="Masukkan Nama Guru" class="NamaGuru">
        <button type="button" onclick="add()">Create</button>
      </form>
      <form class="update_form">
        <input type="text" hidden class="update_id">
        <input type="text" placeholder="Masukkan No Handphone" class="UNOHp">
        <input type="text" placeholder="Masukkan Nama Guru" class="UNamaGuru">
        <button type="button" onclick="update()">Update</button>
      </form>
      <button class="addbtn" onclick="createForm()">+ Tambah</button>
      <br/>
      <table class="table">
        <thead>
          <th>id</th>
          <th>No_Hp</th>
          <th>Nama_Guru</th>
          <th>Aksi</th>
        </thead>
        <tbody class="table_data">
          <tr>
            <td>1</td>
            <td>087577451432</td>
            <td>Fuad Sayuti S.H</td>
            <td><button>Update</button></td>
            <td><button class="btn-delete">Delete</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>