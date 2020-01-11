<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <center style="color:navy;">Pengaturan Presensi Siswa <br></center>
          <br>
          </h1>
      </section>

      <section class="content">
      <div class="box">
                      <div class="box-header">
                        <h3 class="box-title" style="width: 100%">Pengaturan</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body" style="padding: 1.5em;">

                        <form action="<?= site_url('kurikulum/pengaturan_presensisidebar') ?>" method="POST">

                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="h" <?= ($check["h"] == "on") ? 'checked': ''; ?>>
                            <label class="custom-control-label">Hadir</label>
                          </div>                              
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="s" <?= ($check["s"] == "on") ? 'checked': ''; ?>>
                            <label class="custom-control-label">Sakit</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="i" <?= ($check["i"] == "on") ? 'checked': ''; ?>>
                            <label class="custom-control-label">Ijin</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="a" <?= ($check["a"] == "on") ? 'checked': ''; ?>>
                            <label class="custom-control-label">Absen</label>
                          </div>
                          <br/>
                          <input type="submit" class="btn" value="kirim">
                        </form>
                      </div>
                      <!-- /.box-body -->
                    </div>
      </section>
</div>
    