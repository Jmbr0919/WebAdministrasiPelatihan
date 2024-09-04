<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_pengelola WHERE nip='".$_GET['kode']."'";
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
				<label class="col-sm-2 col-form-label">Jabatan</label>
				<div class="col-sm-4">
					<select name="jabatan" id="jabatan" class="form-control">
						<option value="">-- Pilih Level --</option>
						<?php
                //menhecek data yg dipilih sebelumnya
                if ($data_cek['jabatan'] == "Kuasa Pengguna Anggaran (KPA)") echo "<option value='Kuasa Pengguna Anggaran (KPA)' selected>Kuasa Pengguna Anggaran (KPA)</option>";
                else echo "<option value='Kuasa Pengguna Anggaran (KPA)'>Kuasa Pengguna Anggaran (KPA)</option>";

                if ($data_cek['jabatan'] == "Pejabat Pembuat Komitmen (PPK)") echo "<option value='Pejabat Pembuat Komitmen (PPK)' selected>Pejabat Pembuat Komitmen (PPK)</option>";
                else echo "<option value='Pejabat Pembuat Komitmen (PPK)'>Pejabat Pembuat Komitmen (PPK)</option>";

				if ($data_cek['jabatan'] == "Kepala Sub Bagian Umum") echo "<option value='Kepala Sub Bagian Umum' selected>Kepala Sub Bagian Umum</option>";
                else echo "<option value='Kepala Sub Bagian Umum'>Kepala Sub Bagian Umum</option>";

				if ($data_cek['jabatan'] == "Bendahara") echo "<option value='Bendahara' selected>Bendahara</option>";
                else echo "<option value='Bendahara'>Bendahara</option>";
            ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nip" name="nip" value="<?php echo $data_cek['nip']; ?>"
					/>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pengelola" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

	if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_pengelola SET
		jabatan='".$_POST['jabatan']."',
        nama='".$_POST['nama']."',
        nip='".$_POST['nip']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pengelola';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pengelola';
        }
      })</script>";
 	}}
?>