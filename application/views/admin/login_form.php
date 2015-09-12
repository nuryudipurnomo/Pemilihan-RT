<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title><?php echo"$title"; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dist/semantic.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/kitchensink.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/homepage.css">
  <script src="<?php echo base_url(); ?>assets/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/modernizr.custom.js"></script>

  <script src="<?php echo base_url(); ?>assets/homepage.js"></script>
  <script>if(Modernizr.input.placeholder)document.getElementsByTagName('html')[0].className+=' inputplaceholder';</script>
</head>
<body id="home">
  <div class="ui vertical segment">
    <div class="ui stackable center aligned page grid">
      <div class="row">
        <div class="column">
          <h1 class="ui header">
            <?php echo"$judul"; ?>
          </h1>
          <div class="ui horizontal divider"><i class="notched circle loading icon"></i>
          </div>
          <div class=" ui form segment">
            <div class="field">
            <?php echo form_open("auth/cek_login_admin"); ?>
            <table align="center">
                <tbody>
                <tr>
                  <td><label>Masukan Nama Anda</label></td>
                  <td>&nbsp;</td>
                  <td><input type="text" name="username" placeholder="Nama Anda" required></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><label>Masukan Password</label></td>
                  <td>&nbsp;</td>
                  <td>
                  <div class="field">
                    <div class="ui left icon input">
                      <i class="lock icon"></i>
                    <input type="password" name="password" class="login-field  login-field-password" id="password-3"  id="no_id" placeholder="Masukan no ID Anda" required></td>
                    </div>
                  </div>
                </tr>
                 <tr>
                  <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td></td>
                <tr>
                  <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><div class="login-footer">
                    <input type="checkbox" id="show-password">
                    <label for="show-password">Lihat Password</label>
                </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <tr></tr>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                  <div>
                    <input type="submit" name="submit" value="MASUK" class="ui submit button"/>
                  </div>
                  </td>
                </tr>
                </tbody>
            </table>
            <?php echo form_close(); ?>
           </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<!-- including the plugin -->
<script src="<?php echo base_url(); ?>assets/js/hideShowPassword.min.js"></script>
<script>

// Example 1:
// - Password hidden by default
// - Inner toggle shown
$('#password-1').hidePassword(true);

// Example 2:
// - Password shown by default
// - Toggle shown on 'focus' of element
// - Custom toggle class
$('#password-2').showPassword('focus', {
  toggle: { className: 'my-toggle' }
});

// Example 3:
// - When checkbox changes, toggle password
//   visibility based on its 'checked' property
$('#show-password').change(function(){
  $('#password-3').hideShowPassword($(this).prop('checked'));
});

</script>

</html>
