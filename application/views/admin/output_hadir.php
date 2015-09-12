<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/repot.css">
</head>
<body>
 <div id="wrapper">
  <h1>Laporan Peserta Pemilihan</h1><hr /><hr color="#333333" size="15"/>

  <table id="keywords" cellspacing="0" cellpadding="100">
    <thead>
      <tr>
        <th><span>No. ID</span></th>
        <th><span>Nama</span></th>
        <th><span>Jenis Kelamin</span></th>
        <th><span>Tempat & Tanggal Lahir</span></th>
        <th><span>Total Suara</span></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data as $hasil)  { ?>
      <tr>
        <td class="lalign"><?php echo $hasil['no_id']; ?></td>
        <td><?php echo $hasil['username']; ?></td>
        <td><?php echo $hasil['kelamin']; ?></td>
        <td><?php echo $hasil['tempat_lahir']; ?> <?php echo $hasil['tgl_lahir']; ?></td>
        <td><?php echo $hasil['status']; ?></td>
      </tr>
       <?php }; ?>
      <tr>
      	<td>&nbsp;</td>
      </tr>
      <tr style="font-style:italic; font-size:14px;">
        <td>Total Peserta</td>
        <td>:</td>
        <td><b><?php echo $data2; ?></b></td>
      </tr>
      <tr>
      	<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Ttd,</td>
        <td>Ttd,</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      	<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(Admin)</td>
        <td>(Panitia)</td>

      </tr>
    </tbody>
  </table>
 </div>
</body>
<script>
$(function(){
  $('#keywords').tablesorter();
});
</script>
</html>