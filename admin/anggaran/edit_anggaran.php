<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_anggaran WHERE kode_program='".$_GET['kode']."'";
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

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Survei</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_survei" name="nama_survei" value="<?php echo $data_cek['nama_survei']; ?>"
					 />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Program</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="program" name="program" value="<?php echo $data_cek['program']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Program</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kode_program" name="kode_program" value="<?php echo $data_cek['kode_program']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kegiatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kegiatan" name="kegiatan" value="<?php echo $data_cek['kegiatan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Kegiatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kode_kegiatan" name="kode_kegiatan" value="<?php echo $data_cek['kode_kegiatan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KRO</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kro" name="kro" value="<?php echo $data_cek['kro']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RO</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="ro" name="ro" value="<?php echo $data_cek['ro']; ?>"
					/>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=anggaran" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	
if (isset ($_POST['Ubah'])){

        $sql_ubah = "UPDATE tb_anggaran SET
			nama_survei='".$_POST['nama_survei']."',
			program='".$_POST['program']."',
			kegiatan='".$_POST['kegiatan']."',
			kode_kegiatan='".$_POST['kode_kegiatan']."',
			kro='".$_POST['kro']."',
			ro='".$_POST['ro']."',	
            kode_program='".$_POST['kode_program']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);


    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=anggaran';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=anggaran';
            }
        })</script>";
    }
}

