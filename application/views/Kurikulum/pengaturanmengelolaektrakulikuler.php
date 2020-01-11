<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <center style="color:navy;">Pengaturan Mengelola Ektrakulikuler <br></center>
          <br>
          </h1>
      </section>

      <section class="content">
        <!-- DATA MAPEL KELAS 7 -->
        <div class="box formmapel">
            <div class="box-header" style="background-color:#5c8a8a">
              <h3 class="box-title" style="color:white">Pengaturan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="padding: 1.5em;">

              <form action="<?= site_url('ekstrakurikuler/pengaturan_ekstrakurikulersidebar') ?>" method="POST">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" checked disabled>
                  <input type="checkbox" class="custom-control-input" name="no" checked hidden>
                  <label class="custom-control-label">Nomor</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="hari" <?= ($check["hari"] == "on") ? 'checked': ''; ?>>
                  <label class="custom-control-label">Hari</label>
                </div>  
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="jam_mulai" <?= ($check["jam_mulai"] == "on") ? 'checked': ''; ?>>
                  <label class="custom-control-label">Jam Mulai</label>
                </div>                              
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="jam_selesai" <?= ($check["jam_selesai"] == "on") ? 'checked': ''; ?>>
                  <label class="custom-control-label">Jam Selesai</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="jenis_kls_tambahan" <?= ($check["jenis_kls_tambahan"] == "on") ? 'checked': ''; ?>>
                  <label class="custom-control-label">Jenis Ekstrakulikuler</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="tempat" <?= ($check["tempat"] == "on") ? 'checked': ''; ?>>
                  <label class="custom-control-label">Tempat</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="pembimbing" <?= ($check["pembimbing"] == "on") ? 'checked': ''; ?>>
                  <label class="custom-control-label">Pembimbing</label>
                </div>
                <br/>
                <input type="submit" class="btn" value="kirim">
              </form>
            </div>
            <!-- /.box-body -->
          </div> 


      </section>
    </div>
    