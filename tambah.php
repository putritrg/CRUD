
<html>
<head>
</head>
 
<body>
    <a href="index.php">Kembali</a>
    <br/><br/>
 
    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Produk</td>
                <td><input type="text" name="produk"></td>
            </tr>
            <tr> 
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="tambah"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
   
    if(isset($_POST['Submit'])) {
        $produk = $_POST['produk'];
        $nama_produk = $_POST['nama_produk'];
        $keterangan = $_POST['keterangan'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        
        // include database 
        include_once("config.php");
                
        // Memasukkan data ke dalam tabel
        $result = mysqli_query($mysqli, "INSERT INTO produk(produk,nama_produk,keterangan,harga,jumlah) VALUES('$produk','$nama_produk','$keterangan','$harga','$jumlah')");
      
        echo "Produk berhasil ditambahkan. <a href='index.php'>Lihat Produk</a>";
    }
    ?>
</body>
</html>