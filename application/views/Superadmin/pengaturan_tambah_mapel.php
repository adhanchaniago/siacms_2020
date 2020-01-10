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
            <div class="box-header" style="background-color:     #5c8a8a">
                <h3 class="box-title" style="color:white">Pengaturan
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style = "padding :30px;">
                <table id="warna_table" class="table table-bordered table-striped tabel-tambah-mapel">
                <thead>
                    <tr>
                        <th class="fit">No</th>
                        <th>Nama</th>
                        <th>Warna</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    foreach ($warna as $w) {
                        $i++; ?>
                        <tr>
                            <td class="fit">
                                <?php echo $i; ?>
                            </td>
                            <td>
                                <?php echo $w->nama; ?>
                            </td>
                            <td>
                                <span style="background-color: <?php echo $w->warna; ?>;">
                                <font color= "<?php echo $w->warna; ?>">Magnifico
                                </font>
                                </span>
                            </td>
                            <td>
                                <?php echo $w->aktif == 1 ? "Aktif" : "Tidak"; ?>
                            </td>
                            <td> 
                                <a class="btn btn-block btn-primary button-action btnedit edit_warna" href="#" data_id="<?php echo $w->id; ?>" 
                                data_nama="<?php echo $w->nama; ?>" data_warna="<?php echo $w->warna; ?>"  data_aktif="<?php echo $w->aktif; ?>"> Edit 
                                </a>
                                <a onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-primary button-action btnhapus" 
                                href="<?php echo site_url('superadmin/hapuswarnamapelsidebar/'.$w->id); ?>" > Hapus 
                                </a>
                            </td>               
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            </div>
            <div class="formmapel">
            <div class="box-header" style="background-color:#5c8a8a">
                <h3 class="box-title" style="color:white">Tambah Warna
                </h3>
            </div>
            <form id="formmapel" class="form-horizontal" method="post" action="<?php echo site_url('superadmin/simpanwarnamapelsidebar'); ?>" style="padding: 1em;">
                <input type = "hidden" id="id_warna" name = "id" >
                <div class="bigbox-mapel"> 
                <div class="box-mapel">
                    <div class="form-group formgrup jarakform">
                    <label for="inputKurikulum" class="col-sm-2 control-label">Nama Warna
                    </label>
                    <div class="col-sm-4">
                        <input type="text" required class="form-control" id="nama_warna" name="nama" placeholder="Nama Mata Pelajaran" value="<?php echo @$edit_warna->warna; ?>">
                    </div>
                    </div>
                    <div class="form-group formgrup jarakform">
                    <label for="inputKurikulum" class="col-sm-2 control-label">Warna
                    </label>
                    <div class="col-sm-4">
                        <input type="color" required class="form-control" id="warna_warna" name="warna"  value="<?php echo @$edit_warna->warna; ?>">
                    </div>
                    </div>
                    <div class="form-group formgrup jarakform">
                    <label for="inputKurikulum" class="col-sm-2 control-label">Status
                    </label>
                    <div class="col-sm-4">
                        <input type="checkbox" id="aktif_warna" name="aktif" value="1"> Aktif
                    </div>
                    </div>
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Simpan
                    </button>
                </div>
                </div>
            </form>
        </div>
      </section>
                </div>