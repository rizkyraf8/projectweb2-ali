<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

    private $table_user = "user_login";

    public function auth($nik, $password) {
        $this->db->where(array(
            "nik" => $nik,
            "password" => $password,
        ));

        return $this->db->get($this->table_user)->row_array();
    }

    // public function auth($nik, $password) {
    //     return $this->db->where('nik', $nik)->where('password', $password)->get('user_login')->result();
    // }

    public function getDataKaryawanByNik($nik) {
        return $this->db->get_where('data_karyawan', array('nik' => $nik))->row_array();
    }

    function lastLogin( $date, $nik ) {
        $data = array(
            'last_login' => $date
        );
        $this->db->where( 'nik', $nik );
        $this->db->update( $this->table_user, $data );
    }
}

/* End of file Login_model.php */
?>