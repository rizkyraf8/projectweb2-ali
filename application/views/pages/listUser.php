<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Profile Karyawan</h3>
				</div><!-- /.box-header -->

				<!-- form start -->
				<form role="form" id="formid">
				<div class="box-body">
                <div class="card-header">
                <a href="<?= base_url(getController() . "/form") ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Add Users</a>
                </div>
					<div id="tb_user_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="tb_user_length">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <table id="data_karyawan" class="table table-bordered table-hover dataTable no-footer">
					<thead style="background-color: #000080;">
						<tr role="row">
                            <th class="text" ><font color="#ffffff">NIK</font></th>
                            <th class="text" ><font color="#ffffff">Nama</font></th>
                            <th class="text" ><font color="#ffffff">Gender</font></th>
                            <th class="text" ><font color="#ffffff">No. KTP</font></th>
                            <th class="text" ><font color="#ffffff">Email</font></th>
                            <th class="text" ><font color="#ffffff">Jabatan</font></th>
                            <th class="text" ><font color="#ffffff">Start Kontrak</font></th>
                            <th class="text" ><font color="#ffffff">End Kontrak</font></th>
                            <th class="text" ><font color="#ffffff">Opsi</font></th>
                        </tr>
                    </thead>
                    
					<tbody>
                        <?php foreach($getAllDataKaryawan as $rows) { ?>
					<tr role="row" class="odd">
                        <td><?= $rows->nik; ?></td>
                        <td><?= $rows->nama; ?></td>
                        <td><?= $rows->gender; ?></td>
                        <td><?= $rows->no_ktp; ?></td>
                        <td><?= $rows->email; ?></td>
                        <td><?= $rows->jabatan; ?></td>
                        <td><?= $rows->start_kontrak; ?></td>
                        <td><?= $rows->end_kontrak; ?></td>
                        <td><a href="<?php echo base_url("user/edit/"); ?><?= $rows->nik; ?>" class="btn btn-info btn-space"><i class="icon s7-mail"></i><font color="WHITE"> Edit</font></a><a href="<?php echo base_url(); ?>user/delete/<?= $rows->nik; ?>" class="btn btn-danger btn-space"><i class="icon s7-close"></i><font color="WHITE"> Hapus</font></a></td>
                    </tr>
                        <?php } ?>
                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
				</div><!-- /.box-body -->
				</form>
			</div><!-- /.box -->
		</div><!-- /.box -->
    </div><!-- /.box -->
</section>