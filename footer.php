	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>SIMPEL.COM</b>
		</div>
		<br>
		<!-- <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights -->
		<!-- reserved. -->
	</footer>
</div>
	<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script>
		$.widget.bridge('uibutton', $.ui.button);
	</script>
	<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/bower_components/raphael/raphael.min.js"></script>
	<script src="assets/bower_components/morris.js/morris.min.js"></script>
	<script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
	<script src="assets/bower_components/moment/min/moment.min.js"></script>
	<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
	<script src="assets/dist/js/adminlte.min.js"></script>
	<script src="assets/dist/js/pages/dashboard.js"></script>
	<script src="assets/dist/js/demo.js"></script>
	<script>
		$(function () {
			$('#example1').DataTable()
			$('#example2').DataTable({
				'paging'      : true,
				'lengthChange': false,
				'searching'   : false,
				'ordering'    : true,
				'info'        : true,
				'autoWidth'   : false
			})
		})
	</script>
	<script type="text/javascript">
		$('#datepicker1').datepicker({
			autoclose: true
		});
		$('#datepicker2').datepicker({
			autoclose: true
		});
	</script>
</body>
</html>