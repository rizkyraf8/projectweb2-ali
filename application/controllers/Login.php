<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Login extends CI_Controller {

    // public function __construct() {
    //     parent::__construct();
    //     $this->load->helper( 'url' );
    //     $this->load->model( 'Login_m', 'login' );
    //     if ( $this->session->userdata( 'nik' ) == null ) {
    //         redirect( base_url().'auth/userlogin' );
    //     } elseif ( $this->session->userdata( 'level' ) == 'Karyawan' ) {
    //         redirect( base_url().'user' );
    //     }
    // }

    public function __construct() {
        parent::__construct();
        $this->load->model( 'Login_m' );
    }

    public function index() {
        $this->load->view( 'login_v' );
    }

    public function auth() {
        $post = $this->input->post();
        $nik = @$post['nik'] ;
        $password = @$post['password'];

        $auth = $this->Login_m->auth( $nik, hash_password( $password ) );

        if ( $auth ) {
            $getDataKaryawan = $this->Login_m->getDataKaryawanByNik( $nik );
            $arrSession = array(
                'nik' => $auth['nik'],
                'password' => $auth['password'],
                'nama' => $getDataKaryawan['nama'],
                'level' => $auth['level'],
            );


            $date = date('Y-m-d H:i:s');
            $this->session->set_userdata( $arrSession );
            $lastLogin = $this->Login_m->lastLogin( $date , $nik );
            redirect( 'dashboard' );
        } else {
            echo "<script>alert('Username dan Password Anda Salah');window.location='".base_url( 'login' )."'</script>";
        }
    }
    // public function auth() {
    //     $post = $this->input->post();
    //     $nik = @$post['nik'] ;
    //     $password = @$post['password'];
    //     // $password = md5( $this->input->post( 'password' ) );

    //     if ( $nik && $password ) {
    //         $auth = $this->Login_m->auth( $nik, $password );
    //         if ( $auth[0]->nik !== null ) {
    //             $getDataKaryawan = $this->Login_m->getDataKaryawanByNik( $nik );
    //             $this->session->set_userdata( 'nik', $nik );
    //             $this->session->set_userdata( 'nama', $getDataKaryawan['nama'] );
    //             $this->session->set_userdata( 'level', $auth[0]->level );
    //             redirect( base_url().'dashboard' );
    //         } else {
    //             // $this->session->set_flashdata( 'messageAlert', $this->messageAlert( 'error', 'Login gagal' ) );
    //             echo "<script>alert('Gagal Login');window.location='".base_url( 'login' )."'</script>";
    //             // redirect( 'login' );
    //         }
    //     } else {
    //         // $this->session->set_flashdata( 'messageAlert', $this->messageAlert( 'error', 'Login gagal' ) );
    //         echo "<script>alert('Gagal Login');window.location='".base_url( 'login' )."'</script>";
    //         // redirect( 'login' );
    //     }
    // }

    public function logout() {
        $array_items = array( 'nik', 'nama', 'password', 'level' );
        $this->session->unset_userdata( $array_items );
        redirect( 'login' );
    }
}

/* End of file Login.php */

?>