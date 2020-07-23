<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Form Edit User</h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="<?= base_url(getController() . "/update") ?>" method="POST">
				<div class="box-body">
					<div class="form-group">
						<label>NIK :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
							<input type="text" class="form-control pull-right" name="nik" id="nik" value="<?= $dataKaryawan[0]->nik; ?>" readonly>
						</div><!-- /.input group -->
					</div><!-- /.form group -->
					<div class="form-group">
						<label>Nama :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
							<input type="text" class="form-control pull-right" name="nama" id="nama" value="<?= $dataKaryawan[0]->nama; ?>">
						</div><!-- /.input group -->
					</div><!-- /.form group -->
					<div class="form-group">
						<label>Gender :</label>
							<input class="form-control" name="gender" id="gender" readonly value="<?= $dataKaryawan[0]->gender; ?>">
					</div>
					<div class="form-group">
						<label>Tempat Lahir :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
							<input type="text" class="form-control pull-right" name="tmpt_lahir" id="tmpt_lahir" value="<?= $dataKaryawan[0]->tmpt_lahir; ?>">
						</div>
					</div>
					<div class="form-group">
						<label>Tanggal Lahir :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" class="form-control pull-right datepicker" name="tgl_lahir" id="tgl_lahir" value="<?= $dataKaryawan[0]->tgl_lahir; ?>">
						</div>
                    </div>
					<div class="form-group">
						<label>No. KTP :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
							<input type="text" class="form-control pull-right" name="no_ktp" id="no_ktp" value="<?= $dataKaryawan[0]->no_ktp; ?>">
						</div>
                    </div>
                    <div class="form-group">
						<label>Email :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
                            <input type="text" class="form-control pull-right" name="email" id="email" value="<?= $dataKaryawan[0]->email; ?>">
                            </div>
                    </div>
                    <div class="form-group">
						<label>Jabatan :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
                            <input type="text" class="form-control pull-right" name="jabatan" id="jabatan" value="<?= $dataKaryawan[0]->jabatan; ?>">
                            </div>
					</div>
                    <div class="form-group">
						<label>Start Date Kontrak :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
                            <input type="text" class="form-control pull-right datepicker" name="start_kontrak" id="start_kontrak" value="<?= $dataKaryawan[0]->start_kontrak; ?>">
                            </div>
                    </div>
                    <div class="form-group">
						<label>End Date Kontrak :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" class="form-control pull-right datepicker" name="end_kontrak" id="end_kontrak" value="<?= $dataKaryawan[0]->end_kontrak; ?>">
						</div><!-- /.input group -->
					</div><!-- /.form group -->
				</div><!-- /.box-body -->
				<div class="box-footer">
					<button type="submit" class="btn btn-success" id="btn_adduser">Save</button>
					<a href="<?= base_url(getController() . "/listuser") ?>" class="btn btn-primary">Back</a>
				</div>
				</form>
			</div><!-- /.box -->
		</div><!-- /.box -->
	</div><!-- /.box -->
</section>