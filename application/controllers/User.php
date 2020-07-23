<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model( 'User_model' );
        $this->load->helper('url');
        $this->load->model('Login_m', 'login');
        if ($this->session->userdata('nik') == null) {
            redirect(base_url().'login/auth');
        }
    }

    public function listUser() {
        $data['getAllDataKaryawan'] = $this->User_model->getAllDataKaryawan();
        $data['content'] = 'pages/listUser';
        $this->load->view( '_template/wrapper', $data, FALSE );
    }

    public function form()
 {
        $data['content'] = 'pages/addUser';
        $this->load->view( '_template/wrapper', $data, FALSE );
    }

    public function edit()
 {      
        $nik = $this->uri->segment( 3 );
        $cekNik = $this->User_model->getDataKaryawanByNik( $nik );
        if ( $cekNik[0]->nik ) {
            $dataKaryawan = $this->User_model->getDataKaryawanByNik( $nik );
            $data['dataKaryawan'] = $dataKaryawan;
            $data['content'] = 'pages/edituser';
            $this->load->view( '_template/wrapper', $data, FALSE );
        } else {
            redirect();
        }
    }

    public function profile() {
        $nik = $this->session->userdata( 'nik' );
        $cekNik = $this->User_model->getDataKaryawanByNik( $nik );
        if ( $cekNik[0]->nik ) {
            $dataKaryawan = $this->User_model->getDataKaryawanByNik( $nik );
            $data['dataKaryawan'] = $dataKaryawan;
            $data['content'] = 'pages/userProfiles';
            $this->load->view( '_template/wrapper', $data, FALSE );
        } else {
            redirect();
        }
    }

    public function create()
 {
        $post = $this->input->post();
        $nik = $post['nik'];
        $password = hash_password( $this->input->post( 'password' ) );

        $arrSave = array(
            'nik' => @$post['nik'],
            'nama' => @$post['nama'],
            'gender' => @$post['gender'],
            'tmpt_lahir' => @$post['tmpt_lahir'],
            'tgl_lahir' => @$post['tgl_lahir'],
            'no_ktp' => @$post['no_ktp'],
            'email' => @$post['email'],
            'jabatan' => @$post['jabatan'],
            'start_kontrak' => @$post['start_kontrak'],
            'end_kontrak' => @$post['end_kontrak'],
        );

        $this->User_model->insert_data( $arrSave );
        $this->User_model->addUser( $nik, $password );
        echo "<script>alert('Berhasil Membuat User');window.location='".base_url( getController(). '/listuser' )."'</script>";
    }

    public function update()
 {
        $post = $this->input->post();

        $arrSave = array(
            'nama' => @$post['nama'],
            'gender' => @$post['gender'],
            'tmpt_lahir' => @$post['tmpt_lahir'],
            'tgl_lahir' => @$post['tgl_lahir'],
            'no_ktp' => @$post['no_ktp'],
            'email' => @$post['email'],
            'jabatan' => @$post['jabatan'],
            'start_kontrak' => @$post['start_kontrak'],
            'end_kontrak' => @$post['end_kontrak'],
        );

        $this->User_model->update_data( $arrSave, @$post['nik'] );
        echo "<script>alert('Berhasil Merubah Profile User');window.location='".base_url( getController(). '/listuser' )."'</script>";
    }

    public function delete() {
        $nik = $this->uri->segment( 3 );
        $cekNik = $this->User_model->getDataKaryawanByNik( $nik );
        if ( $cekNik[0]->nik ) {
            $deleteUser = $this->User_model->delete_user( $nik );
            $deleteKaryawan = $this->User_model->delete_data( $nik );
            if ( $deleteUser == 1 && $deleteKaryawan == 1 ) {
                echo "<script>alert('Berhasil Menghapus User Karyawan');window.location='".redirect( base_url().'user/listuser' );
            } else {
                echo "<script>alert('Gagal Menghapus User Karyawan');window.location='".redirect( base_url().'user/listuser' );
            }
        } else {
            echo "<script>alert('Gagal Menghapus User Karyawan');window.location='".redirect( base_url().'user/listuser' );
        }
    }

    //     public function save()
    // {
    //         $post = $this->input->post();
    //         $nik = $post['nik'];
    //         $password = hash_password( $post['password'] );

    //         if ( @$post['nik'] ) {

    //             $arrSave = array(
    //                 'nama' => @$post['nama'],
    //                 'gender' => @$post['gender'],
    //                 'tmpt_lahir' => @$post['tmpt_lahir'],
    //                 'tgl_lahir' => @$post['tgl_lahir'],
    //                 'no_ktp' => @$post['no_ktp'],
    //                 'email' => @$post['email'],
    //                 'jabatan' => @$post['jabatan'],
    //                 'start_kontrak' => @$post['start_kontrak'],
    //                 'end_kontrak' => @$post['end_kontrak'],
    // );

    //             $this->User_model->update_data( $arrSave, @$post['nik'] );
    //             echo "<script>alert('Berhasil Merubah User Profile');window.location='".base_url( getController(). '/edit' )."'</script>";
    //         } else {
    //             $arrSave = array(
    //                 'nik' => @$post['nik'],
    //                 'nama' => @$post['nama'],
    //                 'gender' => @$post['gender'],
    //                 'tmpt_lahir' => @$post['tmpt_lahir'],
    //                 'tgl_lahir' => @$post['tgl_lahir'],
    //                 'no_ktp' => @$post['no_ktp'],
    //                 'email' => @$post['email'],
    //                 'jabatan' => @$post['jabatan'],
    //                 'start_kontrak' => @$post['start_kontrak'],
    //                 'end_kontrak' => @$post['end_kontrak'],
    // );
    //             $this->User_model->insert_data( $arrSave );
    //             $this->User_model->addUser( $nik, $password );
    //             echo "<script>alert('Berhasil Create User');window.location='".base_url( getController(). '/form' )."'</script>";
    //         }
    //     }
}