<h2 style="font-family: monospace; text-align: center"> INPUT DATA </h2>
<br>
<br>

<div class="container">

    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        * {
            box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 50%;
            padding: 30px;
            height: 47px;
            /* Should be removed. Only for demonstration */
        }


        @media screen and (max-width: 480px) {
            body {
                background-color: lightgreen;
            }


        }

        body {
            color: #000000;
        }

        /* Clear floats after the columns */

        .label {
            color: #000000;
        }


        .rounded-1 {
            border: 2px solid red;
            border-radius: 5px;
        }

        .swep {
            column-count: 1;
        }
        </style>
    </head>

    <body>
        <form method="post" action="<?= base_url('/WarungController/update'); ?>">

            <input type="hidden" name="id" value="<?= $id; ?>">

            <div class="column bg-color-yellow">
                <span>PRODUCT</span>
            </div>
            <!-- <div class="column bg-color-yellow" style="width: 5% !important">:</div>-->
            <div class="column bg-color-yellow">
                <select class="form-select" aria-label="Default select example" name="product">
                    <?php
                                foreach($selectproduct as $ss ) {
                             ?>
                    <option value="<?=$ss->id?>" <?php if (set_value('product') == $ss->id) : echo "selected";
                                                        endif; ?>><?=$ss->name_product?></option>
                    <?php  } ?>
                </select>
            </div>


            <div class="column bg-color-yellow">
                <span>PRICE</span>
            </div>
            <!-- <div class="column bg-color-yellow" style="width: 5% !important">:</div>-->
            <div class="column bg-color-yellow">
                <select class="form-select" aria-label="Default select example" name="price">
                    <?php
                                foreach($selectprice as $pr ) {
                             ?>
                    <option value="<?=$pr->id?>" <?php if (set_value('price') == $pr->id) : echo "selected";
                                                        endif; ?>><?=$pr->price?></option>
                    <?php  } ?>
                </select>
            </div>


            <div class="column bg-color-yellow">
                <span>PAYMENT</span>
            </div>
            <!-- <div class="column bg-color-yellow" style="width: 5% !important">:</div>-->
            <div class="column bg-color-yellow">
                <select class="form-select" aria-label="Default select example" name="payment">
                    <?php
                                foreach($selectpayment as $pp ) {
                             ?>
                    <option value="<?=$pp->id?>" <?php if (set_value('payment') == $pp->id) : echo "selected";
                                                        endif; ?>><?=$pp->name_payment?></option>
                    <?php  } ?>
                </select>
            </div>

            <div class="column bg-color-yellow">
                <span>BUYER</span>
            </div>
            <!-- <div class="column bg-color-yellow" style="width: 5% !important">:</div>-->
            <div class="column bg-color-yellow">
                <select class="form-select" aria-label="Default select example" name="buyer">
                    <?php
                                foreach($selectbuyer as $sb ) {
                             ?>
                    <option value="<?=$sb->id?>" <?php if (set_value('buyer') == $sb->id) : echo "selected";
                                                        endif; ?>><?=$sb->name_buyer?></option>
                    <?php  } ?>
                </select>
            </div>

            <div class="column bg-color-yellow">
                <span>PHONE</span>
            </div>
            <!-- <div class="column bg-color-yellow" style="width: 5% !important">:</div>-->
            <div class="column bg-color-yellow">
                <select class="form-select" aria-label="Default select example" name="phone">
                    <?php
                                foreach($selectphone as $sp ) {
                             ?>
                    <option value="<?=$sp->id?>" <?php if (set_value('phone') == $sp->id) : echo "selected";
                                                        endif; ?>><?=$sp->phone?></option>
                    <?php  } ?>
                </select>
            </div>

            <br>
            <br>
            <br>


            <div style="padding-top: 150px">
                <div style="margin-left: 20px">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-succes">
                        <?php echo anchor('WarungController','KEMBALI'); ?></button>
                </div>
            </div>
        </form>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <?php echo form_close();?>


    </body>