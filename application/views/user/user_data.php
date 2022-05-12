<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="card-title">Data User</h4>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= site_url('user/add') ?>" class="btn btn-sm btn-primary float-end">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <input type='text' id='input' onkeyup='searchTable()' placeholder="cari nama disini...">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Usernama</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach($row->result() as $key => $data ){ ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->username ?></td>
                                    <td><?= $data->nama ?></td>
                                    <td><?= $data->alamat ?></td>
                                    <td><?= $data->level == 1 ? "Super Admin" : "Tamu" ?></td>
                                    <td class="text-center" width="160px">
                                        <div class="btn-group btn-group-square" role="group" aria-label="">
                                            <form action="<?=site_url('user/del')?>" method="post">
                                                <a href="<?=site_url('user/edit/'. $data->user_id)?>" class="btn btn-primary">Edit</a>
                                                <input type="hidden" name="user_id" value="<?=$data->user_id?>">
                                                <button onclick="return confirm('Apakah yakin menghapus?')" class="btn btn-danger">Delete</buton>
                                            </form>
                                        </div>
                                    </td>
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
