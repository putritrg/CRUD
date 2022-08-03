<?php
// memasukkan koneksi database
include_once("config.php");
 
// menampilkan seluruh produk dari database
$result = mysqli_query($mysqli, "SELECT * FROM produk");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="tambah.php">Tambah Produk</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Produk</th> 
        <th>Nama Produk</th> 
        <th>Keterangan</th> 
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>
   
   <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['produk']."</td>";
        echo "<td>".$data['nama_produk']."</td>";
        echo "<td>".$data['keterangan']."</td>";
        echo "<td>".$data['harga']."</td>";
        echo "<td>".$data['jumlah']."</td>";    
        echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='hapus.php?id=$data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>