<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Jurusan Baru</h3>
								</div>
								<div class="panel-body">
                    <form class="" action="" method="post">
                      <div class="form-group">
                        <label for="Nama">Kode Jurusan</label>
                        <input type="text" name="kd_jurusan" class="form-control" value="" placeholder="Kode Jurusan">
                      </div>
                      <div class="form-group">
                        <label for="Alamat">Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" class="form-control" value="" placeholder="Nama Jurusan">
                      </div>
                      <br>
                      <button type="submit" name="Kirim" class="btn btn-success btn-block"><strong>Tambah Mahasiswa</strong></button>
                    </form>
                </div>
							</div>

<?php

	if (isset($_POST['Kirim'])) {
		$kd_jurusan = $_POST['kd_jurusan'];
		$nama_jurusan = $_POST['nama_jurusan'];
      if (!empty($kd_jurusan) && !empty($nama_jurusan)) {
        $hasil = tambah_data_jurusan($kd_jurusan, $nama_jurusan);
        if ($hasil) {
          echo "
					<div class='alert alert-success'>
					  <strong>Success!</strong> Data Berhasil di Kirim
					</div>
					";
        }else {
          echo "
					<div class='alert alert-warning'>
					  <strong>Warning!</strong> Data gagal di Kirim
					</div>
					";
        }
      }else {
        echo "
				<div class='alert alert-warning'>
					<strong>Warning!</strong> Tidak konek database
				</div>
				";
      }
		}

?>
