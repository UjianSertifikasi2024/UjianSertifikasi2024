<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 text-center" style=''>
                    <center>
                        <h1>Laporan Kasus PMI</h1>
                    </center>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-header">
                            <!-- <a href="<?= base_url('Admin/Admin//tambahSKeluar/') . $user['NIP']; ?>"
                                class="btn btn-secondary float-left">TAMBAHKAN DATA</a>
                            <div class="btn-group" id='pdf' style="margin-left:1400px;">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class='fa fa-download'></i>
                                    Export
                                </button>
                                <ul class="dropdown-menu" id='dropdowns'>
                                    <li><a class="dropdown-item bg-warning" style='text-align: center; margin:auto;'
                                            id='dropdown' href="<?= base_url('Admin/Export/suratkeluar/') ?>"><i
                                                class='fa fa-download'></i>PDF</a>
                                    </li>
                                    <li><a class="dropdown-item bg-success align-text-center" id='dropdown'
                                            style='margin:5px auto 5px auto ; text-align: center; '
                                            href="<?= base_url('Admin/Pmi_ilegal/export/') ?>"><i
                                                class='fa fa-download'></i>EXCEL</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>

                        <div class="card-body">
                            <?= $this->session->flashdata('message'); ?>
                            <center>
                                <table id="example1" class="table table-bordered table-striped"
                                    style="margin-left:auto;margin-right:auto;" border='1'>
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama PMI</th>
                                            <th>Tanggal Pengaduan</th>
                                            <th>No Paspor</th>
                                            <th>Alamat</th>
                                            <th>Negara Penempatan</th>
                                            <th>Jenis Kasus</th>
                                            <th>P3MI</th>
                                            <th>Uraian Kasus</th>
                                            <th>Penyelesaian</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($kasus as $us): ?>
                                            <tr>
                                                <td>
                                                    <?= $i; ?>.
                                                </td>
                                                <td>
                                                    <?= $us['nama_pmi']; ?>
                                                </td>
                                                <td>
                                                    <?= $us['tgl_pengaduan']; ?>
                                                </td>
                                                <td>
                                                    <?= $us['no_paspor']; ?>
                                                </td>
                                                <td>
                                                    <?= $us['alamat']; ?>
                                                </td>
                                                <td>
                                                    <?= $us['negara_penempatan']; ?>
                                                </td>
                                                <td>
                                                    <?= $us['jenis_kasus']; ?>
                                                </td>
                                                <td>
                                                    <?= $us['p3mi']; ?>
                                                </td>
                                                <td>
                                                    <?= $us['uraian_kasus']; ?>
                                                </td>
                                                <td>
                                                    <?= $us['penyelesaian']; ?>
                                                </td>
                                                <td>
                                                    <?= $us['keterangan']; ?>
                                                </td>
                                               
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                        </tfoot>
                                </table>
                        </div>
                        </center>
                        <!-- /.card-body -->
                    </div>