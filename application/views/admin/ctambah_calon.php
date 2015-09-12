            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>TAMBAH CALON</h1></br>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="jumbotron">
                                  <p>
                                    <?php
                                    $attributes = array('class' => 'form-horizontal');
                                    echo form_open('/sispem/tcalon', $attributes);
                                    ?>
                                        <div class="form-group form-group-lg">
                                            <label class="col-sm-2 control-label" for="lg">Nama Calon</label>
                                                <div class="col-sm-6">
                                                        <?php
                                                    $data = array(
                                                                  'name'        => 'nama_calon',
                                                                  'id'          => 'username',
                                                                  'class'        => 'form-control',
                                                                  'id'       => 'lg',
                                                                );

                                                    echo form_input($data, '', 'required');
                                                    ?>
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
                                                        <?php
                                                    $data = array(
                                                                  'name'        => 'tempat_lahir',
                                                                  'id'          => 'username',
                                                                  'class'        => 'form-control',
                                                                  'id'       => 'lg',
                                                                );

                                                    echo form_input($data);
                                                    ?>
                                                </div>
                                        </div>
                                        <div class="form-group form-group-lg">
                                            <label class="col-sm-2 control-label" for="lg">Tanggal Lahir</label>
                                                <div class="col-sm-6">
                                                        <input type="date" name="tgl_lahir" value="" id="lg" class="form-control">
                                                </div>
                                        </div>
                                        <?php
                                        echo form_submit('submit', 'SIMPAN!', 'class="btn btn-primary btn-lg"');
                                        ?>
                                        <a href="<?php echo base_url()."sispem/panel_calon"; ?>"><button type="button" class="btn btn-primary btn-lg">Batal</button></a>
                                  </p></br></br>
                                 </div>
                                 </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>