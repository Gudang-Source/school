<?php
defined('BASEPATH') or exit ('No direct script access allowed');
/**
 * 
 */
class M_tampil extends CI_Model
{
    // akun Sekolah
    public function getdata($data)
    {
        $res = $this->db->get($data);
        return $res;
    }
    
	// akun admin
    public function get_akun($id)
    {
        return $this->db->query("SELECT * FROM admin WHERE id_sek = $id");
    }

    public function cek_akun($email, $pass)
    {
        return $this->db->query("SELECT * FROM admin WHERE email = '" . $email . "' AND pass = '" . $pass . "'");
    }

    public function admin($idsek, $email)
    {
        $res = $this->db->get_where('akun_sekolah', array('id_sek' => $idsek, 'email' => $email));
        return $res;
    }

    public function get_admin($idsek, $id)
    {
        return $this->db->query("SELECT * FROM akun_sekolah WHERE id_sek = $idsek AND id = $id");
    }


    public function profil($id)
    {
        return $this->db->query("SELECT * FROM sekolah WHERE id_sekolah = $id ORDER BY id DESC LIMIT 1");
    }

    // mapel
    public function add_mapel($id)
    {
        return $this->db->query("SELECT * FROM mapel WHERE id_sek = $id");
    }

    public function mapel_soal($id)
    {
        return $this->db->query("SELECT * FROM mapel_tuksoal WHERE id_sek = $id");
    }

    public function tampilmapel($id)
    {
        return $this->db->query("SELECT mapel_tuksoal.id_sek, id_mapelsoal, mapel.id_mapel, mapel, mulai, selesai, kelas_siswa.id_kelas, kelas_siswa.kelas, kelas_siswa.ruangan,kelas_siswa.jurusan, pass
        FROM mapel_tuksoal
        INNER JOIN mapel on mapel_tuksoal.id_mapel = mapel.id_mapel
        INNER JOIN kelas_siswa on mapel_tuksoal.id_kelas = kelas_siswa.id_kelas WHERE mapel_tuksoal.id_sek =$id GROUP BY mapel_tuksoal.id_mapelsoal");
    }

    public function cekmapel($idsek, $id)
    {
        return $this->db->get_where('mapel_tuksoal', array('id_sek' => $idsek, 'id_mapelsoal' => $id));
    }

    // Kelas
    public function kelas($id)
    {
        return $this->db->query("SELECT * FROM kelas_siswa WHERE id_sek = $id");
    }


    // siswa
    public function siswa($id,$nis)
    {
        $res = $this->db->get_where('siswa', array('id_sek' => $id, 'nis' => $nis));
        $r = $res->result_array();
        return $r;
    }

    public function admin_siswa($idsek)
    {
        $res = $this->db->get_where('siswa', array('id_sek' => $idsek));
        return $res;
    }

    // Soal
    public function soal($id,$kelas)
    {
        return $this->db->get_where('soal', array('id_sek' => $id, 'kelas' => $kelas));
    }
    

    public function cekcek($idsek, $id)
    {
        $res = $this->db->get_where('soal', array('id_sek' => $idsek, 'id_mapel' => $id));
        $r = $res->result_array();
        return $r;
    }

    // Ujian
    public function ceksoal($sek)
    {
       $res = $this->db->get_where('ujian', array('id_sek' => $sek));
       return $res;
    }


    // login
    public function login()
    {
        $run = false;
        $email = $this->input->post('email');
        $pass = md5($this->input->post('pass'));
        $akun = $this->cek_akun($email, $pass);
        if ($akun->num_rows() != 0) {
            foreach ($akun->result() as $a) {
                $em = $a->email;
            }
            foreach ($akun->result() as $p) {
                $pa = $p->pass;
            }
            foreach ($akun->result() as $id) {
                $sek = $id->id_sek;
            }
            foreach ($akun->result() as $na) {
                $name = $na->username;
            }

            if (($email == $em) && ($pass == $pa)) {
                $data_session = array(
                    'id_sek' => $sek,
                    'email' => $em,
                    'nama' => $name,
                    'status' => "login"
                );

                $this->session->set_userdata($data_session);
                $run = true;
            }
        }

        if ($run == true) {
            redirect(base_url("admin"));
        } else {
            echo "<script type='text/javascript'>
            window.alert('Email atau password salah');
            window.location.href='" . base_url('login') . "';
            </script>
            ";
        }
    }

    public function user()
    {
        $run = false;
        $data["sekolah"] = $this->input->post('sekolah');
        $data["nis"] = $this->input->post('nis');
        $data["kelas"] = $this->input->post('kelas');

        $siswa = $this->db->get_where("siswa", array('id_sek' => $data["sekolah"] ), array('nis' => $data["nis"]));
// var_dump($data);
// die();
        if ($siswa->num_rows() != 0) {
            foreach ($siswa->result() as $a) {
                $sek = $a->id_sek;
            }
            foreach ($siswa->result() as $b) {
                $nis = $b->nis;
            }
            if (($sek == $data["sekolah"]) && ($nis == $data["nis"])) {
                $data_session = array(
                    'id_sek' => $sek,
                    'nis' => $nis,
                    'kelas' => $data["kelas"],
                    'status' => "cool"
                );

                $this->session->set_userdata($data_session);
                $run = true;

        }
    }
    if ($run == true) {
            redirect(base_url("mobile/mapel/" . $sek . '/'.$data["kelas"] .'/' . $nis));
        } else {
            echo "<script type='text/javascript'>
            window.alert('NIS Anda tidak Terdaftar');
            window.location.href='" . base_url('mobile') .  "';
            </script>
            ";
        }
    }

    public function masuk($idsek, $idmapel)
    {
        $run = false;
        $nis = $this->input->post('nis');
        $pass = $this->input->post('pass');
        $siswa = $this->db->get_where("siswa", array('id_sek' => $idsek, 'nis' => $nis));
        $mapel = $this->db->get_where("mapel_tuksoal", array('id_mapelsoal' => $idmapel, 'pass' => $pass));
        if ($siswa && $mapel->num_rows() != 0) {
            foreach ($siswa->result() as $a) {
                $nim = $a->nis;
            }
            foreach ($mapel->result() as $m) {
                $mapelsoal = $m->id_mapelsoal;
            }
            foreach ($mapel->result() as $m) {
                $mapel = $m->pass;
            }
            if (($nis == $nim) && ($pass == $mapel)) {
                $data_session = array(
                    'id_sek' => $idsek,
                    'nis' => $nim,
                    'idmapel' => $mapelsoal,
                    'status' => "masuk"
                );

                $this->session->set_userdata($data_session);
                $run = true;
            }
        }

        if ($run == true) {
            redirect(base_url("mobile/mapel/" . $idsek . '/' . $idmapel));
        } else {
            echo "<script type='text/javascript'>
            window.alert('NIS atau password salah');
            window.location.href='" . base_url('mobile'). "';
            </script>
            ";
        }
    }

    public function masuksoal($idsek, $idmapel,$nis)
    {
        
        $pass = $this->input->post('pass');

        $mapel = $this->db->get_where("soal", array('id_sek' => $idsek, 'id_mapel' => $idmapel, 'pass' => $pass));
        if ($mapel->num_rows() != 0) {
            redirect(base_url("soal/soal/" . $idsek . '/' . $idmapel));
        } else {
            echo "<script type='text/javascript'>
            window.alert('NIS atau password salah');
            window.location.href='" . base_url('mobile/mapel/').$idsek.'/'.$nis. "';
            </script>
            ";
        }
    }
}