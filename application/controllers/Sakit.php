<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sakit extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model( 'Sakit_model' );
        $this->load->helper('url');
        $this->load->model('Login_m', 'login');
        if ($this->session->userdata('nik') == null) {
            redirect(base_url().'login/auth');
        }
    }

    // format (header, get u/ filter, arrdata)
    public function json(){
        header('Content-Type: application/json');
        $get = $this->input->get();

        $arrData = $this->Sakit_model->get_data($this->session->userdata('nik'),$get);
        
        echo json_encode(array("data" => $arrData));

    }

    public function form_sakit()
    {
        $data['content'] = 'pages/sakit/sakit_form';
        $this->load->view( '_template/wrapper', $data, FALSE );
    }

    public function view_sakit()
    {
        $data['content'] = 'pages/sakit/sakit_list';
        $this->load->view( '_template/wrapper', $data, FALSE );
    }

    public function submit()
    {
        $post= $this->input->post();
      
        // echo "<pre>";
        // print_r($_FILES);
        // die;
      
        $arrSave = array(
            "nik" => $this->session->userdata("nik")."",
            "start_date" => @$post['start_date'],
            "end_date" => @$post['end_date'],
            "jml_hari_sakit" => @$post['jml_hari_sakit'],
            "alasan" => @$post['alasan'],
            // "updatedAt" => date('Y-m-d H:i:s'),
        );

        $this->Sakit_model->insert_data( $arrSave );
        echo "<script>alert('Berhasil Input Data Sakit');window.location='".base_url( getController(). '/form_sakit' )."'</script>";
    }

    public function xls()
 {
        $get = $this->input->get();
        $query = $this->Sakit_model->get_data( $this->session->userdata( 'nik' ), $get );

        header( "Pragma: public" );
        header( "Expires: 0" );
        header( "Cache-Control: must-revalidate, post-check=0,pre-check=0" );
        header( "Content-Type: application/force-download" );
        header( "Content-Type: application/octet-stream" );
        header( "Content-Type: application/download" );
        header( "Content-type: application/vnd-ms-excel");
        header( "Content-Disposition: attachment;filename=\"Report View Sakit Online.xls\"" );
        header( "Content-Transfer-Encoding: binary " );

        $this->load->view( 'pages/sakit/sakit_xls', array( "data" => $query ), FALSE );
    }

    public function pdf()
 {
        $get = $this->input->get();
        $this->load->library( 'Pdf' );

        $data['data'] = $this->Sakit_model->get_data( $this->session->userdata( 'nik' ), $get );
        $this->load->view( 'pages/sakit/sakit_pdf', $data );
    }
}

/* End of file Controllername.php */
