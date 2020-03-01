<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Messages Received</h3>
                <hr>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');
                                                        ?>"></div>
                <?php if ($this->session->flashdata('flash')) : ?>
                <?php endif; ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Email</th>
                            <th>Nama</th>
                            <th>Pesan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($messages as $msg) : ?>
                            <tr>
                                <td><?php echo $nomor ?></td>
                                <td><?php echo $msg['email'] ?></td>
                                <td><?php echo $msg['name'] ?></td>
                                <td><?php echo $msg['msg'] ?></td>
                            </tr>
                            <?php $nomor++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>