<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Presensi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model( 'Presensi_model' );
        $this->load->helper('url');
        $this->load->model('Login_m', 'login');
        if ($this->session->userdata('nik') == null) {
            redirect(base_url().'login/auth');
        }
    }

    public function form_presensi()
 {
        $data['content'] = 'pages/presensi/presensi_form';
        $this->load->view( '_template/wrapper', $data, FALSE );
        $timezone = new DateTimeZone( 'Asia/Jakarta' );
        $date = new DateTime();
        $date->setTimeZone( $timezone );

    }

    public function view_presensi()
 {
        $data['content'] = 'pages/presensi/presensi_list';
        $this->load->view( '_template/wrapper', $data, FALSE );

    }

    public function json() {
        header( 'Content-Type: application/json' );
        $get = $this->input->get();

        $arrData = $this->Presensi_model->get_data( $this->session->userdata( 'nik' ), $get );

        echo json_encode( array( 'data' => $arrData ) );

    }

    public function getClientIp()
 {
        $ipaddress = $_SERVER['REMOTE_ADDR'];

    }

    public function Presensi()
 {
        $post = $this->input->post();

        if ( $post['action'] == 'in' ) {
            if ( !$this->Presensi_model->cek_masuk( date( 'Y-m-d' ), $this->session->userdata( 'nik' ) ) ) {
                $arrSave = array(
                    'nik' => $this->session->userdata( 'nik' ).'',
                    'tanggal' => date( 'Y-m-d' ),
                    'jam_login' => date( 'H:i:s' ),
                    'ip_addr' => @$post['ip_addr'],
                    'tipe_presensi' => @$post['tipe_presensi'],
                    'remark' => @$post['remark'],
                );
                $this->Presensi_model->insert_data( $arrSave );
            } else {
                echo "<script>alert('Anda Sudah Melakukan Presensi Masuk');window.location='".base_url( getController().'/form_presensi' )."'</script>";
                die;
            }
        } else {
            if ( $this->Presensi_model->cek_masuk( date( 'Y-m-d' ), $this->session->userdata( 'nik' ) )['jam_logout'] == '00:00:00' ) {

                $nik = $this->session->userdata( 'nik' );
                $arrSave = array(
                    'nik' => $this->session->userdata( 'nik' ).'',
                    'tanggal' => date( 'Y-m-d' ),
                    'jam_logout' => date( 'H:i:s' ),
                    'ip_addr' => @$post['ip_addr'],
                    'tipe_presensi' => @$post['tipe_presensi'],
                    'remark' => @$post['remark'],
                );
                $this->Presensi_model->update_data( $arrSave, $nik, date( 'Y-m-d' ) );
            } else if ( !$this->Presensi_model->cek_masuk( date( 'Y-m-d' ), $this->session->userdata( 'nik' ) ) ) {
                echo "<script>alert('Anda Belum Melakukan Presensi Masuk');window.location='".base_url( getController().'/form_presensi' )."'</script>";
                die;
            } else {
                echo "<script>alert('Anda Sudah Melakukan Presensi Pulang');window.location='".base_url( getController().'/form_presensi' )."'</script>";
                die;
            }
        }
        echo "<script>alert('Terima Kasih Sudah Melakukan Presensi');window.location='".base_url( getController().'/form_presensi' )."'</script>";
        // redirect( getController().'/form_presensi' );
    }

    public function xls()
 {
        $get = $this->input->get();
        $query = $this->Presensi_model->get_data( $this->session->userdata( 'nik' ), $get );

        header( "Pragma: public" );
        header( "Expires: 0" );
        header( "Cache-Control: must-revalidate, post-check=0,pre-check=0" );
        header( "Content-Type: application/force-download" );
        header( "Content-Type: application/octet-stream" );
        header( "Content-Type: application/download" );
        header( "Content-type: application/vnd-ms-excel");
        header( "Content-Disposition: attachment;filename=\"Report View Presensi Online.xls\"" );
        header( "Content-Transfer-Encoding: binary " );

        $this->load->view( 'pages/presensi/presensi_xls', array( "data" => $query ), FALSE );
    }

    public function pdf()
 {
        $get = $this->input->get();
        $this->load->library( 'Pdf' );

        $data['data'] = $this->Presensi_model->get_data( $this->session->userdata( 'nik' ), $get );
        $this->load->view( 'pages/presensi/presensi_pdf', $data );
    }

    /* End of file Controllername.php */
}