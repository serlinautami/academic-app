<?php

  //Halaman Untuk Router

    if (isset($_GET['mahasiswa'])) {
      switch ($_GET['mahasiswa'] == true) {
        //Contoh Route Untuk CRUD dengan Native
          case $_GET['mahasiswa'] == "lihat_data":
              require_once('blogs/admin/mahasiswa/index.php');
              break;
          case $_GET['mahasiswa'] == "tambah_data":
              require_once('blogs/admin/mahasiswa/create.php');
              break;
          case $_GET['mahasiswa'] == "edit_data":
              require_once('blogs/admin/mahasiswa/edit.php');
              break;
          case $_GET['mahasiswa'] == "delete_data":
              require_once('blogs/admin/mahasiswa/delete.php');
              break;
          default:
              require_once('blogs/admin/dashboard/dashboard.php');
      }
    }else{
      require_once('blogs/admin/dashboard/dashboard.php');
    }


?>
