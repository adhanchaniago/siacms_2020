<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <center style="color:navy;">Pengaturan Jadwal Tambahan <br></center>
          <br>
          </h1>
      </section>

      <section class="content">
      <div class="box">
  <div class="box-header">
    <!-- <h3 class="text-center">Pengaturan Jadwal Tambahan
    </h3> -->
    <p class="text-center">Berikan tanda centang pada atribut formulir yang ingin di isi.
    </p>
  </div>
  <hr>
  <div style="padding:20px;">                
    <form action="<?= site_url('kurikulum/pengaturan_jadwaltambahansidebar') ?>" method="POST">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" checked disabled>
        <input type="checkbox" class="custom-control-input" name="no" checked hidden>
        <label class="custom-control-label">Nomor
        </label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="tanggal" 
               <?= ($check["tanggal"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Tanggal
        </label>
      </div>                             
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="kelas" 
               <?= ($check["kelas"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Kelas
        </label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="mapel" 
               <?= ($check["mapel"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Mata Pelajaran
        </label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="guru" 
               <?= ($check["guru"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Guru
        </label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="jam_mulai_selesai" 
               <?= ($check["jam_mulai_selesai"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Jam Mulai & Selesai
        </label>
      </div>
      <br/>
      <input type="submit" class="btn" value="kirim">
    </form>
  </div>
          
      </section>
    