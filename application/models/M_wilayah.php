<?php
defined('BASEPATH')	or exit('No direct script access allowed');
/**
 * 
 */
class M_wilayah extends CI_Model
{
	public function prov()
    {
        return $this->db->query("SELECT * FROM provinsi");
    }

    public function kab($kab)
    {
    	if ($kab = "null") {
    		return $this->db->query("SELECT * FROM kabupaten WHERE id_prov = 11 ORDER BY nama ASC");
    	} else {
    		return $this->db->query("SELECT * FROM kabupaten WHERE id_prov = $kab ORDER BY nama ASC");
    	}
     
    }
    // public function kec($id)
    // {
    //     return $this->db->query("SELECT * FROM kecamatan WHERE 	id_kec = $id");
    // }
}