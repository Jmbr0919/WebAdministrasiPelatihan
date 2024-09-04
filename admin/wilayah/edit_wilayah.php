<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_wilayah WHERE kode_wilayah='".$_GET['kode']."'";
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

			<input type='hidden' class="form-control" name="kode_wilayah" value="<?php echo $data_cek['kode_wilayah']; ?>"
			 readonly/>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?php echo $data_cek['kecamatan']; ?>"
					/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Kelurahan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?php echo $data_cek['kelurahan']; ?>"
					/>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-wilayah" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_wilayah SET
        kecamatan='".$_POST['kecamatan']."',
        kelurahan='".$_POST['kelurahan']."'
        WHERE kode_wilayah='".$_POST['kode_wilayah']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-wilayah';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-wilayah';
        }
      })</script>";
    }}