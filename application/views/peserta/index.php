<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <title><?php echo"$title"; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dist/semantic.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/kitchensink.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/homepage.css">

  <script src="<?php echo base_url(); ?>assets/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets/dist/semantic.js"></script>
  <script src="<?php echo base_url(); ?>assets/homepage.js"></script>

</head>
<body id="home">
  <div class="ui vertical segment">
    <div class="ui stackable center aligned page grid">
      <div class="row">
        <div class="column">
          <h1 class="ui header">
            <?php echo"$judul"; ?>
          </h1>
          <div class="ui horizontal divider"><i class="desktop icon"></i></div>
        </div>
      </div>
      <div class="four column logo row">
        <div class="column">
          <div class="#">
            <div class="sides">
              <div class="active side">
                <i class="huge github icon"></i>
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
        <div class="column">
          <div class="#">
            <div class="sides">
              <div class="side">
                <i class="#"></i>
              </div>
              <div class="side">
                <i class="#"></i>
              </div>
              <div class="active side">
                <i class="huge maxcdn icon"></i>
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
        <div class="column">
          <div class="#">
            <div class="sides">
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
              <div class="active side">
                <i class="huge weibo icon"></i>
              </div>
              <div class="side">
                <i class="#"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="#">
            <div class="sides">
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
              <div class="active side">
                <i class="huge tree icon"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
			<br />
			<br />
			<br />
			<br />
      <br />
      <div class="#">
      <div class="ui buttons">
      <div class="ui button">
        <a href="<?php echo site_url('pemilihan/suara'); ?>"/>suara</a></div>
        <div class="or"></div>
        <a href="<?php echo base_url().'pemilihan/login'; ?>"><button name="submit" type="submit" class="ui secondary button" value="SImPAN" >Masuk</button></a>
    </div>
    </div>
    </div>
          </div>
			   </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
