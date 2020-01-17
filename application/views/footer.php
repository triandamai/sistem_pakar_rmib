  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url()?>assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <!-- <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script> -->

  <!-- Template JS File -->
  <script src="<?= base_url()?>assets/js/scripts.js"></script>
  <script src="<?= base_url()?>assets/js/custom.js"></script>

  <!-- Page Specific JS File
  <script src="<?= base_url() ?>/assets/js/page/index.js"></script> -->
  <script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
  <script src="<?= base_url()?>assets/ckeditor/adapters/jquery.js"></script>
  <script>
    CKEDITOR.config.filebrowserBrowseUrl = '<?= base_url()?>assets/ckfinder/ckfinder.html';
    CKEDITOR.config.filebrowserImageBrowseUrl = '<?= base_url()?>assets/ckfinder/ckfinder.html?type=Images';
    CKEDITOR.config.filebrowserFlashBrowseUrl = '<?= base_url()?>assets/ckfinder/ckfinder.html?type=Flash';
    CKEDITOR.config.filebrowserUploadUrl = '<?= base_url()?>index.php/Admin_event/admin_tambah_artikel';
    CKEDITOR.config.filebrowserImageUploadUrl = '<?= base_url()?>assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    CKEDITOR.config.filebrowserFlashUploadUrl = '<?= base_url()?>assets/ckfinder/core/connector/php/connector.php?command=QuickUpl';
  
  </script>
  <script type="text/javascript">
 
    $(document).on("click", "#ubahGejala", function() {
      $('input[name="kodegejala"]').val($(this).data('id'));
      $('input[name="id"]').val($(this).data('id'));
      $('input[name="namagejala"]').val($(this).data('nama'));
      $('textarea[name="deskripsigejala"]').val($(this).data('deskripsi'));
     
    });

    $(document).on("click", "#ubahPenyakit", function() {
      $('input[name="kodepenyakit"]').val($(this).data('id'));
      $('input[name="id"]').val($(this).data('id'));
      $('input[name="namapenyakit"]').val($(this).data('nama'));
      $('textarea[name="deskripsipenyakit"]').val($(this).data('deskripsi'));
      $('textarea[name="solusipenyakit"]').val($(this).data('solusi'));
    });

    $(document).on("click", "#hapusGejala", function() {

      $('#modalTitle').text("Apakah kamu yakin menghapus Gejala "+$(this).data('nama')+" ?");
      $('input[name="kodegejala"]').val($(this).data('id'));
    });
    
    $(document).on("click", "#hapusPenyakit", function() {

      $('#modalTitle').text("Apakah kamu yakin menghapus penyakit "+$(this).data('nama')+" ?");
      $('input[name="kodepenyakit"]').val($(this).data('id'));
    });


    $(document).on("click", "#btnHapusArtikel", function() {

    $('#modalTitle').text("Apakah kamu yakin menghapus artikel "+$(this).data('judul')+" ?");
    $('input[name="kodeartikel"]').val($(this).data('id'));
    });

    $(document).on("click", "#btnDetailArtikel", function() {
      $('input[name="kodepenyakit"]').val($(this).data('id'));
      $('input[name="id"]').val($(this).data('id'));
      $('input[name="judul"]').val($(this).data('judul'));
   
      $("#dataa").ckeditor();
      $("#dataa").val("gh");
    
    });

    $(document).on("click", "#detailUser", function() {
          $('#username').text($(this).data('username'));
          $('#email').text($(this).data('email'));
          $('#created_at').text($(this).data('created'));
          $('#updated_at').text($(this).data('updated'));
    });




    $(document).ready(() => {
 
      // const custom = new CustomLogging;
      // custom.setBodyStyle({ color: 'red' });
      // custom.log('Warning !! Ini adalah mode developer bijaklah dalam menggunakan tool ini');
   
    });
 </script>
</body>
</html>
