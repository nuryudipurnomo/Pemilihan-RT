            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>RUBAH DATA CALON</h1></br>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="jumbotron">
                                  <p>
                                    <?php
                                    $attributes = array('class' => 'form-horizontal');
                                    echo form_open('sispem/do_updatcalon', $attributes);
                                    ?>
                                        <input type="text"name="id_calon" value="<?php echo $id_calon; ?>" hidden>
                                        <div class="form-group form-group-lg">
                                            <label class="col-sm-2 control-label" for="lg">Nama Calon</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="nama_calon" value="<?php echo $nama_calon; ?>" id="lg" class="form-control"  />
                                                </div>
                                        </div>
                                        <div class="form-group form-group-lg">
                                            <label class="col-sm-2 control-label" for="lg">Jenis Kelamin</label>
                                                <div class="col-sm-6">
                                                    <?php
                                                        $options = array(
                                                          'pria'  => 'pria',
                                                          'wanita'    => 'wanita',
                                                        );
                                                     ?>
                                                     <?php
                                                        echo form_dropdown('kelamin', $options,"", "class='form-control'")
                                                     ?>
                                                </div>
                                        </div>
                                        <div class="form-group form-group-lg">
                                            <label class="col-sm-2 control-label" for="lg">Tempat lahir</label>
                                                <div class="col-sm-6">
                                                <input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" id="lg" class="form-control"  />
                                        </div>
                                        </div>
                                        <div class="form-group form-group-lg">
                                            <label class="col-sm-2 control-label" for="lg">Tanggal Lahir</label>
                                                <div class="col-sm-6">
                                                        <input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" id="lg" class="form-control">
                                                </div>
                                        </div>

                                        <?php
                                        echo form_submit('submit', 'SIMPAN!', 'class="btn btn-primary btn-lg"');
                                        ?>
                                        <a href="<?php echo base_url()."sispem/panel_peserta/"; ?>"><button type="button" class="btn btn-primary btn-lg">Batal</button></a>
                                  </p></br></br>
                                 </div>
                                 </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>