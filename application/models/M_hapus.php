<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class M_hapus extends CI_Model
{
	public function Delete($table, $id)
	{
		$res = $this->db->query("DELETE FROM $table WHERE id = $id");
		return $res;
	}
}