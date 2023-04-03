<?php
include "koneksi.php";
$query = "SELECT * FROM data_barang";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CRUD Sederhana</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
</head>

<body>
  <div>
    <h4 class="py-2 px-3 bg-primary text-white">Kelola Data.</h4>
  </div>
  <div class="container">
    <h4 class="mt-4">Manage your data here!
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-clipboard-check my-2" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
      </svg>
    </h4>

    <table class="table table-sm table-bordered align-middle text-center">
      <tr class="text-center fw-bold text-uppercase">
        <td>No</td>
        <td>Gambar</td>
        <td>Nama</td>
        <td>Kategori</td>
        <td>Harga Beli</td>
        <td>Harga Jual</td>
        <td>Stok</td>
        <td>Aksi</td>
      </tr>
      <?php
      if ($result->num_rows > 0) {

        // die(); 
        $no = 1;
        while ($data = mysqli_fetch_array($result)) {
          // var_dump($data['nama_barang']); 
      ?>
          <tr>
            <td class="text-center"><?= $no++ ?></td>
            <td class="text-center">
              <img src="gambar/<?= $data['gambar_barang'] ?>" alt="<?= $data['nama_barang']; ?>" width="100px" />
            </td>
            <td><?= $data['nama_barang'] ?></td>
            <td><?= $data['kategori_barang'] ?></td>
            <td>
              Rp.<?= $data['harga_beli'] ?>
            </td>
            <td>
              Rp.<?= $data['harga_jual'] ?>
            </td>
            <td><?= $data['stok'] ?></td>
            <td class="text-center">
              <a href="ubah.php?id_barang=<?= $data['id_barang'] ?>" class="btn btn-success btn-sm mx-1">Ubah</a>
              <a href="proses.php?id_barang=<?= $data['id_barang'] ?>&aksi=hapus" class="btn btn-danger btn-sm mx-1">Hapus</a>
            </td>
          </tr>
        <?php
        }
      } else {
        ?>
        <tr>
          <td colspan="8" class="text-center">Data Kosong</td>
        </tr>
      <?php
      }
      ?>
    </table>
    <a href="tambah.php" class="btn btn-success btn-sm mb-4">Tambah Barang</a>
  </div>
  <div class="fixed-bottom bg-primary text-white text-center p-1">Created By Satrio Pratama Wijaya.</div>
</body>

</html>