<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_anggaran WHERE kode_program='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Anggaran</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>Nama Survei</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_survei']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Program</b>
							</td>
							<td>:
								<?php echo $data_cek['program']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kode Program</b>
							</td>
							<td>:
								<?php echo $data_cek['kode_program']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kegiatan</b>
							</td>
							<td>:
								<?php echo $data_cek['kegiatan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kode Kegiatan</b>
							</td>
							<td>:
								<?php echo $data_cek['kode_kegiatan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>KRO</b>
							</td>
							<td>:
								<?php echo $data_cek['kro']; ?>
							</td>
							<tr>
							<td style="width: 150px">
								<b>RO</b>
							</td>
							<td>:
								<?php echo $data_cek['ro']; ?>
							</td>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=anggaran" class="btn btn-warning">Kembali</a>

					<a href="./report/cetak-anggaran.php?kode=<?php echo $data_cek['kode_program']; ?>" target=" _blank"
					 title="Cetak Data Anggaran" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">

				<h3 class="profile-username text-center">
					<?php echo $data_cek['kode_program']; ?>
					-
					<?php echo $data_cek['nama_survei']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>