<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Form Add User</h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="<?= base_url(getController() . "/create") ?>" method="POST">
				<div class="box-body">
					<div class="form-group">
						<label>NIK :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
							<input type="text" required="required" class="form-control pull-right" name="nik" id="nik">
						</div><!-- /.input group -->
					</div><!-- /.form group -->
					<div class="form-group">
						<label>Nama :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
							<input type="text" required="required" class="form-control pull-right" name="nama" id="nama">
						</div><!-- /.input group -->
					</div><!-- /.form group -->
					<div class="form-group">
						<label>Gender :</label>
							<select class="form-control" required="required" name="gender" id="gender">
							<option value="" selected="selected">--- Select ---</option>
                            <option value="Pria">PRIA</option>
							<option value="Wanita">WANITA</option>
							</select>
					</div>
					<div class="form-group">
						<label>Tempat Lahir :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
							<input type="text" required="required" class="form-control pull-right" name="tmpt_lahir" id="tmpt_lahir" value="">
						</div>
					</div>
					<div class="form-group">
						<label>Tanggal Lahir :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" required="required" class="form-control pull-right datepicker" name="tgl_lahir" id="tgl_lahir" value="">
						</div>
                    </div>
					<div class="form-group">
						<label>No. KTP :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
							<input type="text" required="required" class="form-control pull-right" name="no_ktp" id="no_ktp" value="">
						</div>
                    </div>
                    <div class="form-group">
						<label>Email :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
                            <input type="text" required="required" class="form-control pull-right" name="email" id="email" value="">
                            </div>
                    </div>
                    <div class="form-group">
						<label>Jabatan :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
                            <input type="text" required="required" class="form-control pull-right" name="jabatan" id="jabatan" value="">
                            </div>
					</div>
					<div class="form-group">
						<label>Password :</label>
						<div class="input-group">
							<div class="input-group-addon">
							</div>
                            <input type="text" required="required" class="form-control pull-right" name="password" id="password" value="">
                            </div>
                    </div>
                    <div class="form-group">
						<label>Start Date Kontrak :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
                            <input type="text" required="required" class="form-control pull-right datepicker" name="start_kontrak" id="start_kontrak" value="">
                            </div>
                    </div>
                    <div class="form-group">
						<label>End Date Kontrak :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" required="required" class="form-control pull-right datepicker" name="end_kontrak" id="end_kontrak" value="">
						</div><!-- /.input group -->
					</div><!-- /.form group -->
				</div><!-- /.box-body -->
				<div class="box-footer">
					<button type="submit" class="btn btn-success" id="btn_adduser">Create</button>
					<a href="<?= base_url(getController() . "/listuser") ?>" class="btn btn-primary">Back</a>
				</div>
				</form>
			</div><!-- /.box -->
		</div><!-- /.box -->
	</div><!-- /.box -->
</section>