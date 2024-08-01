<!DOCTYPE html>
<html>

<head>
    <title>TABEL MATA KULIAH</title>
</head>

<body>
    <?php
    include "header.php"
        ?>
    <?php
    include "sidebar.php"
        ?>


    <br />
    <a href="mata_kuliah.php"><button type="button" class="btn btn-dark">Kembali</button></a>
    <br />
    <br />
    <h3>TAMBAH DATA MATA KULIAH</h3>
    <form method="post" action="tambah aksi_mk.php">

        <div class="form-row">


            <div class="form-group col-md-6">
                <label for="inputPassword4">Kode Mata Kuliah</label>
                <input type="text" class="form-control" id="inputkodematkul" placeholder="" name="kode_mk">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Nama Mata Kuliah</label>
                <input type="hidden" name="npm" value="<?php echo $d['npm']; ?>">
                <input type="text" class="form-control" id="inputnamamatkul" placeholder="" name="nama_mk">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Semester</label>
                <input type="text" class="form-control" id="inputsemester" placeholder="" name="semester">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Jumlah SKS</label>
            <input type="text" class="form-control" id="inputjumlahsks" placeholder="" name="jumlah_sks">
            <br>
            <br>
        </div>
        <tr>
            <td></td>
            <td><button type="submit" class="btn btn-outline-success">Simpan</button></td>
        </tr>
        </div>
    </form>


</body>