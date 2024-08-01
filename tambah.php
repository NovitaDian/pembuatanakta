<!DOCTYPE html>
<html>

<head>
    <title>TABEL MAHASISWA</title>
</head>

<body>
    <?php
    include "header.php"
        ?>
    <?php
    include "sidebar.php"
        ?>
    <h2>TABEL MAHASISWA</h2>
    <br />
    <a href="mahasiswa.php"><button type="button" class="btn btn-dark">Kembali</button></a>
    <br />
    <br />
    <h3>TAMBAH DATA MAHASISWA</h3>

    <form method="post" action="tambah_aksi.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">NPM</label>
                <input type="number" class="form-control" id="inputEmail4" placeholder="" name="npm">

            </div>

            <div class="form-group col-md-6">
                <label for="inputPassword4">Program Studi</label>
                <input type="text" class="form-control" id="inputprogramstudi" placeholder="" name="program_studi">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Nama</label>
                <input type="text" class="form-control" id="inputnama" placeholder="" name="nama">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Tempat Lahir</label>
                <input type="text" class="form-control" id="inputtempatlahir" placeholder="" name="tempat_lahir">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Tanggal Lahir</label>
            <input type="date" class="form-control" id="inputtanggallahir" placeholder="" name="tanggal_lahir">
        </div>


        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" name="jenis_kelamin" value="Laki-laki" type="radio"
                            id="inputjeniskelamin" checked>
                        <label class="form-check-label" for="jenis_kelamin">
                            Perempuan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="jenis_kelamin" value="Laki-laki" type="radio"
                            id="inputjeniskelamin2" placeholder="">
                        <label class="form-check-label" for="jenis_kelamin">
                            Laki-Laki
                        </label>
                    </div>

                </div>
        </fieldset>
        <div class="form-group col-md-2">
            <label for="inputalamat">Agama</label>
            <input type="text" class="form-control" id="inputagama" name="agama">
        </div>
        <div class="form-group col-md-2">
            <label for="inputalamat">Alamat</label>
            <input type="text" class="form-control" id="inputalamat" name="alamat">
        </div>
        <div class="form-group col-md-2">
            <label for="inputalamat">Foto</label>
            <input type="file" class="form-control" id="inputfoto" name="foto">
            <br>
        </div>
        <tr>
            <td></td>
            <td><button type="submit" class="btn btn-outline-success">Simpan</button></td>
        </tr>
        </div>

    </form>


</body>