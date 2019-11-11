<!-- <?php var_dump($pelanggan); ?> -->
<?php
if ($tabel_item) {
    foreach ($tabel_item as $total) {
        ?>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">

                        <h3><?php echo $total->total ?></h3>

                        <p>Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?= base_url() ?>admin/item" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
    <?php
        }
    }
    ?>

    <?php
    if ($data_designer) {
        foreach ($data_designer as $total) {
            ?>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo $total->total ?></h3>
                        <p>Data Designer</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?= base_url() ?>admin/designer" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
<?php
    }
}
?>