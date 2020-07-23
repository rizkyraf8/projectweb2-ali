<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Form Sakit</h3>
				</div><!-- /.box-header -->
				<!-- form start -->
			<form action="<?= base_url(getController() . "/submit") ?>" id="form_sakit" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				<div class="box-body">
					<div class="form-group">
						<label>Start Date :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" class="form-control pull-right datepicker" name="start_date" id="start_date">
						</div><!-- /.input group -->
					</div><!-- /.form group -->
					<div class="form-group">
						<label>End Date :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" class="form-control pull-right datepicker" name="end_date" id="end_date">
						</div><!-- /.input group -->
					</div><!-- /.form group -->
					<div class="form-group">
						<label>Jumlah Hari Sakit :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" class="form-control pull-right" id="jml_hari_sakit" name="jml_hari_sakit" readonly="">
						</div>
					</div>
					<div class="form-group">
						<label>Alasan :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<textarea class="form-control" rows="2" id="alasan" name="alasan" placeholder="Alasan ..."></textarea>
						</div><!-- /.input group -->
					</div><!-- /.form group -->
				    <!-- <div class="form-group">
						<label>Attachment :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="file" class="form-control" id="nama_file" name="nama_file">
						</div>
					</div> -->
				</div><!-- /.box-body -->
				<div class="box-footer">
				<input type="submit" value="Submit" id="btn_sakit" class="btn btn-primary">
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
		
		$("#jml_hari_sakit").val(diffDays);
		// alert(diffDays);
	}
</script>