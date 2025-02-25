<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class=" navbar navbar-expand-lg style=bg-body-tertiary "style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">AMQ Terang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang/index.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">Jenis</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" >Search</button>
        
      </form>
  </div>
</nav>
<div class="container">
    <h1>Halaman Edit</h1>
    <br></br>
    <?php
    include '../../config/koneksi.php';
    $id_barang = $_GET['id_barang'];
    $query = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
    $result =mysqli_fetch_array($query);
    ?>
    <form action="proses_edit.php?id_barang=<?php echo $result['id_barang']?>" method="post">
  <div class="mb-3">
    <label for="exampleImputEmail1" class="form-label">ID BARANG</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result
    ['id_barang']?>" name="id_barang">
     <div class="mb-3">
    <label for="exampleImputEmail1" class="form-label">NAMA BARANG</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result
    ['nama_barang']?>" name="nama_barang">
    <div class="mb-3">
    <label for="exampleImputEmail1" class="form-label">ID JENIS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result
    ['id_jenis']?>" name="id_jenis">
    <div class="mb-3">
    <label for="exampleImputEmail1" class="form-label">HARGA</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result
    ['harga']?>" name="harga">
    <div class="mb-3">
    <label for="exampleImputEmail1" class="form-label">STOK</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result
    ['stok']?>" name="stok">
    <br></br>
  <button type="submit" class="btn btn-primary">edit</button>
</form>
</div>
</body>
</html>