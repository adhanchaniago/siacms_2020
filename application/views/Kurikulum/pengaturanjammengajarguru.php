<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <center style="color:navy;">Pengaturan Jam Mengajar Guru <br></center>
          <br>
          </h1>
      </section>

      <section class="content">
      <!-- DATA MAPEL KELAS 7 -->
<div class="box formmapel">
  <div class="box-header" style="background-color:#5c8a8a">
    <h3 class="box-title" style="color:white">Pengaturan
    </h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body" style="padding: 1.5em;">
    <form action="<?= site_url('kurikulum/pengaturan_jammengajarsidebar') ?>" method="POST">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" checked disabled>
        <input type="checkbox" class="custom-control-input" name="no" checked hidden>
        <label class="custom-control-label">Nomor
        </label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="nama" 
               <?= ($check["nama"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Nama
        </label>
      </div>  
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="nip" 
               <?= ($check["nip"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">NIP
        </label>
      </div>                              
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="golongan" 
               <?= ($check["golongan"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Golongan
        </label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="pangkat" 
               <?= ($check["pangkat"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Jabatan
        </label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="pendidikan" 
               <?= ($check["pendidikan"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Ijazah
        </label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="nama_mapel" 
               <?= ($check["nama_mapel"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Mata pelajaran
        </label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="jatah_minim" 
               <?= ($check["jatah_minim"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Jam Mengajar per Minggu
        </label>
      </div>
      <br/>
      <input type="submit" class="btn" value="kirim">
    </form>
  </div>
  <!-- /.box-body -->
</div>  


      </section>
    