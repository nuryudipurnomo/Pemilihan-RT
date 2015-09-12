<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Panel Admin Pemilihan RT
                    </a>
                </li></br>
                <li>
                    <a href="#">Kelola Calon</a>
                </li>
                <li>
                    <a href="">Tambah Calon</a>
                </li></br>
                <li>
                    <a href="#">Kelola Peserta</a>
                </li>
                <li>
                    <a href="">Tambah Peserta</a>
                </li></br>
                <li>
                    <a href="#">Laporan</a>
                </li>
                    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                <li>
                    <a href="#"><b>KELUAR</b></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>KELOLA CALON</h1></br>
                        <p><button type="button" class="btn btn-info"><b>TAMBAH</b></button></p>

                        <div class="row">
                            <div class="col-md-12">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Kelamin</th>
                                    <th>Tempat & Tgl Lahir</th>
                                    <th>Suara</th>
                                    <th>Pilihan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-danger">HAPUS</button>
                                        <button type="button" class="btn btn-xs btn-success">RUBAH</button>
                                    </td>

                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>@mdo</td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-danger">HAPUS</button>
                                        <button type="button" class="btn btn-xs btn-success">RUBAH</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@mdo</td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-danger">HAPUS</button>
                                        <button type="button" class="btn btn-xs btn-success">RUBAH</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
