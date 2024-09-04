<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIM</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Mitra</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mitra" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No HP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No HP" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Bank</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="bank" name="bank" placeholder="Bank" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Rekening</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_rekening" name="nomor_rekening" placeholder="Nomor Rekening" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-mitra" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
    if (isset ($_POST['Simpan'])){

        $sql_simpan = "INSERT INTO tb_mitra (nik, nim, nama, alamat, no_hp, bank, nomor_rekening) VALUES (
            '".$_POST['nik']."',
			'".$_POST['nim']."',
			'".$_POST['nama']."',
			'".$_POST['alamat']."',
			'".$_POST['no_hp']."',
			'".$_POST['bank']."',
			'".$_POST['nomor_rekening']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-mitra';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-mitra';
          }
      })</script>";
	}
	}
     //selesai proses simpan data
