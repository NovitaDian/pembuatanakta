<!DOCTYPE html>
<html>

<body>
    <?php
    include "header.php";
        ?>
    <?php
    include "sidebar.php";
        ?>
    <h2>TABEL MATA KULIAH</h2>
    <br />
    <a href="tambah_mk.php"> <button type="button" class="btn btn-primary">TAMBAH MATA KULIAH</button></a>

    <div class="table-responsive">
        <table class="table table-striped table-sm">

            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Mata Kuliah</th>
                    <th scope="col">Nama Mata Kuliah</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Jumlah SKS</th>
                </tr>
            </thead>
            <tbody>
                </tr>
                <?php
                include 'koneksi_mk.php';
                $no = 1;
                $data = mysqli_query($koneksi_mk, "select * from mata_kuliah");
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $d['kode_mk']; ?>
                        </td>
                        <td>
                            <?php echo $d['nama_mk']; ?>
                        </td>
                        <td>
                            <?php echo $d['semester']; ?>
                        </td>
                        <td>
                            <?php echo $d['jumlah_sks']; ?>
                        </td>
                        <td>
                            <a href="edit_mk.php?kode_mk=<?php echo $d['kode_mk']; ?>"><button type="button"
                                    class="btn btn-outline-success btn-sm">Edit</button></a>
                            <a href="hapus_mk.php?kode_mk=<?php echo $d['kode_mk']; ?>"><button type="button"
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