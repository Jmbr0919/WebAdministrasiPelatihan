<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_transport WHERE kode_transport='".$_GET['kode']."'";
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

			<input type='hidden' class="form-control" name="kode_transport" value="<?php echo $data_cek['kode_transport']; ?>"
			 readonly/>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kelurahan Tempat Kegiatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="lokasi_kegiatan" name="lokasi_kegiatan" value="<?php echo $data_cek['lokasi_kegiatan']; ?>"
					/>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Asal Kelurahan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="asal_kelurahan" name="asal_kelurahan" value="<?php echo $data_cek['asal_kelurahan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nilai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nilai" name="nilai" value="<?php echo $data_cek['nilai']; ?>"
					/>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=transport" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

if (isset ($_POST['Ubah'])){

        $sql_ubah = "UPDATE tb_transport SET
			lokasi_kegiatan='".$_POST['lokasi_kegiatan']."',
			asal_kelurahan='".$_POST['asal_kelurahan']."',
			nilai='".$_POST['nilai']."'		
            WHERE kode_transport='".$_POST['kode_transport']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=transport';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=transport';
            }
        })</script>";
    }
}
