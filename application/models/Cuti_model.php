<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Cuti_model extends CI_Model {

    private $table_data_cuti = 'data_cuti';
    private $table_data_karyawan = 'data_karyawan';
    
    function get_list() {
        $this->db->order_by( 'start_date', 'desc' );
        return $this->db->get( $this->table_data_cuti )->result_array();
    }

    function get_data( $nik = '' ,$get = "") {
        $this->db->where( 't1.nik', $nik );
        $this->db->join($this->table_data_karyawan ." t2","t1.nik=t2.nik");

        if ( @$get['start_date']) {            
            $this->db->where( 't1.start_date >=', $get['start_date'] );
        }

        if(@$get['end_date']){
            $this->db->where( 't1.end_date <=', $get['end_date'] );
        }

        return $this->db->get( $this->table_data_cuti. " t1" )->result_array();
    }

    function insert_data( $data ) {
        return $this->db->insert( $this->table_data_cuti, $data );
    }

    function update_data( $data, $nik ) {
        $this->db->where( 'nik', $nik );
        return $this->db->update( $this->table_data_cuti, $data );
    }

    function delete_data( $nik ) {
        $this->db->where( 'nik', $nik );
        return $this->db->delete( $this->table_data_cuti );
    }
}

/* End of file Cuti_model.php */
?>