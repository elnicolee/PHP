<h2 style="font-family: monospace; text-align: center"> LIST DATA WARUNG </h2>
<br>
<button type="button" class="btn btn-dark btn-lg"
    style="margin-left: 200px"><?php echo anchor('WarungController/input','INPUT'); ?></button>
<br>
<br>
<div class="container">
    <?php echo $this->session->flashdata('pesan');?>
    <table class="table">
        <thead>
            <tr>
                <th style="text-align: center" scope="col">NO</th>
                <th style="text-align: center" scope="col">NAMA PRODUCT</th>
                <th style="text-align: center" scope="col">PRICE</th>
                <th style="text-align: center" scope="col">PAYMENT</th>
                <th style="text-align: center" scope="col">BUYER</th>
                <th style="text-align: center" scope="col">PHONE</th>
                <th style="text-align: center" scope="col">CREATED AT</th>
                <th style="text-align: center" scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>

            <?php
        $no = 1;
        foreach ($record as $r)
         {
            ?>
            <tr>
                <td style="text-align: center">
                    <?= $no; ?>
                </td>
                <td style="text-align: center">
                    <?= $r->name_product; ?>
                </td>
                <td style="text-align: center">
                    <?= $r->price; ?>
                </td>
                <td style="text-align: center">
                    <?= $r->name_payment; ?>
                </td>
                <td style="text-align: center">
                    <?= $r->name_buyer; ?>
                </td>
                <td style="text-align: center">
                    <?= $r->phone; ?>
                </td>
                <td style="text-align: center">
                    <?= $r->created_at; ?>
                </td>
                <td style="text-align: center">
                    <a href="<?php echo base_url('WarungController/edit/'); ?><?= $r->id; ?>"
                        class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url('WarungController/delete/'); ?><?= $r->id; ?>"
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <?php $no++;
        } ?>
        </tbody>

    </table>
</div>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</tbody>
</table>