<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>KELOLA LAPORAN HADIR</h1></br>
                        <p>
                           <a href="<?php echo base_url()."sispem/print_hadir/"; ?>">
                            <button type="button" class="btn btn-info"><b>EXPORT PDF</b></button></a>
                        </p>
                        <div class="row">
                            <div class="col-md-12">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>&nbsp;</th>
                                    <th>No.ID</th>
                                    <th>Nama</th>
                                    <th>Kelamin</th>
                                    <th>Tempat & Tgl Lahir</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php foreach($data as $hasil)  { ?>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td><?php echo $hasil['no_id']; ?></td>
                                    <td><?php echo $hasil['username']; ?></td>
                                    <td><?php echo $hasil['kelamin']; ?></td>
                                    <td><?php echo $hasil['tempat_lahir']; ?>  <?php echo $hasil['tgl_lahir']; ?></td>
                                    <td><?php echo $hasil['status']; ?></td>
                                  </tr>
                                    <?php }; ?>
                                </tbody>
                              </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="well">
            <h4><b>Total Peserta Terdaftar :</b> <b><?php echo $data2; ?></b></h4>
        </div>