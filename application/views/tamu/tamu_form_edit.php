<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="card-title">Edit Data</h4>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= site_url('tamu') ?>" class="btn btn-sm btn-primary float-end">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php //echo validation_error() ?>
                    <form class="forms-sample" action="" method="post">
                        <div class="form-group <?=form_error('nama') ? 'has-error' : null?>">
                            <label>Nama *</label>
                            <input type="hidden" name="tamu_id" value="<?=$row->tamu_id?>">
                            <input type="text" class="form-control" name="nama" value="<?=$this->input->post('nama') ?? $row->nama?>" placeholder="Nama">
                            <span class="help-block"><?=form_error('nama')?></span>
                        </div>
                        <div class="form-group <?=form_error('nik') ? 'has-error' : null?>">
                            <label>NIK *</label>
                            <input type="text" class="form-control" name="nik" value="<?=$this->input->post('nik') ?? $row->nik?>" placeholder="NIK">
                            <?=form_error('nik')?>
                        </div>
                        <div class="form-group <?=form_error('tanggal') ? 'has-error' : null?>">
                            <label>Tanggal *</label>
                            <input type="date" name="tanggal" value="<?=$this->input->post('tanggal') ?? $row->tanggal?>">
                            <?=form_error('tanggal')?>
                        </div>
                        <div class="form-group <?=form_error('kelamin')?>">
                            <label>Kelamin *</label>
                            <select class="form-control" name="kelamin">
                                <?php $level= $this->input->post('kelamin') ? $this->input->post('kelamin') : $row->kelamin ?>
                                <option value="">-- PILIH --</option>
                                <option value="1" <?=$kelamin = 1 ? 'selected' : null ?>>Laki-Laki</option>
                                <option value="2" <?=$kelamin = 2 ? 'selected' : null ?>>Perempuan</option>
                            </select>
                            <?=form_error('kelamin')?>
                        </div>
                        <div class="form-group <?=form_error('alamat') ? 'has-error' : null?>">
                            <label>Alamat *</label>
                            <textarea class="form-control" name="alamat" rows="4"><?=$this->input->post('alamat') ?? $row->alamat?></textarea>
                            <?=form_error('alamat')?>
                        </div>
                        <div class="form-group <?=form_error('kepentingan') ? 'has-error' : null?>">
                            <label>Kepentingan *</label>
                            <input type="text" class="form-control" name="kepentingan" value="<?=$this->input->post('kepentingan') ?? $row->kepentingan?>" placeholder="Kepentingan">
                            <?=form_error('kepentingan')?>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button type="reset" class="btn btn-light">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>