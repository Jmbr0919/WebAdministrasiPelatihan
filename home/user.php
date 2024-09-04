<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Daftar <small>Aktifitas</small>
                        </h1>
                    </div>
                </div>
                
                <br>
                 <!-- /. ROW  -->
            <div>
				<a href="?page=add-aktivitas" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Nama TC</th>
                                            <th>Gel</th>
                                            <th>Kelas</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Akhir</th>
                                            <th>Nama Panitia</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
			                        $no = 1;
	    		                    $sql = $koneksi->query("SELECT * from tb_aktivitas");
                                     while ($data= $sql->fetch_assoc()) {
                                    ?>

                                    <tr>
                                        <td>
							                <?php echo $no++; ?>
						                </td>
                                        <td>
                							<?php echo $data['jenis']; ?>
				                		</td>
                                        <td>
                                            <?php echo $data['nama_kegiatan']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nama_tc']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['gel']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['kelas']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['tgl_mulai']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['tgl_akhir']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nama_panitia']; ?>
                                        </td>


                                        <td>
                                            <a href="?page=view-aktivitas&kode=<?php echo $data['kode_aktivitas']; ?>" title="Detail"
                                            class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                     }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
<!-- /. PAGE INNER  -->
</div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>			
