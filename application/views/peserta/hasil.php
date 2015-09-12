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
  <script src="<?php echo base_url(); ?>assets/lib/sweet-alert.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets/homepage.js"></script>
</head>
<body id="sink">  
<div class="demo container">
    <br />
    <br />
<?php echo validation_errors(); ?>
<?php echo form_open('peserta/c_user/simpan_suara'); ?>
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
        <?php echo $this->graph->render();?>
      <br />
    </div>
    </div>
    </div>
  </div>
  <div class="ui horizontal divider"> Terima Kasih</i></div> 
  </div>
    </div>
  </div>
</body>

</html>
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
  <script src="<?php echo base_url(); ?>assets/dist/semantic.js"></script>
</body>
</html>
