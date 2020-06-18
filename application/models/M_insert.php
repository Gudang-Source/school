<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class M_insert extends CI_Model
{
	public function data($data,$id)
	{
		$this->db->insert($data, $id);
	}

	// Akun
	public function regis()
    {
        $data["id_sek"] = $this->input->post('id_sek');
        $data["user"] = $this->input->post('user');
        $data["email"] = $this->input->post('email');
        $data["pass"] = md5($this->input->post('confpass'));
        $data["no"]	= $this->input->post('no');
        $data["foto"] = $this->do_upload();

        $res = array(
            'id_sek' => $data["id_sek"],
            'nama' => $data["user"],
            'email' => $data["email"],
            'pass' => $data["pass"],
            'no' => $data["no"],
            'foto' => $data["foto"]
        );

        $res = $this->db->insert("admin", $res);
        return $res;
        var_dump($res);
    }

    // input Foto
    public function do_upload()
    {
        // $id = $this->input->post('id_bimbel');
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $fotobaru = date('dmYHis') . $foto;

        $path = "assets/images/admin/" . $fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = $fotobaru;
            return $res;
        }
        return "logo.png";
    }
}