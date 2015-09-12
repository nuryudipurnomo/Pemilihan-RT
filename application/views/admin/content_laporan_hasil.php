<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>KELOLA LAPORAN HASIL</h1></br>
                        <p><a href="<?php echo base_url('sispem/print_hasil'); ?>"><button type="button" class="btn btn-info"><b>EXPORT PDF</b></button></a></p>
                        <h1><?php echo $this->session->flashdata('pesan'); ?></h1>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="well">
                                    <div align="center"><?php echo $this->graph->render();?></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <?php foreach($data1 as $hasil)  { ?>
                          <div <div class="col-xs-6 col-md-3">
                            <div class="well">
                                <p>Nama : <?php echo $hasil['nama_calon']; ?></p>
                                <p>Jenis Kelamin : <?php echo $hasil['kelamin']; ?></p>
                                <p>Tempat & Tanggal Lahir : <?php echo $hasil['tempat_lahir']; ?> <?php echo $hasil['tgl_lahir']; ?></p>
                                <p>SUARA : <b><?php echo $hasil['suara']; ?></b></p>
                            </div>
                          </div>
                              <?php }?>
                            </div>
                                <div class="col-md-12">
                                    <div class="well">
                                        <div>
                                        </div>
                                    </div>
                                </div>


                    </div>
                </div>
            </div>
        </div>