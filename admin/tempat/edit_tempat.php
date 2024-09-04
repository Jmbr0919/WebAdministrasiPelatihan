<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_tempat_kegiatan WHERE kode_tempat='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<input type='hidden' class="form-control" name="kode_tempat" value="<?php echo $data_cek['kode_tempat']; ?>"
			 readonly/>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Kegiatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo $data_cek['tempat']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?php echo $data_cek['kecamatan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Asal Kelurahan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?php echo $data_cek['kelurahan']; ?>"
					/>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=tempat" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	
if (isset ($_POST['Ubah'])){

        $sql_ubah = "UPDATE tb_tempat_kegiatan SET
			tempat='".$_POST['tempat']."',
			alamat='".$_POST['alamat']."',
			kecamatan='".$_POST['kecamatan']."',
			kelurahan='".$_POST['kelurahan']."'
			WHERE kode_tempat='".$_POST['kode_tempat']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);


    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=tempat';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=tempat';
            }
        })</script>";
    }
}

