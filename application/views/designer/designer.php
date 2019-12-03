<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Designer List</h3>
                <hr>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');
                                                        ?>"></div>
                <?php if ($this->session->flashdata('flash')) : ?>
                <?php endif; ?>
                <a href="<?= base_url('') ?>admin/designer/addItem" class="btn btn-primary">Add Person</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Designer</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($item as $produk) : ?>
                            <tr>
                                <td><?php echo $nomor ?></td>
                                <td><?php echo $produk['nama'] ?></td>
                                <td><?php echo $produk['deskripsi'] ?></td>
                                <td>
                                    <a href="<?= base_url('') ?>admin/designer/detailItem/<?= $produk['id'] ?>" class="btn btn-primary">Detail</a>
                                    <a href="<?= base_url('') ?>admin/designer/updateItem/<?= $produk['id'] ?>" class="btn btn-warning">Ubah</a>
                                    <a href="<?= base_url('') ?>admin/designer/deleteItem/<?= $produk['id'] ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>