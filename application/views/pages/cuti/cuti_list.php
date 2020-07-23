<section class="content-header">
		<h1>
			View Cuti Online
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?= base_url("presensi")?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Report</a></li>
			<li class="active">View Cuti</li>
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
									<input type="text" class="form-control pull-right datepicker" name="start_date" id="start_date" size="25" placeholder="Select Date" value="<?= @$get['start_date'] ?>">
								</div><!-- /.input group -->
                            </div>
                            
							<div class="col-md-3 col-sm-6 col-xs-12">
								<label>End Date</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right datepicker" name="end_date" id="end_date" size="25" placeholder="Select Date" value="<?= @$get['end_date'] ?>">
								</div><!-- /.input group -->
							</div>
						</div>

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
						<div id="listcuti_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="tableList" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="listcuti_info">
								<thead>
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="tableList" rowspan="1" colspan="1" aria-sort="ascending">Tanggal Cuti</th>
									<th class="sorting" tabindex="0" aria-controls="tableList" rowspan="1" colspan="1" width="8%" >NIK</th>
									<th class="sorting" tabindex="0" aria-controls="tableList" rowspan="1" colspan="1" >Nama</th>
									<th class="sorting" tabindex="0" aria-controls="tableList" rowspan="1" colspan="1" width="13%">Jumlah Cuti</th>
									<th class="sorting" tabindex="0" aria-controls="tableList" rowspan="1" colspan="1" >Alasan</th>
								</tr>
							</thead>
							<tbody>							
                            </tbody>
                                    </table>
                                    <div id="tableList_processing" class="dataTables_processing" style="display: none;">Processing...
                                </div>
                                </div>
                        </div>
					</div> <!--/.box-body-->
				</div> <!--/.box-->
			</div> <!--/.col-->
		</div> <!--/.row-->
	</section>
	<script src="<?= base_url() ?>assets/app/js/cuti/cuti.js"></script>