<?php

defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class User_model extends CI_Model {

    private $table_data_karyawan = 'data_karyawan';
    private $table_user = 'user_login';
    
    public function getAllDataKaryawan() {
        return $this->db->get( 'data_karyawan' )->result();
    }

    public function getDataKaryawanByNik( $nik ) {
        return $this->db->get_where( 'data_karyawan', array( 'nik' => $nik ) )->result();
    }

    function insert_data( $data ) {
        return $this->db->insert( $this->table_data_karyawan, $data );
    }

    function update_data( $data, $nik ) {
        $this->db->where( 'nik', $nik );
        return $this->db->update( $this->table_data_karyawan, $data );
    }

    function delete_data( $nik ) {
        $this->db->where( 'nik', $nik );
        return $this->db->delete( $this->table_data_karyawan );
    }

    function delete_user( $nik ) {
        $this->db->where( 'nik', $nik );
        return $this->db->delete( $this->table_user );
    }

    public function addUser( $nik, $password ) {
        return $this->db->insert( 'user_login', array( 'nik' => $nik, 'password' => $password, 'level' => 'Karyawan' ) );
    }
}

/* End of file ModelName.php */
