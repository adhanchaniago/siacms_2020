<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <center style="color:navy;">Pengaturan Mengelola Hari & Jam <br></center>
          <br>
          </h1>
      </section>

      <section class="content">
      <h4>
        <center>
            <b>Pengaturan Hari
            </b>
        </center>
        </h4>
        <h5>
        <center>
            <b>Pilihlah Hari Untuk Kelola Jam Belajar
            </b>
        </center>
        </h5>
        <br>
        <div class="box formmapel">
        <div class="box-header" style="background-color:#5c8a8a">
            <h3 class="box-title" style="color:white">Hari Belajar
            </h3>
        </div>
        <div style="padding:20px;">
            <form id="form_pengaturan_hari" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('kurikulum/savepengaturanharisidebar'); ?>">  
            <input type="hidden" name="tab_loc" value="2" id="tab_loc">
            <?php
        foreach ($tabel_pengaturan_hari as $tabel) 
        { 
        ?>
            <input type="checkbox" class="flat" name="nilai_<?php echo $tabel->id_pengaturan; ?>" value="1" 
                    <?php 
            if ($tabel->nilai == "1") 
            { echo " checked"; } ?>>
            <label>
                <?php echo $tabel->atribut; ?>
            </label>
            <br> 
            <?php 
        }
        ?>
            <br>
            <div class="modal-footer" align="center">
                <button type="submit" class="btn btn-success" >Aktifkan Hari
                </button>
            </div>    
            </form>
        </div>

      </section>
    