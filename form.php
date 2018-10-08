<?php
    session_start();
?>
<form action="prosesform.php" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" maxlength="25" required></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" pattern="\d*" maxlength="10" min="0" required></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>Pria<input type="radio" name="jk" value="Pria">
                Wanita<input type="radio" name="jk" value="Wanita"></td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td> <select name="fakultas">
                    <option value="FIT"name="FIT">FIT</option>
                    <option value="FKB"name="FKB">FKB</option>
                    <option value="FIK"name="FIK">FIK</option>
                    <option value="FTE"name="FTE">FTE</option>
                </select></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><select name="kelas">
                    <option value="D3M4101"name="D3M4101">D3MI-41-01</option>
                    <option value="S1SI4002"name="S1SI4002">S1SI-40-02</option>
                    <option value="D3TK4103"name="D3TK4103">D3TK-41-03</option>
                    <option value="D3MI4001"name="D3MI4001">D3MI-40-01</option>
              </select></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>Futsal      <input type="checkbox" name="hobby[]" value="Futsal">
                Ngegame     <input type="checkbox" name="hobby[]" value="Ngegame">
                Baca Buku   <input type="checkbox" name="hobby[]" value="Baca Buku">
                Renang      <input type="checkbox" name="hobby[]" value="Renang">
                Basket      <input type="checkbox" name="hobby[]" value="Basket"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit"></td>
        </tr>
    </table>
</form>