<!DOCTYPE html>
<html>

<body>
    <?php
    include "header.php";
        ?>
    <?php
    include "sidebar.php";
        ?>

    <h2>TABEL MAHASISWA</h2>
    <a href="tambah.php"> <button type="button" class="btn btn-primary">TAMBAH MAHASISWA</button></a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>

                    <th scope="col">Alamat</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "select * from mahasiswa");
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>

                        <td>
                            <?php echo $d['npm']; ?>
                        </td>
                        <td>
                            <?php echo $d['program_studi']; ?>
                        </td>
                        <td>
                            <?php echo $d['nama']; ?>
                        </td>
                        <td>
                            <?php echo $d['tempat_lahir']; ?>
                        </td>
                        <td>
                            <?php echo $d['tanggal_lahir']; ?>
                        </td>
                        <td>
                            <?php echo $d['jenis_kelamin']; ?>
                        </td>
                        <td>
                            <?php echo $d['agama']; ?>
                        </td>
                        <td>
                            <?php echo $d['alamat']; ?>
                        </td>
                        <td>
                            <?php echo $d['foto']; ?>
                        </td>



                        <td>
                            <a href="edit.php?npm=<?php echo $d['npm']; ?>"><button type="button"
                                    class="btn btn-outline-success btn-sm">Edit</button></a>
                            <a href="hapus.php?npm=<?php echo $d['npm']; ?>"><button type="button"
                                    class="btn btn-outline-danger btn-sm">Hapus</button></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
</body>

</html>