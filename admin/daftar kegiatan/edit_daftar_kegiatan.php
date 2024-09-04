<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_kegiatan WHERE pj_kegiatan='".$_GET['kode']."'";
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
		<label class="col-sm-2 col-form-label">Nama Kegiatan</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="<?php echo $data_cek['nama_kegiatan']; ?>"
			 />
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Teknis</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="teknis" name="teknis" value="<?php echo $data_cek['teknis']; ?>"
			/>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">PJ Kegiatan</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="pj_kegiatan" name="pj_kegiatan" value="<?php echo $data_cek['pj_kegiatan']; ?>"
			/>
		</div>
	</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=daftar-kegiatan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	
if (isset ($_POST['Ubah'])){

	$sql_ubah = "UPDATE tb_kegiatan SET
		nama_kegiatan='".$_POST['nama_kegiatan']."',
		teknis='".$_POST['teknis']."',
		pj_kegiatan='".$_POST['pj_kegiatan']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);


    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=daftar-kegiatan';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=daftar-kegiatan';
            }
        })</script>";
    }
}


