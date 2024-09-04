<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_mitra WHERE nik='".$_GET['kode']."'";
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
		<label class="col-sm-2 col-form-label">NIK</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>"
			 />
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">NIM</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="nim" name="nim" value="<?php echo $data_cek['nim']; ?>"
			 />
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Nama Mitra</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
			/>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">No HP</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data_cek['no_hp']; ?>"
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
		<label class="col-sm-2 col-form-label">Bank</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="bank" name="bank" value="<?php echo $data_cek['bank']; ?>"
			/>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Nomor Rekening</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="nomor_rekening" name="nomor_rekening" value="<?php echo $data_cek['nomor_rekening']; ?>"
			/>
		</div>
	</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-mitra" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	
if (isset ($_POST['Ubah'])){

	$sql_ubah = "UPDATE tb_mitra SET
		nik='".$_POST['nik']."',
		nim='".$_POST['nim']."',
		nama='".$_POST['nama']."',
		alamat='".$_POST['alamat']."',
		no_hp='".$_POST['no_hp']."',
		bank='".$_POST['bank']."',
		nomor_rekening='".$_POST['nomor_rekening']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);


    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-mitra';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-mitra';
            }
        })</script>";
    }
}


