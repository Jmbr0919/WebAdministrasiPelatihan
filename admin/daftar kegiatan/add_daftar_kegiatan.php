<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Kegiatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Nama Kegiatan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Teknis</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="teknis" name="teknis" placeholder="Teknis" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">PJ Kegiatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="pj_kegiatan" name="pj_kegiatan" placeholder="PJ Kegiatan" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=daftar-kegiatan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
    if (isset ($_POST['Simpan'])){

        $sql_simpan = "INSERT INTO tb_kegiatan (nama_kegiatan, teknis, pj_kegiatan) VALUES (
            '".$_POST['nama_kegiatan']."',
			'".$_POST['teknis']."',
			'".$_POST['pj_kegiatan']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=daftar-kegiatan';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-daftar-kegiatan';
          }
      })</script>";
	}
	}
     //selesai proses simpan data
