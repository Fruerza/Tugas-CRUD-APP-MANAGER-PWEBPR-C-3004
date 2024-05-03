<?php require("createvalidation.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="create.css">
    <title>Create Data</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">
            <header>Create Data</header>
            <form action="routes.php?route=insert" method="post" enctype="multipart/form-data">
                <div class="field input">
                    <label for="no_hp">No Hp</label>
                    <input type="text" name="no_hp" id="no_hp" value="<?php echo $no_hp ?>" autocomplete="off">
                    <p class="error no_hp-error"><?php echo $no_hp_error ?></p>
                </div>

                <div class="field input">
                    <label for="nama_guru">Nama Guru</label>
                    <input type="text" name="nama_guru" id="nama_guru" value="<?php echo $nama_guru ?>" autocomplete="off">
                    <p class="error nama_guru-error"><?php echo $nama_guru_error ?></p>
                </div>

                <div class="field input">
                    <label for="gambar">Gambar</label>
                    <input type="file" id="gambar" name="gambar">
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="tambah_guru" value="Create" required>
                    <p class="success"><?php echo $success ?></p>
                </div>
            </form>
        </div>
      </div>
</body>
</html>