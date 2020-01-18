    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?=base_url()?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=".<?=base_url()?>assets/js/off-canvas.js"></script>
    <script src=".<?=base_url()?>assets/js/misc.js"></script>
    <!-- endinject -->

    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
		$(document).ready(function(){
			$('#tombol').click(function(){
				$('#modal-kotak , #bg').fadeIn("slow");
			});
			$('#tombol-tutup').click(function(){
				$('#modal-kotak , #bg').fadeOut("slow");
			});
		});
	</script>
  <script type="text/javascript">


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


    $(document).on("click", "#btnDetailArtikel", function() {
      $('input[name="kodepenyakit"]').val($(this).data('id'));
      $('input[name="id"]').val($(this).data('id'));
      $('input[name="judul"]').val($(this).data('judul'));
   
      $("#dataa").ckeditor();
      $("#dataa").val("gh");
    
    });
 </script>
</body>
</html>
