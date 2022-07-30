<!DOCTYPE html>
<html>
  <head>
    <title>Menggetahui Jumalah Hasil Permintahan</title>
  </head>
  <body>
    <?php
    $pemakai = "php";
    $password = "007php";
    $id_mysql = mysqlI_connect("localhost",
                              $pemakai,
                              $password);
    if (! $id_mysql)
    die ("Gagal melakukan koneksi ke Database server MySQL");

    if (! mysqli_select_db($id_mysql, "bukaalmt"))
    die("Data base tidak bisah di pilih");

    $hasil = mysqli_query($id_mysql, "SELECT * FROM kota");
    if (! $hasil)
      die("Permintaan gagal di laksanakan");

    $jum_kolom = mysqli_num_fields($hasil);
    print("Jumlah Kolom  : $jum_kolom<br>\n");

    $jum_baris = mysqli_num_row(hasil);
    print("Jumlah Baris  : $jum_baris<br>\n");

    mysqli_close($id_mysql);
     ?>
  </body>
</html>
