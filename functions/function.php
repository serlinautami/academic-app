<?php
    //Simpan Fungsi dan Query SQL disini
    function  tambah_data_jurusan($kd_jurusan, $nama_jurusan){
        $query = "INSERT INTO data_jurusan VALUES ('$kd_jurusan', '$nama_jurusan')";
        return query($query);
    }

      function tampilkan_data_jurusan(){
          $query = "SELECT * FROM data_jurusan";
          return query($query);
      }

      function query($query){
        Global $koneksi;
        $hasil = mysqli_query($koneksi, $query);

        return $hasil;
      }

?>
