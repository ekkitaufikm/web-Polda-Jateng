<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="card-title">Daftar Tamu</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <input type='text' id='input' onkeyup='searchTable()' placeholder="cari nama disini...">
                        <table class="table table-striped" id="daftarNama">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Tanggal</th>
                                    <th>Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kepentingan</th>
                                    <?php if($this->session->userdata('level') == 1) { ?>
                                    <th>Action</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach($row->result() as $key => $data ){ ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->nama ?></td>
                                    <td><?= $data->nik ?></td>
                                    <td><?= $data->tanggal ?></td>
                                    <td><?= $data->kelamin == 1 ? "Laki-Laki" : "Perempuan" ?></td>
                                    <td><?= $data->alamat ?></td>
                                    <td><?= $data->kepentingan ?></td>
                                    <?php if($this->session->userdata('level') == 1) { ?>
                                    <td class="text-center" width="160px">
                                        <div class="btn-group btn-group-square" role="group" aria-label="">
                                            <form action="<?=site_url('tamu/del')?>" method="post">
                                                <a href="<?=site_url('tamu/edit/'. $data->tamu_id)?>" class="btn btn-primary">Edit</a>
                                                <input type="hidden" name="tamu_id" value="<?=$data->tamu_id?>">
                                                <button onclick="return confirm('Apakah yakin menghapus?')" class="btn btn-danger">Delete</buton>
                                            </form>
                                        </div>
                                    </td>
                                    <?php } ?>
                                </tr>
                                <?php 
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
