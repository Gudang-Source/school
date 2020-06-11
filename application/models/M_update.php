<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_update extends CI_Model
{
    public function akun($idsek, $id)
    {
        $idsek = $idsek;
        $data["email"] = $this->input->post('email');
        $data["user"] = $this->input->post('user');
        $data["pass"] = md5($this->input->post('repass'));
        $data["img"] = $this->do_upload();

        $res = array(
            'id_sek' => $idsek,
            'email' => $data["email"],
            'username' => $data["user"],
            'pass' => $data["pass"],
            'img' => $data["img"]
        );
        $this->db->where(array('id' => $id));
        $this->db->update('akun_sekolah', $res);
    }

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

    public function siswa($idsek, $id)
    {
        $data["idsek"] = $idsek;
        $data["idsis"] = $this->input->post('nis');
        $data["nama"] = $this->input->post('nama');
        $data["jk"] = $this->input->post('jk');
        $data["kelas"] = $this->input->post('kelas');
        $data["hp"] = $this->input->post('hp');

        $res = array(
            'id_sek' => $data["idsek"],
            'nis' => $data["idsis"],
            'nama' => $data["nama"],
            'jk' => $data["jk"],
            'id_kelas' => $data["kelas"],
            'nope' => $data["hp"]
        );
        $res = $this->db->insert("siswa", $res);
        return $res;
    }
}
