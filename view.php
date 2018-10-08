<?php
require("koneksi.php");
?>
<form method="post">
    <table border="1">
        <th>No</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Jenis Kelamin</th>
        <th>Fakultas</th>
        <th>Kelas</th>
        <th>Hobi</th>
        <th>Alamat</th>
        <?php
        $no=1;
        $query = $pdo -> prepare("SELECT * FROM regis");
        $query -> execute();
        while($data =$query -> fetch(PDO :: FETCH_ASSOC)){
    ?>
    <tr>
        <td><?php echo $no;?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['nim'];?></td>
            <td><?php echo $data['jenis_kelamin'];?></td>
            <td><?php echo $data['fakultas'];?></td>
            <td><?php echo $data['kelas'];?></td>
            <td><?php echo $data['hobi'];?></td>
            <td><?php echo $data['alamat'];?></td>
            <td><a href="delet.php?id=<?php echo $data['id']?>">Hapus</a> | <a href="formupdate.php?id=<?php echo $data['id']?>">Update</a></td>
    </tr>
    <?php
         $no++;
    }
     ?>        
    </table>
</form>