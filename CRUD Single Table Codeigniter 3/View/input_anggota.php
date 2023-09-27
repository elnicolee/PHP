<h2 style="font-family: monospace; text-align: center"> INPUT DATA </h2>
<br>
<br>
<?php echo form_open('AnggotaController/input_simpan'); ?>
<div class="container">
<table class="table table-dark table-striped" >
  <tr><td>NAMA</td><td ><?php echo form_input('nama', '',array('placeholder'=>''));?></td></tr>
  <tr><td>ALAMAT</td><td><?php echo form_input('alamat', '',array('placeholder'=>''));?></td></tr>
  <tr><td>KOTA</td><td><?php echo form_input('kota', '',array('placeholder'=>''));?></td></tr>
  <tr><td>NO TELP</td><td><?php echo form_input('no_telp', '',array('placeholder'=>''));?></td></tr>
  <tr><td>TGL LAHIR</td><td><?php echo form_input('tgl_lahir', '',array('placeholder'=>''));?></td></tr>
  <tr><td cospan="2">
  <br>
  <br>
  <button type="submit" class="btn btn-black"><?php echo form_submit('SUBMIT' ,'SIMPAN DATA');?></button>
  <button type="submit" class="btn btn-succes"> <?php echo anchor('AnggotaController','KEMBALI'); ?></button>
    
    
</td></tr>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</table>
    <?php echo form_close();?>       