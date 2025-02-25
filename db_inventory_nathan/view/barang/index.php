<!DOCTYPE html>
<html lang="en">
<b>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
    <h1>Data Barang</h1>

    <a href="view_tambah.php" class="btn btn-primary">Tambah Barang Baru</a>
    <br></br>

    <table class="table table-success table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID BARANG</th>
      <th scope="col">NAMA BARANG</th>
      <th scope="col">ID JENIS</th>
      <th scope="col">HARGA</th>
      <th scope="col">STOK</th>
      <th scope="col">AKSI</th>
    </tr>
    
  </thead>
  <?php
        include '../../config/koneksi.php';
        $query = mysqli_query($conn,"SELECT * FROM barang");
        $no=1;
        if(mysqli_num_rows($query)){
            while($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $result['id_barang'];?></td>
                    <td><?php echo $result['nama_barang'];?></td>
                    <td><?php echo $result['id_jenis'];?></td>
                    <td><?php echo $result['harga'];?></td>
                    <td><?php echo $result['stok'];?></td>
                    <td>
                    <a href="view_edit.php?id_barang=<?php echo $result['id_barang']?>"
      class="btn btn-primary"><i class="fa-solid fa-pencil"></i> edit</a>
      <a href="proses_hapus.php?id_barang=<?php echo $result['id_barang']?>"
      class="btn btn-danger"><i class="fa-solid fa-trash"></i> hapus</a>
                    </td>
                </tr>
                <?php
                $no++;
            }
        }else{
            echo "Data Kosong";
        }
        ?>
</table>
</div>
</body>
</html>