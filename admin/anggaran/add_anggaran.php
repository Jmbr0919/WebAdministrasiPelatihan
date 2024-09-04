<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Survei</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_survei" name="nama_survei" placeholder="Nama Survei" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Program</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="program" name="program" placeholder="Program" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Program</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kode_program" name="kode_program" placeholder="Kode Program" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kegiatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Kegiatan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Kegiatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kode_kegiatan" name="kode_kegiatan" placeholder="Kode Kegiatan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KRO</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kro" name="kro" placeholder="KRO" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">	RO</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="ro" name="ro" placeholder="RO" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=anggaran" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
    if (isset ($_POST['Simpan'])){

        $sql_simpan = "INSERT INTO tb_anggaran (nama_survei, program, kode_program, kegiatan, kode_kegiatan, kro, ro) VALUES (
            '".$_POST['nama_survei']."',
			'".$_POST['program']."',
			'".$_POST['kode_program']."',
			'".$_POST['kegiatan']."',
			'".$_POST['kode_kegiatan']."',
			'".$_POST['kro']."',
			'".$_POST['ro']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=anggaran';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-anggaran';
          }
      })</script>";
	}
	
	}

     //selesai proses simpan data
