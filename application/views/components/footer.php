      <!-- footer content -->
        <footer>
          <div class="pull-left">
           <?php echo $res['footer']?>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/src/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
     <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- select 2 -->
    <script src="<?php echo base_url();?>assets/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="<?php echo base_url();?>assets/vendors/validator/validator.js"></script>
    
    <!-- Datatables -->
    <script src="<?php echo base_url();?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/build/js/custom.min.js"></script>
    <script src="<?php echo base_url();?>assets/sweetalert/sweetalert-mess.js"></script>
 
    <script>
    $('#txtdate').datepicker({ 
    minDate: 0 ,
    beforeShowDay: $.datepicker.noWeekends 
    });

    // SELECT 3
    $(document).ready(function() {
    $(".select3_single").select2({
      placeholder: "Select a request",
      allowClear: true
    });
    $(".select2_group").select2({});
  });
    $('#other').change(function(){
     selection = $(this).val();    
     switch(selection)
     { 
         case 'Other':
             $('#otherType').show();
             break;
         default:
             $('#otherType').hide(); 
             break;
     }
  });
     $('#completed').change(function(){
     selection = $(this).val();    
     switch(selection)
     { 
         case 'Completed':
             $('#status').show();
             break;
         default:
             $('#status').hide(); 
             break;
     }
  });
    $('#completed').change(function(){
     selection = $(this).val();    
     switch(selection)
     { 
         case 'Cancelled':
             $('#status1').show();
             break;
         default:
             $('#status1').hide(); 
             break;
     }
  });
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm btn btn-danger"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn btn-primary"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
       function show_confirm(act,gotoid)
      {
        
          if(act=="")
          swal({
            title: "Are you sure?",
            text: "You want to deactivate this accounts ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#336699",
            confirmButtonText: "Yes, deactivate it!",
          closeOnConfirm: false
            },
            function(){
              window.location="<?php echo base_url();?>Showadministrator/"+act+"/"+gotoid;
            });
          if(act=="DeleteService")
          swal({
            title: "Are you sure?",
            text: "You want to delete this serivce ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#336699",
            confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false
            },
            function(){
              window.location="<?php echo base_url();?>Service/"+act+"/"+gotoid;
            });
        if(act=="DeleteDivision")
          swal({
            title: "Are you sure?",
            text: "You want to delete this division ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#336699",
            confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false
            },
            function(){
              window.location="<?php echo base_url();?>Division/"+act+"/"+gotoid;
            });
        if(act=="DeleteRegion")
          swal({
            title: "Are you sure?",
            text: "You want to delete this region ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#336699",
            confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false
            },
            function(){
              window.location="<?php echo base_url();?>Region/"+act+"/"+gotoid;
            });
       }
    </script>
  </body>
</html>