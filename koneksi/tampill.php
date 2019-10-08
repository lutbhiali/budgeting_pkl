<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <h2></h2>
  <br/>
  <a href="login.php">+ TAMBAH MAHASISWA</a>
  <br/>
  <br/>
  <table border="1">
    <tr>
      <th>Id</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Komentar</th>
      <th>OPSI</th>
    </tr>
    <?php 
    include 'koneksi.php';
    $id = 1;
    $data = mysqli_query($koneksi,"select * from komentar");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $id++; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['email']; ?></td>
        <td><?php echo $d['komentar']; ?></td>
        <td>
          <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
          <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
        </td>
      </tr>
      <?php 
    }
    ?>
  </table>
</body>
</html>