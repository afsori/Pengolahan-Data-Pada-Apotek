<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Data Obat</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-wrench"></i></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <!-- <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/remunerasi/setting/score_jabatan/241'">Tambah Data</button> -->
                    <div class="row mt-3">
                        <div class="col-md-5">
                            <form action="" method="post">
                                <div class="input-group" style="width:450px;">
                                    <input type="text" class="form-control" placeholder="Cari Data Obat.." name="keyword" id="keyword">
                                    <div class="input-group-btn" style=" width: 100px;">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Cari </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="box-footer clearfix">
                    <div type="button" name="tambah_dosen">
                        <a href="<?= site_url(); ?>Data_obat/tambahdataobat" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Obat </a>
                        <a href="<?= base_url(); ?>Datatemplate" class="btn btn-primary"><i class="fa fa-pencil-square"></i> Input Data Obat </a>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <?php if ($this->session->flashdata('flash')) : ?>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="alert alert-success alert-dismissible" role="alert">
                                Data Obat <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <table class="table table-bordered table-responsive table-striped">
                    <thead align="center">
                        <tr>
                            <th width="5%">No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_obat as $obat) {
                            ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $obat['KODE_PRODUK'] ?></td>
                                <td><?= $obat['NAMA_PRODUK'] ?></td>
                                <td><?= $obat['HARGA_DASAR'] ?></td>
                                <td>

                                    <a href="<?= base_url() ?>Data_obat/hapusobat/<?= $obat['ID']; ?>" class=" btn btn-danger btn-sm " onclick="javasciprt:return confirm('Data Obat Akan Dihapus ?')"><i class="fa fa-trash-o" aria-hidden=" true "></i></a>
                                    <a href="<?= base_url() ?>Data_obat/detailobat/<?= $obat['ID']; ?>" class=" btn btn-success btn-sm "><i class="fa fa-edit" aria-hidden=" true "></i></a>
                                    <a href="<?= base_url() ?>Data_obat/ubahdataObat/<?= $obat['ID']; ?>" class=" btn btn-primary btn-sm "><i class="fa fa-paper-plane" aria-hidden=" true "></i></a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
                <div class="row">

                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<!-- </section> -->