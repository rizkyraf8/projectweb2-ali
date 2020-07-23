<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class TimeServer extends CI_Controller {

    public function index()
 {
    $this->load->view( 'timeserver.php', FALSE );
    }

}

/* End of file Controllername.php */

