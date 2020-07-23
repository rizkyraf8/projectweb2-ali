<script>
    function getRemarks()
	{

		tipe_presensi = document.getElementById("tipe_presensi").value;
		var x = document.getElementById("remarksform");
		var y = document.getElementById("selectofficeform");

		switch (tipe_presensi) {
			case "WFH":
			x.style.display = "block";
			y.style.display = "none";
				break;
			case "WFO":
			x.style.display = "block";
			y.style.display = "none";

				break;
			case "WFSO":
			x.style.display = "none";
			y.style.display = "block";

				break;

			default:
			x.style.display = "none";
			y.style.display = "none";

		}
    }
    
    var d = new Date();
    d.setFullYear(2020);
    document.getElementById("demo").innerHTML = d;

    <?php
      $ip = file_get_contents('https://api.ipify.org');      
    //   function getUserIpAddr(){
    //       if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    //           //ip from share internet
    //           $ip = $_SERVER['HTTP_CLIENT_IP'];
    //       }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    //           //ip pass from proxy
    //           $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    //       }else{
    //           $ip = $_SERVER['REMOTE_ADDR'];
    //       }
    //       return $ip;
    //   }

    //   echo 'User Real IP local - '.getUserIpAddr().'</br></br></br>';
    ?>

</script>

<section class="content">
    <div class="row">
        <div class="card">
            <div class="login-box">
                <div class="login-logo">
                    <b>Presensi</b>
                    Online
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Attendance</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="showtime" name="showtime" readonly>
                        </div>
                        <!-- <div class="form-group" align="center">
						    <div id="my_camera" style="width: 240px; height: 240px; overflow: hidden;"><div></div><video autoplay="autoplay" style="width: 320px; height: 240px;"></video></div>
                            <div></div>
                            <video autoplay="autoplay" style="width: 320px; height: 240px;"></video>
                        </div> -->
                            <form method="POST" action="<?= base_url(getController()."/presensi") ?>" id="form_submit" onsubmit="submitForm(this.submited); return false;">
                                <div class="card-body">
                                    <div class="form-group">                                    
                                        <label for="ip_addr">IP</label>
                                        <input type="text" class="form-control" data-validation="required" required="required" name="ip_addr" id="ip_addr" value="<?php echo $ip ?>" readonly>
                                        <input type="hidden" name="action" id="action">
                                    </div><!-- /.form group -->
                                    <!-- <div class="form-group">
                                        <label for="lokasi">Posisi</label>
                                        <input type="text" class="form-control" data-validation="required" required="required" name="lokasi" id="lokasi" placeholder="Kantor Cabang" value="Kantor" disabled>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="tipePresensi">Tipe Presensi</label>
                                        <select class="form-control" name="tipe_presensi" id="tipe_presensi" onchange="getRemarks(this)" data-validation-error-msg="" required="required">
                                            <option value="" selected="selected">--- Select ---</option>
                                            <option value="WFH">WFH</option>
                                            <option value="WFO">WFO</option>
                                            <option value="WFSO">WFSO</option>
                                        </select>
                                    </div><!-- /.form group -->
                                    <div class="form-group">
                                        <div id="remarksform" style="display: none;">
                                        <label for="remarks">Remarks</label>
                                        <input type="input" class="form-control" id="remark" name="remark">
                                        </div>
                                    </div><!-- /.form group -->
                                </div><!--/.card body-->
                                <div class="row">
                                     <div class="col-xs-6">
						                <button type="submit" class="btn btn-primary btn-block btn-flat" value="in" onclick="this.form.submited=this.value;"> In </button>
                                    </div>
                                    <div class="col-xs-6">
						                <button type="submit" class="btn btn-danger btn-block btn-flat" value="out" onclick="this.form.submited=this.value;"> Out </button>
					                </div>
                                </div>
                            </form>
                    </div><!--/.box body-->
                </div><!--/.box box-primary-->
            </div><!--/.login box-->
        </div><!--/.card-->
    </div><!--/.row-->
</section>
<script src="<?= base_url() ?>assets/app/js/timeserver.js"></script>
<script language="javascript" type="text/javascript">
    function submitForm(type){
        $("#action").val(type); 
        $("#form_submit").submit();
        return false;
    }
</script>