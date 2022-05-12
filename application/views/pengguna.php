<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="card-title">Check In</h4>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= site_url('tamu') ?>" class="btn btn-sm btn-primary float-end">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                            <form class="forms-sample" action="" method="post">
                                <center>
                                    <img src="<?=base_url()?>/assets/images/user.png" width="70%">
                                </center>
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <button type="reset" class="btn btn-light">Reset</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <table class="table" border="0" cellpadding="0" >
                                <tr>
                                    <th><p>Nama</p></th>
                                    <td><p>:</p></td>
                                    <td><p><?= ucfirst($this->fungsi->user_login()->nama)?></p></td>
                                </tr>
                                <tr>
                                    <th><p>Username</p></th>
                                    <td><p>:</p></td>
                                    <td><p><?= $this->fungsi->user_login()->username?></p></td>
                                </tr>
                                <tr>
                                    <th><p>NIK</p></th>
                                    <td><p>:</p></td>
                                    <td><p><?= $this->fungsi->user_login()->nik?></p></td>
                                </tr>
                                <tr>
                                    <th><p>Kepentingan</p></th>
                                    <td><p>:</p></td>
                                    <td><p><?= ucfirst($this->fungsi->user_login()->kepentingan)?></p></td>
                                </tr>
                                <tr>
                                    <th><p>Level</p></th>
                                    <td><p>:</p></td>
                                    <td><p><?= ucfirst($this->fungsi->user_login()->level == 1 ? "Super Admin" : "Tamu" )?></p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>