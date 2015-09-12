<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>KELOLA CALON</h1></br>
                        <p><a href="<?php echo base_url('sispem/tambah_calon'); ?>"><button type="button" class="btn btn-info"><b>TAMBAH</b></button></a></p>
                        <h1><?php echo $this->session->flashdata('pesan'); ?></h1>
                        <div class="row">
                            <div class="col-md-12">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>Nama</th>
                                    <th>Kelamin</th>
                                    <th>Tempat & Tgl Lahir</th>
                                    <th>Suara</th>
                                    <th>Pilihan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php foreach($data as $hasil)  { ?>
                                  <tr>
                                    <td><?php echo $hasil['nama_calon']; ?></td>
                                    <td><?php echo $hasil['kelamin']; ?></td>
                                    <td><?php echo $hasil['tempat_lahir']; ?> <?php echo $hasil['tgl_lahir']; ?></td>
                                    <td><?php echo $hasil['suara']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url()."sispem/hapcalon/".$hasil['id_calon']; ?>"><button type="button" class="btn btn-xs btn-danger">HAPUS</button></a>
                                        <a href="<?php echo base_url()."sispem/updatcalon/".$hasil['id_calon']; ?>"><button type="button" class="btn btn-xs btn-success">RUBAH</button></a>
                                    </td>

                                  </tr>
                                  <?php }?>
                                </tbody>
                              </table>
                            </div>

                    </div>
                </div>
            </div>
        </div>