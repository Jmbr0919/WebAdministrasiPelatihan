<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_ma_komponen WHERE kode_ma_komponen='".$_GET['kode']."'";
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
		<label class="col-sm-2 col-form-label">Kode</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="kode_ma_komponen" name="kode_ma_komponen" value="<?php echo $data_cek['kode_ma_komponen']; ?>"
			 />
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Uraian</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="uraian" name="uraian" value="<?php echo $data_cek['uraian']; ?>"
			 />
		</div>
	</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=komponen" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	
if (isset ($_POST['Ubah'])){

	$sql_ubah = "UPDATE tb_ma_komponen SET
		kode_ma_komponen='".$_POST['kode_ma_komponen']."',
		uraian='".$_POST['uraian']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);


    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=komponen';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=komponen';
            }
        })</script>";
    }
}


