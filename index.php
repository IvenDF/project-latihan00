<!DOCTYPE html>
<html>
  <head>
    <title>Tes MySQL</title>
  </head>
  <body>
    <?php
    erro_reporting(0);
    $pemakai = "php";
    $password = "008php";
    $id_mysql = mysqlI_connect("localhost",
                              $pemakai,
                              $password);

    if (mysqlI_connect_erro(id_mysql))
    die(mysqlI_connect_erro($id_mysql));

    mysqli_close($id_mysql);

    print("sukses");
     ?>
  </body>
</html>
