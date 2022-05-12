<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="card-title">Tambah User</h4>
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
                            <label>Nama *</label>
                            <input type="text" class="form-control" name="nama" value="<?=set_value('nama')?>" placeholder="Nama">
                            <span class="help-block"><?=form_error('nama')?></span>
                        </div>
                        <div class="form-group <?=form_error('username') ? 'has-error' : null?>">
                            <label>Username *</label>
                            <input type="text" class="form-control" name="username" value="<?=set_value('username')?>" placeholder="Username">
                            <?=form_error('username')?>
                        </div>
                        <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                            <label>Password *</label>
                            <input type="password" class="form-control" name="password" value="<?=set_value('password')?>" placeholder="Password">
                            <?=form_error('password')?>
                        </div>
                        <div class="form-group <?=form_error('alamat') ? 'has-error' : null?>">
                            <label>Alamat *</label>
                            <textarea class="form-control" name="alamat" rows="4"><?=set_value('alamat')?></textarea>
                            <?=form_error('alamat')?>
                        </div>
                        <div class="form-group <?=form_error('level')?>">
                            <label>Level</label>
                            <select class="form-control" name="level">
                                <option value="">-- PILIH --</option>
                                <option value="1" <?=set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                                <option value="2" <?=set_value('level') == 2 ? "selected" : null ?>>User</option>
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