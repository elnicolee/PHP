<h2 style="font-family: monospace; text-align: center"> LIST DATA ANGGOTA </h2>

<button type="button" class="btn btn-dark btn-lg"><?php echo anchor('AnggotaController/input','INPUT'); ?></button>
<br>
<br>
<div class="container-lg">
<?php echo $this->session->flashdata('pesan');?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">KOTA</th>
      <th scope="col">NO TELPON</th>
      <th scope="col">TANGGAL LAHIR</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>

  <?php
        $no = 1;
        foreach ($record as $r)
         {
            ?>
            <tr>
                <td>
                    <?= $no; ?>
                </td>
                <td>
                    <?= $r->nama; ?>
                </td>
                <td>
                    <?= $r->alamat; ?>
                </td>
                <td>
                    <?= $r->kota; ?>
                </td>
                <td>
                    <?= $r->no_telp; ?>
                </td>
                <td>
                    <?= $r->tgl_lahir; ?>
                </td>
                <td>
                    <a href="<?php echo base_url('AnggotaController/edit/'); ?><?= $r->id_anggota; ?>" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    
                    <a href="<?php echo base_url('AnggotaController/delete/'); ?><?= $r->id_anggota; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <?php $no++;
        } ?>
  </tbody>
   
</table>
</div>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </tbody>
</table>
