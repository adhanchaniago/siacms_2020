<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <center style="color:navy;">Pengaturan Tambah Mapel <br></center>
          <br>
          </h1>
      </section>

      <section class="content">
        <div class="box formmapel">
            <div class="box-header" style="background-color:#5c8a8a">
                <h3 class="box-title" style="color:white">Pengaturan
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="padding: 1.5em;">
                <form action="<?= site_url('kurikulum/pengaturan_mapel_sidebar') ?>" method="POST">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked disabled>
                    <input type="checkbox" class="custom-control-input" name="no" checked hidden>
                    <label class="custom-control-label">Nomor
                    </label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked disabled>
                    <input type="checkbox" class="custom-control-input" name="nama_mapel" checked hidden>
                    <label class="custom-control-label">Nama Pelajaran
                    </label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="kkm" 
                        <?= ($check["kkm"] == "on") ? 'checked': ''; ?>>
                    <label class="custom-control-label">KKM
                    </label>
                </div>                              
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="jam_belajar" 
                        <?= ($check["jam_belajar"] == "on") ? 'checked': ''; ?>>
                    <label class="custom-control-label">Jam Belajar per Minggu
                    </label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="jenjang" 
                        <?= ($check["jenjang"] == "on") ? 'checked': ''; ?>>
                    <label class="custom-control-label">Kelas
                    </label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="total_kelas" 
                        <?= ($check["total_kelas"] == "on") ? 'checked': ''; ?>>
                    <label class="custom-control-label">Jumlah Kelas
                    </label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="jum_jam_belajar" 
                        <?= ($check["jum_jam_belajar"] == "on") ? 'checked': ''; ?>>
                    <label class="custom-control-label">Jumlah Jam Belajar
                    </label>
                </div>
                <br/>
                <input type="submit" class="btn" value="kirim">
                </form>
            </div>
        <!-- /.box-body -->
        </div>

      </section>
    