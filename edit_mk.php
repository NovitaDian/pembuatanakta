

<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
  include "header.php"
  ?>
  <?php
  include "sidebar.php"
  ?>
	
	<br/>
	<a href="mata_kuliah.php"><button type="button" class="btn btn-dark">Kembali</button></a>
    
	<br/>
	<br/>
	<h3>EDIT DATA MATA KULIAH</h3>
 
	<?php
	include 'koneksi_mk.php';
	$kode_mk = $_GET['kode_mk'];
	$data = mysqli_query($koneksi_mk,"select * from mata_kuliah where kode_mk='$kode_mk'");
	while($d = mysqli_fetch_array($data)){
        ?>
		<form method="post" action="update_mk.php">
            
            <div class="form-row">
                
                <td>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Nama Mata Kuliah</label>
                        
                        <input type="hidden" name="kode_mk" class="form-control" value="<?php echo $d['kode_mk']; ?>">
                    <input type="text" name="nama_mk"class="form-control" id="inputnamamatkul" placeholder=""  value="<?php echo $d['nama_mk']; ?>"></td>
                   
                    </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Semester</label>
              <input type="text" class="form-control" id="inputsemester" placeholder="" name="semester"  value="<?php echo $d['semester']; ?>">
            </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Jumlah SKS</label>
              <input type="text" class="form-control" id="inputjumlahsks" placeholder="" name="jumlah_sks"  value="<?php echo $d['jumlah_sks']; ?>">
              <br>
              <br>
            </div>
            <tr>
                        <td></td>
                        <td><button type="submit" class="btn btn-outline-success">Simpan</button></td>
                    </tr>
        </div>
         </form>
        
		<?php 
	}
	?>
	
</body>
</html>