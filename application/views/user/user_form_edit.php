<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="card-title">Edit User</h4>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= site_url('user') ?>" class="btn btn-sm btn-primary float-end">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php //echo validation_error() ?>
                    <form class="forms-sample" action="" method="post">
                        <div class="form-group <?=form_error('nama') ? 'has-error' : null?>">
                            <label>Nama</label>
                            <input type="hidden" name="user_id" value="<?=$row->user_id?>">
                            <input type="text" class="form-control" name="nama" value="<?=$this->input->post('nama') ?? $row->nama?>" placeholder="Nama">
                            <span class="help-block"><?=form_error('nama')?></span>
                        </div>
                        <div class="form-group <?=form_error('username') ? 'has-error' : null?>">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="<?=$this->input->post('username') ?? $row->username?>" placeholder="Username">
                            <?=form_error('username')?>
                        </div>
                        <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                            <label>Password</label> <small>(Biarkan kosong jika tidak ingin diganti)</small>
                            <input type="password" class="form-control" name="password" value="<?=$this->input->post('password')?>" placeholder="Password">
                            <?=form_error('password')?>
                        </div>
                        <div class="form-group <?=form_error('alamat') ? 'has-error' : null?>">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" rows="4"><?=$this->input->post('alamat') ?? $row->alamat?></textarea>
                            <?=form_error('alamat')?>
                        </div>
                        <div class="form-group <?=form_error('nik') ? 'has-error' : null?>">
                            <label>NIK *</label>
                            <input type="text" class="form-control" name="nik" value="<?=$this->input->post('nik') ?? $row->nik?>" placeholder="NIK">
                            <?=form_error('nik')?>
                        </div>
                        <div class="form-group <?=form_error('kepentingan') ? 'has-error' : null?>">
                            <label>Kepentingan *</label>
                            <input type="text" class="form-control" name="kepentingan" value="<?=$this->input->post('kepentingan') ?? $row->kepentingan?>" placeholder="Kepentingan">
                            <?=form_error('kepentingan')?>
                        </div>
                        <div class="form-group <?=form_error('level')?>">
                            <label>Level *</label>
                            <select class="form-control" name="level">
                                <?php $level= $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                                <option value="">-- PILIH --</option>
                                <option value="1">Admin</option>
                                <option value="2" <?=$level = 2 ? 'selected' : null ?>>Tamu</option>
                            </select>
                            <?=form_error('level')?>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button type="reset" class="btn btn-light">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>