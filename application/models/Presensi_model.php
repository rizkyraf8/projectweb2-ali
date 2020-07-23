<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Presensi_model extends CI_Model {

    private $table_presensi = 'data_presensi';
    private $table_data_karyawan = 'data_karyawan';

    function get_list() {
        $this->db->order_by( 'tanggal', 'asc' );
        return $this->db->get( $this->table_presensi )->result_array();
    }

    function get_data( $nik = '', $get = '' ) {
        $this->db->where( 't1.nik', $nik );
        $this->db->join( $this->table_data_karyawan .' t2', 't1.nik=t2.nik' );

        if ( @$get['start_date'] ) {

            $this->db->where( 't1.tanggal >=', $get['start_date'] );
        }

        if ( @$get['end_date'] ) {
            $this->db->where( 't1.tanggal <=', $get['end_date'] );
        }

        return $this->db->get( $this->table_presensi. ' t1' )->result_array();
    }

    function insert_data( $data ) {
        return $this->db->insert( $this->table_presensi, $data );
    }

    function update_data( $data, $nik, $date ) {
        $this->db->where( 'nik', $nik );
        $this->db->where( 'tanggal', $date );
        return $this->db->update( $this->table_presensi, $data );
    }

    function delete_data( $id ) {
        $this->db->where( 'id_presensi', $id );
        return $this->db->delete( $this->table_presensi );
    }

    function cek_masuk($tanggal, $nik) {
        $this->db->where ('nik',$nik);
        $this->db->where ('tanggal', $tanggal);
        return $this->db->get($this->table_presensi)->row_array();
    }

}

/* End of file Presensi_model.php */
?>
