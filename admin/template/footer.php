    </div>
    <!-- /.container-fluid -->

    </div>
   
    <footer class="sticky-footer" style="background: linear-gradient(to right, #881337, #fda4af); color: white; padding: 20px 0;">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span style="font-weight: bold;">
                    <?php echo date('Y');?> - Copyright Kelompok 3 PBW
                </span>
            </div>
            <div class="text-center mt-2">
                <a href="https://facebook.com" target="_blank" style="color: white; margin: 0 10px;">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com" target="_blank" style="color: white; margin: 0 10px;">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://instagram.com" target="_blank" style="color: white; margin: 0 10px;">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://linkedin.com" target="_blank" style="color: white; margin: 0 10px;">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </footer>
    

    </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="sb-admin/js/sb-admin-2.min.js"></script>
    <script src="sb-admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="sb-admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable();
    });
   </script>
   <?php
        $sql=" select * from barang where stok <=3";
        $row = $config -> prepare($sql);
        $row -> execute();
        $q = $row -> fetch();
            if($q['stok'] == 3){	
            if($q['stok'] == 2){	
            if($q['stok'] == 1){	
    ?>
   <script type="text/javascript">
    
    $(document).ready(function() {
        var unique_id = $.gritter.add({
            
            title: 'Peringatan !',
            
            text: 'stok barang ada yang tersisa kurang dari 3 silahkan pesan lagi !',
            
            image: 'assets/img/seru.png',
           
            sticky: true,
          
            time: '',
         
            class_name: 'my-sticky-class'

        });

        return false;
    });
   </script>
   <?php }}}?>
   <script type="application/javascript">
    
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-danger").fadeIn('slow');
        }, 500);
    });
   
    setTimeout(function() {
        $(".alert-danger").fadeOut('slow');
    }, 5000);

    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-success").fadeIn('slow');
        }, 500);
    });
    setTimeout(function() {
        $(".alert-success").fadeOut('slow');
    }, 5000);

    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-warning").fadeIn('slow');
        }, 500);
    });
    setTimeout(function() {
        $(".alert-success").fadeOut('slow');
    }, 5000);
   </script>
   <script>
    $(".modal-create").hide();
    $(".bg-shadow").hide();
    $(".bg-shadow").hide();

    function clickModals() {
        $(".bg-shadow").fadeIn();
        $(".modal-create").fadeIn();
    }

    function cancelModals() {
        $('.modal-view').fadeIn();
        $(".modal-create").hide();
        $(".bg-shadow").hide();
    }
   </script>

   </body>

   </html>