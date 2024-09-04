<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Daftar Kegiatan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-daftar-kegiatan" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Kegiatan</th>
						<th>Teknis</th>
						<th>PJ Kegiatan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
			  $no = 1;
			  $sql = $koneksi->query("SELECT * from tb_kegiatan");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nama_kegiatan']; ?>
						</td>
						<td>
							<?php echo $data['teknis']; ?>
						</td>
						<td>
							<?php echo $data['pj_kegiatan']; ?>
						</td>

						<td>
							<a href="?page=edit-daftar-kegiatan&kode=<?php echo $data['pj_kegiatan']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-daftar-kegiatan&kode=<?php echo $data['pj_kegiatan']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->