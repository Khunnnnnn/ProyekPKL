  <!-- jQuery -->
  <script src="/admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="/admin/plugins/jszip/jszip.min.js"></script>
  <script src="/admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="/admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  
  <!-- AdminLTE App -->
  <script src="/admin/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/admin/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $('#datatables').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });

      $(document).ready(function() {
    $('#example').DataTable();
} );
    });
  </script>

<script>
    $(function(){
        $('.btn-ubah').on('click',function(){
            // $('.modal-footer button[type=submit]');
            const id = $(this).data('id');
            const nama = $(this).data('nama');
            const email = $(this).data('email');
            const ktp = $(this).data('ktp');
            const dokumen = $(this).data('dokumen');
            const act='/admin-quiz';
            $('#formEdit').attr('action',act+"/"+id);
            console.log($('#formEdit').attr('action'));
            
            $('#namaEdit').val(nama);
            $('#emailEdit').val(email);
            $('#ktpEdit').val(ktp);
            
        })
    });
</script>
