<section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Profile</a></li>
        <li class="active">User profile</li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-3">
      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <center>
            <img class="img-circle img-responsive" src="<?= base_url() ?>assets/dist/img/person-icon.png" alt="User profile picture" width="200px" height="300px">
          </center>
          <div class="profile-username text-center">
            <h2 class="font-24 text-white mb-0"><?= $dataKaryawan[0]->nama; ?></h2>
          </div>
  
          <p class="text-muted text-center"></p>
          <h4 class="text-muted text-center"><strong><?= $dataKaryawan[0]->nik; ?></strong></h4>
  
          <ul class="list-group list-group-unbordered"></ul>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
    <div class="col-md-9">
          <!-- About Me Box -->
      <div class="box box-primary col-md-9">
          <!-- /.box-header -->
        <div class="box-body">
				  <div class="col-md-6">
					<strong><i class="fa fa-user"></i> Nama </strong>
					  <p class="text-muted"><?= $dataKaryawan[0]->nama; ?></p>
					  
					  <strong><i class="fa fa-intersex"></i> Jenis Kelamin</strong>
					  <p class="text-muted"><?= $dataKaryawan[0]->gender; ?></p>
					
					  <strong><i class="fa fa-envelope-o margin-r-5"></i> Email</strong>
					  <p class="text-muted"><?= $dataKaryawan[0]->email; ?></p>

					  <strong><i class="fa fa-calendar margin-r-5"></i> Tempat &amp; Tanggal Lahir</strong>
					  <p class="text-muted"><?= $dataKaryawan[0]->tmpt_lahir; ?>&#44; <?= $dataKaryawan[0]->tgl_lahir; ?></p>

					  <strong><i class="fa fa-briefcase"></i> Jabatan </strong>
					  <p class="text-muted"><?= $dataKaryawan[0]->jabatan; ?></p>
				  </div>
				  <div class="col-md-6">
					  <strong><i class="fa fa-calendar-check-o"></i> Start Kontrak</strong>
					  <p class="text-muted"><?= $dataKaryawan[0]->start_kontrak; ?></p>

					  <strong><i class="fa fa-calendar-times-o"></i> End Kontrak </strong>
            <p class="text-muted"><?= $dataKaryawan[0]->end_kontrak; ?></p>
            
            <strong><i class="fa fa-calendar-times-o"></i> Level </strong>
					  <p class="text-muted"><?php echo $this->session->userdata( 'level' )?></p>
				  </div>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.tab-content -->
</section>