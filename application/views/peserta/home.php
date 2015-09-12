<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title><?php echo "$title"; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dist/semantic.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/kitchensink.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/sweet-alert.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/alertify.bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/alertify.core.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/alertify.default.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/jquery-1.9.1.js">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/alertify.min.js">
  <script src="<?php echo base_url(); ?>assets/lib/sweet-alert.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets/homepage.js"></script>
</head>
<body id="sink">
<div class="demo container">
    <br />
    <br />
<?php echo validation_errors(); ?>
<?php echo form_open('member/c_member/simpan_suara'); ?>
<div class="ui vertical segment">
    <div class="ui stackable center aligned page grid">
      <div class="row">
        <div class="column">
          <h1 class="ui header">
            <?php echo"$judul"; ?>
          </h1>
          <div class="ui horizontal divider"><i class="notched circle loading icon"></i></div>
        </div>
      </div>
      <div class="four column logo row">
      <?php //echo $soal;
      foreach($jawaban->result_array() as $j) { ?>
        <div class="column">
          <div class="#">
            <div class="sides">
              <div class="active side">
                <div class="image">
                  <img src="<?php echo base_url(); ?>assets/images/ri4.jpg" width="250" height="200">
                </div>
              </div>
              <div class="ui toggle checkbox">

                <label><b><?php echo $j["id_calon"] ?> | <?php echo  $j['nama_calon'] ?></b></label>
                <?php echo "<input type='radio' name='jwb'
                            value='".$j['id_calon']."' required /****disabled=''***/>"./* $j['jawaban'].*/""; ?>
              </div>
              <div class="side">
                <i class="#"></i>
              </div>
              <div class="side">
                <i class="#"></i>
              </div>
              <div class="side">
                <i class="#"></i>
              </div>
              <div class="side">
                <i class="#"></i>
              </div>
              <div class="side">
                <i class="#"></i>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <div class="ui horizontal divider"> Selamat Datang <?php echo $username; ?></i></div>
        <div class="column">
      <br />

      <div class="#">
      <div class="ui buttons">
        <div class="ui button">
        <a href="<?php echo base_url('member/c_member/logout'); ?>"/>Keluar</a></div>
        <div class="or"></div>
          <button name="submit" type="submit" onclick="return confirm('Pastikan Anda Sudah memilih salah satu calon dan Apa Anda Yakin ?');" class="ui positive button" value="SImPAN" >SIMPAN SUARA</button>
		</div>
    </div>
	  </div></br>

<script type="text/javascript">
$('.button.demo .follow')
  .state({
    text: {
      inactive : 'Follow',
      active   : 'Following'
    }
  })
;
</script>

<script type="text/javascript">
$(document)
  .ready(function(){
    $('.demo .ui.checkbox')
      .checkbox()
    ;
  })
;
</script>
</div>
    </div>
  </div>
</body>

</html>
  <script src="<?php echo base_url(); ?>assets/dist/semantic.js"></script>
</body>
</html>
