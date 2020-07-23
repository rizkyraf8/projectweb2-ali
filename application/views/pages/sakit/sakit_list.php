<section class="content-header">
		<h1>
			View Sakit Online
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?= base_url("presensi")?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Report</a></li>
			<li class="active">View Sakit</li>
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
									<input type="text" class="form-control pull-right datepicker" id="start_date" size="25" placeholder="Select Date" value="<?= @$get['start_date'] ?>">
								</div><!-- /.input group -->
                            </div>
                            
							<div class="col-md-3 col-sm-6 col-xs-12">
								<label>End Date</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right datepicker" id="end_date" size="25" placeholder="Select Date" value="<?= @$get['end_date'] ?>">
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
						<div id="listsakit_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="tableList" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="listsakit_info">
							<thead>
								<tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="tableList" rowspan="1" colspan="1" style="width: 88px;" aria-sort="ascending" >Tanggal</th>
                                    <th class="sorting" tabindex="0" aria-controls="tableList" rowspan="1" colspan="1" width="8%" >NIK</th>
                                    <th class="sorting" tabindex="0" aria-controls="tableList" rowspan="1" colspan="1" style="width: 80px;">Nama</th>
                                    <th class="sorting" tabindex="0" aria-controls="tableList" rowspan="1" colspan="1" style="width: 40px;" >Jumlah Sakit</th>
                                    <th class="sorting" tabindex="0" aria-controls="tableList" rowspan="1" colspan="1" style="width: 80px;" >Alasan</th>
                                    </tr>
							</thead>
							<tbody>
                            </tbody>
                                    </table>
                                    <div id="listsakit_processing" class="dataTables_processing" style="display: none;">Processing...</div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-sm-5">
                                    <div class="dataTables_info" id="listsakit_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                </div> -->
                                <!-- <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="listsakit_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button previous disabled" id="listsakit_previous">
                                                <a href="#" aria-controls="listsakit" data-dt-idx="0" tabindex="0">Previous</a>
                                            </li>
                                            <li class="paginate_button next disabled" id="listsakit_next">
                                                <a href="#" aria-controls="listsakit" data-dt-idx="1" tabindex="0">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>

						<!-- End Modal Image -->
					</div> <!--/.box-body-->
				</div> <!--/.box-->
			</div> <!--/.col-->
		</div> <!--/.row-->
    </section>
    <script src="<?= base_url() ?>assets/app/js/sakit/sakit.js"></script>