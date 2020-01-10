<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <center style="color:navy;">Pengaturan Jadwal Piket Guru <br></center>
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
    <form action="<?= site_url('kurikulum/pengaturan_jadwalpiketgurusidebar') ?>" method="POST">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="senin" 
               <?= ($check["senin"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Senin
        </label>
      </div>  
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="selasa" 
               <?= ($check["selasa"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Selasa
        </label>
      </div>                              
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="rabu" 
               <?= ($check["rabu"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Rabu
        </label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="kamis" 
               <?= ($check["kamis"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Kamis
        </label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="jumat" 
               <?= ($check["jumat"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Jum'at
        </label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="sabtu" 
               <?= ($check["sabtu"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Sabtu
        </label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="minggu" 
               <?= ($check["minggu"] == "on") ? 'checked': ''; ?>>
        <label class="custom-control-label">Minggu
        </label>
      </div>
      <br/>
      <input type="submit" class="btn" value="kirim">
    </form>
  </div>
  <!-- /.box-body -->
</div>                    
      </section>
    