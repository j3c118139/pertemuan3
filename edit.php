<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Mahasiswa</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/metisMenu.min.css" rel="stylesheet">
        <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="css/dataTables/dataTables.responsive.css" rel="stylesheet">
        <link href="css/startmin.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    
         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand">Data</a>
                </div>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            
                            <li>
                                <a href="view.php"><i class="fa fa-table fa-fw"></i> Tabel Mahasiswa</a>
                            </li>
                             <li>
                                <a href="insert.php"><i class="fa fa-user fa-fw"></i> Tambah Mahasiswa</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                    <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">Edit Mahasiswa</h1>
                                </div>
                                    <!-- /.col-lg-12 -->
                            </div>

                   <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Mahasiswa
                                </div>
                                <div class="panel-body">
                                    <?php
                                        include "koneksi.php";
                                        $id = $_GET['id'];
                                        $query_mysql = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id='$id'") or die(mysqli_error(''));
                                        while($row = mysqli_fetch_assoc($query_mysql)){
                                        $dataor = explode(',',$row['olahraga_favorit']);
                                    ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="aksi_edit.php" method="POST">
                                                 <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                <div class="form-group">
                                                    <label>NIM</label>
                                                    <input name="nim" class="form-control" value="<?php echo $row['nim'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input name="nama" class="form-control" value="<?php echo $row['nama'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" <?php if($row['jenis_kelamin']=='laki-laki') echo 'checked'?>>Laki-laki
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" <?php if($row['jenis_kelamin']=='perempuan') echo 'checked'?>>Perempuan
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Agama</label>
                                                    <select class="form-control" name="agama">
                                                        <option value="islam" <?php if($row['agama'] == 'Islam') {echo "selected";}?>>Islam</option>
                                                        <option value="kristen" <?php if($row['agama'] == 'kristen') {echo "selected";}?>>Kristen</option>
                                                        <option value="budha" <?php if($row['agama'] == 'budha') {echo "selected";}?>>Budha</option>
                                                        <option value="hindu"> <?php if($row['agama'] == 'hindu') {echo "selected";}?>>Hindu</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Olahraga Favorit</label>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="olahraga_favorit[]" value="sepak bola" <?php if (in_array("sepak bola", $dataor)) echo "checked";?>>Sepak Bola
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="olahraga_favorit[]" value="basket" <?php if (in_array("basket", $dataor)) echo "checked";?>>Basket
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="olahraga_favorit[]" value="futsal" <?php if (in_array("futsal", $dataor)) echo "checked";?>>Futsal
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="olahraga_favorit[]" value="renang" <?php if (in_array("renang", $dataor)) echo "checked";?>>Renang
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="olahraga_favorit[]" value="memanah" <?php if (in_array("memanah", $dataor)) echo "checked";?>>Memanah
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="olahraga_favorit[]" value="berkuda" <?php if (in_array("berkuda", $dataor)) echo "checked";?>>Berkuda
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Foto Profil</label>
                                                    <input type="file" name="foto" <?php if($row['foto']) $row['foto']?>>
                                                </div>
                                                <button type="submit" class="btn btn-danger" name="submit">Simpan</button>

                                            </form>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
