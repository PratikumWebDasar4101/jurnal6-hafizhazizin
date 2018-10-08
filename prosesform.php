<?php
require("koneksi.php");
?>
 
<?php
    if (isset($_POST['nim'])) {
        $nama =$_POST['nama'];
        $nim =$_POST['nim'];
        $jk =$_POST['jk'];
        $fakultas = $_POST['fakultas'];
        $kelas = $_POST['kelas'];
        $hobby = $_POST['hobby'];
        $alamat = $_POST['alamat'];
        $list_hobi =implode(", " $hobby);

$query =$pdo ->prepare("INSERT INTO regis(nama,nim,jenis_kelamin,fakultas,kelas,hobi,alamat) VALUES ('$nama','$nim','$jk','$fakultas','$kelas','$hobby','$alamat')");
$query -> execute();
    if($query)
    header("location:view.php");
    else{
        die("Tambah Data Gagal");  
    }
}
?>