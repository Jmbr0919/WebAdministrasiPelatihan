<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Transport</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kelurahan Tempat Kegiatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="lokasi_kegiatan" name="lokasi_kegiatan" placeholder="Lokasi Kegiatan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Asal Kelurahan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="asal_kelurahan" name="asal_kelurahan" placeholder="Desa/Kelurahan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nilai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nilai" name="nilai" placeholder="Nilai" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=transport" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
    if (isset ($_POST['Simpan'])){

        $sql_simpan = "INSERT INTO tb_transport ( lokasi_kegiatan, asal_kelurahan, nilai) VALUES (
			'".$_POST['lokasi_kegiatan']."',
			'".$_POST['asal_kelurahan']."',
			'".$_POST['nilai']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=transport';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=transport';
          }
      })</script>";
	}
	}
     //selesai proses simpan data
