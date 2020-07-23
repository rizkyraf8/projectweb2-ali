<section class="content-header">
		<h1>
			View Presensi Online
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?= base_url("presensi")?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Report</a></li>
			<li class="active">View Presensi</li>
		</ol>
</section>

		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<div class="row" method="get">
								<div class="col-md-3 col-sm-6 col-xs-12">
									<label>Start Date</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right datepicker" name="start_date" id="start_date" size="25" placeholder="Select Date">
									</div><!-- /.input group -->
                                </div>
                                
								<div class="col-md-3 col-sm-6 col-xs-12">
									<label>End Date</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right datepicker" name="end_date" id="end_date" size="25" placeholder="Select Date">
									</div><!-- /.input group -->
								</div>
							</div><!--/.row-->

							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-18">
									<label></label>
									<div class="input-group">
										<a href="<?= base_url(getController() . "/xls") ?>" class="btn btn-success" target="_blank"><i class="fa fa-file-excel"></i> DOWNLOAD EXCEL</a>
										&nbsp;&nbsp;
										<a href="<?= base_url(getController() . "/pdf") ?>" class="btn btn-danger" target="_blank"><i class="fa fa-file-pdf"></i> DOWNLOAD PDF</a>
									</div>
								</div>
							</div>
                        </div>
                        
						<div class="overlay" id="overlay" style="display: none;">
								<i class="fa fa-refresh fa-spin"></i>
                        </div>
                        <div id="listpresensi_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="tableList" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="listpresensi_info">
								    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="listpresensi" rowspan="1" colspan="1" style="width: 49px;" aria-sort="ascending">Tanggal</th>
                                            <th class="sorting" tabindex="0" aria-controls="listpresensi" rowspan="1" colspan="1" style="width: 42px;" >NIK</th>
                                            <th class="sorting" tabindex="0" aria-controls="listpresensi" rowspan="1" colspan="1" style="width: 36px;" >Nama</th>
                                            <th class="sorting" tabindex="0" aria-controls="listpresensi" rowspan="1" colspan="1" style="width: 44px;" >Jam Masuk</th>
                                            <th class="sorting" tabindex="0" aria-controls="listpresensi" rowspan="1" colspan="1" style="width: 34px;" >Login</th>
                                            <th class="sorting" tabindex="0" aria-controls="listpresensi" rowspan="1" colspan="1" style="width: 48px;" >Jam Pulang</th>
                                            <th class="sorting" tabindex="0" aria-controls="listpresensi" rowspan="1" colspan="1" style="width: 43px;" >Logout</th>
                                        </tr>                            
                                    </thead>	
                                    <tbody>
                                    </tbody>
                                    </table>
                                </div>
                                <div id="listpresensi_processing" class="dataTables_processing" style="display: none;">Processing...</div>
                            </div>
                    </div>
                </div> <!--/.box-body-->
            </div><!-- /.form horizontal -->
        </div> <!--/.box-->
    </section>
	<script src="<?= base_url() ?>assets/app/js/presensi/presensi.js"></script>