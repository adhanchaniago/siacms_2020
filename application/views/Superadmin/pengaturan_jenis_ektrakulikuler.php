<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <center style="color:navy;">Pengaturan Jenis Ektrakulikuler <br></center>
          <br>
          </h1>
      </section>

      <section class="content">
      <div class="box-body">
  <div class="box-add-eskul">
    <button class="btn btn-success" id="tambah_eskul_trigger">Tambah Ekstrakurikuler
    </button>
  </div>
  <div class="formmapel">
    <div class="box-header mg-bottom-15" style="background-color: #5c8a8a;">
      <h3 class="box-title" style="color:white">Daftar Ekstrakurikuler 
      </h3>
    </div>
    <div style="padding: 1em">
      <table id="example2" class="table table-bordered table-striped tabel-eskul">
        <thead>
          <tr>
            <th class="fit">No.
            </th>
            <th class="text-center">Nama
            </th>
            <th style="width: 25%" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
$i=0;
foreach ($tabel_jenisklstambahan as $row_jenisklstambahan) {
$i++;
?>
          <tr>
            <td class="fit">
              <?php echo $i; ?>
            </td>
            <td class="text-center">
              <?php echo $row_jenisklstambahan->jenis_kls_tambahan; ?>
            </td>
            <td> 
              <button class="btn btn-block btn-primary button-action btnedit edit_eskul_trigger" 
                      id_eskul="<?php echo $row_jenisklstambahan->id_jenis_kls_tambahan; ?>" 
                      name_eskul="<?php echo $row_jenisklstambahan->jenis_kls_tambahan; ?>"> Edit 
              </button>
              &nbsp;
              <a onclick="return confirm('Apakah Anda yakin?')" class="btn btn-block btn-danger button-action btnedit btnedit-end" 
                 href="<?php echo site_url('superadmin/hapus_jenis_kls_tambahan/'); ?><?php echo $row_jenisklstambahan->id_jenis_kls_tambahan; ?>"> Hapus 
              </a>
            </td>         
          </tr>
          <?php
}
?>
        </tbody>
      </table>
    </div>
  </div>
</div>

      </section>
                </div>

                <div id="modal_tambah_eskul" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?php echo site_url('superadmin/tambah_jenis_kls_tambahan'); ?>">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Ekstrakulikuler</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" name="jenis_kls_tambahan" class="form-control" placeholder="Nama ekstrakulikuler">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="modal_edit_eskul" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?php echo site_url('superadmin/edit_jenis_kls_tambahan'); ?>">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Ekstrakulikuler</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" name="id_kls_tambahan" id="id_kls_tambahan" class="form-control">
            <input type="text" name="jenis_kls_tambahan" id="jenis_kls_tambahan" class="form-control" placeholder="Nama ekstrakulikuler">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

                <script>
  $(document).ready(function() {
    $("#tambah_eskul_trigger").click(function() {
      $("#modal_tambah_eskul").modal('show')
    })

    $(".edit_eskul_trigger").click(function() {
      var id = $(this).attr('id_eskul')
      var name = $(this).attr('name_eskul')

      $("#id_kls_tambahan").val(id)
      $("#jenis_kls_tambahan").val(name)
      $("#modal_edit_eskul").modal('show')
    })
  })
</script>