<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Panel Admin Peserta</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

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
                    <a href="">
                        Panel Admin Pemilihan RT
                    </a>
                </li></br>
                <li>
                    <a href="<?php echo base_url('sispem/panel_calon'); ?>">Kelola Calon</a>
                </li>
                <li>
                    <a href="<?php echo base_url('sispem/tambah_calon'); ?>">Tambah Calon</a>
                </li></br>
                <li>
                    <a href="<?php echo base_url('sispem/panel_peserta'); ?>">Kelola Peserta</a>
                </li>
                <li>
                    <a href="<?php echo base_url('sispem/tambah_peserta'); ?>">Tambah Peserta</a>
                </li></br>
                <li>
                    <a href="<?php echo base_url('sispem/panel_laporan'); ?>">Laporan Hadir</a>
                    <a href="<?php echo base_url('sispem/panel_laporan'); ?>">Laporan Hasil</a>
                </li>
                    </br></br>
                <li>
                    <div class="col-md-12">
                        <a href="<?php echo base_url('auth/logout_admin'); ?>">
                            <button type="button" class="btn btn-primary btn-block"><b>KELUAR</b></button>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>KELOLA PESERTA</h1></br>
                        <p><a href="<?php echo base_url('sispem/tambah_peserta'); ?>"><button type="button" class="btn btn-info"><b>TAMBAH +</b></button></a></p>
                        <h1><?php echo $this->session->flashdata('pesan'); ?></h1>
                        <div class="row">
                            <div class="col-md-12">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.ID</th>
                                    <th>Nama</th>
                                    <th>Kelamin</th>
                                    <th>Tempat & Tgl Lahir</th>
                                    <th>Status</th>
                                    <th>Pilihan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($data as $hasil)  { ?>
                                  <tr>
                                    <td><?php echo $hasil['no_id']; ?></td>
                                    <td><?php echo $hasil['username']; ?></td>
                                    <td><?php echo $hasil['kelamin']; ?></td>
                                    <td><?php echo $hasil['tempat_lahir']; ?>  <?php echo $hasil['tgl_lahir']; ?></td>
                                    <td><?php echo $hasil['status']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url()."sispem/hapeserta/".$hasil['id_peserta']; ?>"><button type="button" class="btn btn-xs btn-danger">HAPUS</button></a>
                                        <a href="<?php echo base_url()."sispem/updatpeserta/".$hasil['id_peserta']; ?>"><button type="button" class="btn btn-xs btn-success">RUBAH</button></a>
                                    </td>
                                  </tr>
                                    <?php }; ?>
                                </tbody>
                              </table>
                            </div>

                    </div>
                </div>
            </div>
        </div>
        <!--<div id="page-content-wrapper">

         /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/jquery-1.11.0.js"></script>
    <!--file include Bootstrap js dan datepickerbootstrap.js-->
    <script src="<?php echo base_url(); ?>assets/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>
    <!-- Fungsi datepickier yang digunakan -->
    <script type="text/javascript">
     $('.datepicker').datetimepicker({
              language:  'id',
              weekStart: 1,
              todayBtn:  1,
              autoclose: 1,
              todayHighlight: 1,
              startView: 2,
              minView: 2,
              forceParse: 0,
               inline: true,
            dateFormat: 'Y-m-d'
                });
    </script>
        <script src="<?php echo base_url()?>assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script>

</body>

</html>
