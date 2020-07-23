<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Cuti extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model( 'Cuti_model' );
        $this->load->helper('url');
        $this->load->model('Login_m', 'login');
        if ($this->session->userdata('nik') == null) {
            redirect(base_url().'login/auth');
        }
    }
    // format ( header, get u/ filter, arrdata )

    public function json() {
        header( 'Content-Type: application/json' );
        $get = $this->input->get();

        $arrData = $this->Cuti_model->get_data( $this->session->userdata( 'nik' ), $get );

        echo json_encode( array( 'data' => $arrData ) );

    }

    public function form_cuti()
 {
        $data['content'] = 'pages/cuti/cuti_form';
        $this->load->view( '_template/wrapper', $data, FALSE );
    }

    public function view_cuti()
 {

        $get = $this->input->get();
        $data['content'] = 'pages/cuti/cuti_list';
        $this->load->view( '_template/wrapper', $data, FALSE );
    }

    public function submit()
 {
        $post = $this->input->post();

        $arrSave = array(
            'nik' => $this->session->userdata( 'nik' ).'',
            'start_date' => @$post['start_date'],
            'end_date' => @$post['end_date'],
            'jenis_cuti' => @$post['jenis_cuti'],
            'jml_cuti' => @$post['jml_cuti'],
            'alasan' => @$post['alasan'],
        );

        $this->Cuti_model->insert_data( $arrSave );
        echo "<script>alert('Berhasil Input Data Cuti');window.location='".base_url( getController(). '/form_cuti' )."'</script>";
    }

    public function xls()
 {
        $get = $this->input->get();
        $query = $this->Cuti_model->get_data( $this->session->userdata( 'nik' ), $get );

        header( "Pragma: public" );
        header( "Expires: 0" );
        header( "Cache-Control: must-revalidate, post-check=0,pre-check=0" );
        header( "Content-Type: application/force-download" );
        header( "Content-Type: application/octet-stream" );
        header( "Content-Type: application/download" );
        header( "Content-type: application/vnd-ms-excel");
        header( "Content-Disposition: attachment;filename=\"Report View Cuti Online.xls\"" );
        header( "Content-Transfer-Encoding: binary " );

        $this->load->view( 'pages/cuti/cuti_xls', array( "data" => $query ), FALSE );
    }

    public function pdf()
 {
        $get = $this->input->get();
        $this->load->library( 'Pdf' );

        $data['data'] = $this->Cuti_model->get_data( $this->session->userdata( 'nik' ), $get );
        $this->load->view( 'pages/cuti/cuti_pdf', $data );
    }
}

/* End of file Controllername.php */
