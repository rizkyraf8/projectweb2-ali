<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Form Cuti</h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="<?= base_url(getController() . "/submit") ?>" method="POST">
				<div class="box-body">
					<div class="form-group">
						<label>Start Date :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" required="required" class="form-control pull-right datepicker" name="start_date" id="start_date">
						</div><!-- /.input group -->
					</div><!-- /.form group -->
					<div class="form-group">
						<label>End Date :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" required="required" class="form-control pull-right datepicker" name="end_date" id="end_date">
						</div><!-- /.input group -->
					</div><!-- /.form group -->
					<div class="form-group">
						<label>Jenis Cuti :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<select class="form-control" required="required" name="jenis_cuti" id="jenis_cuti">
								<option value="Cuti Tahunan"> Cuti Tahunan</option>
								<option value="Cuti Dadakan"> Cuti Mendadak</option>
								<option value="Cuti Hamil"> Cuti Hamil</option>
							</select>
						</div>
					</div><!-- /.form group -->
					<div class="form-group">
						<label>Jumlah Hari Cuti :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
							<input type="text" required="required" class="form-control pull-right" name="jml_cuti" id="jml_cuti" readonly="">
						</div>
					</div><!-- /.form group -->
					<div class="form-group">
						<label>Alasan :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
							<textarea class="form-control" required="required" rows="2" name="alasan" id="alasan" placeholder="Alasan ..."></textarea>
						</div><!-- /.input group -->
					</div><!-- /.form group -->
				</div><!-- /.box-body -->
				<div class="box-footer">
					<button type="submit" class="btn btn-primary" id="btn_cuti">Submit</button>
				</div>
				</form>
			</div><!-- /.box -->
		</div><!-- /.box -->
	</div><!-- /.box -->
</section>

<script>
	$( "#start_date" ).change(function() {
		if($("#start_date").val() != "" && $("#end_date").val() != ""){
			setRangeDate();
		}
	});

	$( "#end_date" ).change(function() {
		if($("#start_date").val() != "" && $("#end_date").val() != ""){
			setRangeDate();
		}
	});


	function setRangeDate(){
		var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
		var splitStart = $("#start_date").val().split("-");
		var splitEnd = $("#end_date").val().split("-");
		
		var start_date = new Date(splitStart[0], splitStart[1], splitStart[2]);
		var end_date = new Date(splitEnd[0], splitEnd[1], splitEnd[2]);

		var diffDays = Math.round(Math.abs((start_date - end_date) / oneDay)) + 1;
		
		$("#jml_cuti").val(diffDays);
		// alert(diffDays);
	}
</script>
