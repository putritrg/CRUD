<?php
// include database 
include_once("config.php");

if(isset($_POST['update']))
{	
    $id = $_POST['id'];    
    $produk=$_POST['produk'];
    $nama_produk=$_POST['nama_produk'];
    $keterangan=$_POST['keterangan'];
    $harga=$_POST['harga'];
    $jumlah=$_POST['jumlah'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE produk SET produk='$produk',keterangan='$keterangan',nama_produk='$nama_produk' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id=$id");
 
while($data = mysqli_fetch_array($result))
{
    $produk=$data['produk'];
    $nama_produk=$data['nama_produk'];
    $keterangan=$data['keterangan'];
    $harga=$data['harga'];
    $jumlah=$data['jumlah'];
}
?>
<html>
<head>	
    <title>Perbaharui Produk</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Produk</td>
                <td><input type="text" name="produk" value=<?php echo $produk;?>></td>
            </tr>
            <tr> 
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk" value=<?php echo $nama_produk;?>></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>