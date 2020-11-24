<div class="col-md-12">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Hover Row</h3>
								</div>
                <a href="index.php?mahasiswa=tambah_data">
                  <button type="button" name="button" class="btn btn-default" style="float:right; margin-right:25px; margin-top:15px;">Mahasiswa Baru</button>
                </a>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>kd_jurusan</th>
												<th>nama_jurusan</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$hasil = tampilkan_data_jurusan();
											$hitung = mysqli_num_rows($hasil);
											for ($i=1; $i <= $hitung; $i++) {
												while ($kolom = mysqli_fetch_assoc($hasil)) {
											?>
											<tr>
												<td><?= $i++ ?></td>
												<td><?= $kolom['kd_jurusan'] ?></td>
												<td><?= $kolom['nama_jurusan'] ?></td>
											</tr>
										<?php } }?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
</div>
