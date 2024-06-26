    <!-- /#wrapper -->
    <!-- jQuery -->
	<?php if (($this->session->flashdata('flash_message')) != ""): ?>
	<script type="text/javascript">
    $(document).ready(function() {
        $.toast({
           
            text: '<?php echo $this->session->flashdata('flash_message'); ?>',
            position: 'top-right',
            loaderBg: '#5475ed',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
	<?php endif; ?>
	<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script> 
	 <!-- Magnific popup JavaScript -->
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
	<!--Wave Effects -->
    <script src="<?php echo base_url() ?>optimum/js/waves.js"></script> 

	<script src="<?php echo base_url() ?>optimum/bootstrap/dist/js/tether.min.js"></script> 
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>optimum/bootstrap/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url() ?>optimum/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url() ?>optimum/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>optimum/js/waves.js"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- jQuery peity -->
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/peity/jquery.peity.init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>optimum/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>optimum/js/dashboard1.js"></script>
 <!-- Calendar JavaScript -->
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/calendar/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/moment/moment.js"></script>
    <script src='<?php echo base_url() ?>optimum/plugins/bower_components/calendar/dist/fullcalendar.min.js'></script>
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/calendar/dist/cal-init.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
	 <script src="<?php echo base_url() ?>optimum/plugins/bower_components/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/html5-editor/bootstrap-wysihtml5.js"></script>
	 <script src="<?php echo base_url() ?>optimum/js/validator.js"></script>
	 
	<script src="<?php echo base_url() ?>optimum/plugins/bower_components/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>optimum/plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>
	
	 <script src="<?php echo base_url() ?>optimum/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
	<!-- icheck -->
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url() ?>optimum/plugins/bower_components/icheck/icheck.init.js"></script>
	 <script src="<?php echo base_url() ?>optimum/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>
	 
	 
	 <!-- Chart Files -->
		<script src="<?php echo base_url() ?>optimum/flot/jquery.flot.js"></script>
		<script src="<?php echo base_url() ?>optimum/flot.tooltip/flot.tooltip.js"></script>
		<script src="<?php echo base_url() ?>optimum/flot/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url() ?>optimum/flot/jquery.flot.categories.js"></script>
		<script src="<?php echo base_url() ?>optimum/flot/jquery.flot.resize.js"></script>
		<script src="<?php echo base_url() ?>optimum/liquid-meter/liquid.meter.js"></script>
		<script src="<?php echo base_url() ?>optimum/snap.svg/snap.svg.js"></script>
		<script src="<?php echo base_url() ?>optimum/snap.svg/snap.svg.js"></script>
		<script src="<?php echo base_url() ?>optimum/liquid-meter/liquid.meter.js"></script>
	
		<!-- Examples -->
		<script src="<?php echo base_url() ?>assets/javascripts/dashboard/custom_dashboard.js"></script>
		<script src="<?php echo base_url() ?>assets/javascripts/forms/custom_validation.js"></script>
        <script src="<?php echo base_url() ?>assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?php echo base_url() ?>assets/javascripts/tables/examples.datatables.tabletools.js"></script>
	 
	 
	  <!-- Chart JS -->
	<!-- <script src="<?php echo base_url() ?>optimum/fullcalendar/js/index.js"></script>-->

   		<!--<script src="<?php echo base_url();?>assets/js/fullcalendar/fullcalendar.min.js"></script>-->
		<!--<script src="assets/js/neon-calendar.js"></script>-->

   <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
	
	
    <script>
    $(document).ready(function() {

        $('.textarea_editor').wysihtml5();


    });
    </script>
	
	
<script>
    function checkDelete()
    {
        var chk = confirm("Are You Sure To Delete This !");
        if (chk)
        {
            return true;
        } else {
            return false;
        }
    }
</script>
<script src="<?php echo base_url() ?>optimum/plugins/bower_components/tinymce/tinymce.min.js"></script>
    <script>
    $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
    });
    </script>
	
	<script type="text/javascript">
    //Alerts

    $(".myadmin-alert .closed").click(function(event) {
        $(this).parents(".myadmin-alert").fadeToggle(350);

        return false;
    });

    /* Click to close */

    $(".myadmin-alert-click").click(function(event) {
        $(this).fadeToggle(350);

        return false;
    });

    $(".showtop").click(function() {
        $(".alerttop").fadeToggle(350);
    });
    $(".showtop2").click(function() {
        $(".alerttop2").fadeToggle(350);
    });
	</script>
	 <script>
    // Clock pickers
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'

    });

    $('.clockpicker').clockpicker({
            donetext: 'Done',

        })
        .find('input').change(function() {
            console.log(this.value);
        });

    $('#check-minutes').click(function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
    // Colorpicker

    $(".colorpicker").asColorPicker();
    $(".complex-colorpicker").asColorPicker({
        mode: 'complex'
    });
    $(".gradient-colorpicker").asColorPicker({
        mode: 'gradient'
    });
    // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });

    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({

        todayHighlight: true
    });

    // Daterange picker

    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2015',
        maxDate: '06/30/2015',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse',
        dateLimit: {
            days: 6
        }
    });
    </script>
	
	<script src="<?php echo base_url() ?>optimum/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
	<?php if (($this->session->flashdata('flash_message')) != ""): ?>
	<script type="text/javascript">
    $(document).ready(function() {
        $.toast({
			heading: 'Congratulations!!!',
            text: '<?php echo $this->session->flashdata('flash_message'); ?>',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
	<?php endif; ?>
	
	
</body>

</html>