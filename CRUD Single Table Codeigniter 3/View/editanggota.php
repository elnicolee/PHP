<div class="container">
    <div class="row">



        <div class="col-md-12">
            <form action="<?= base_url('/AnggotaController/update'); ?>" method="POST" role="form">
                <legend style="text-align: center">FORM EDIT DATA</legend>

                <input type="hidden" name="id" value="<?= $row['id_anggota']; ?>">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>"
                        id="" placeholder="Input field">
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $row['alamat'] ?>"
                        id="" placeholder="Input field">
                </div>

                <div class="form-group">
                    <label for="">Kota</label>
                    <input type="text" class="form-control" name="kota" value="<?= $row['kota'] ?>"
                        id="" placeholder="Input field">
                </div>

                <div class="form-group">
                    <label for="">No Telpon</label>
                    <input type="text" class="form-control" name="no_telp" value="<?= $row['no_telp'] ?>"
                        id="" placeholder="Input field">
                </div>

                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="text" class="form-control" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>"
                        id="" placeholder="Input field">
                </div>


                <a href="<?= base_url('AnggotaController/'); ?>" class="btn btn-warning">Kembali</a>
                 <button type="submit"  class="btn btn-primary">Submit</button> 
            </form>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">