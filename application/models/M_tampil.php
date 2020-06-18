<?php
defined('BASEPATH') or exit ('No direct script access allowed');
/**
 * 
 */
class M_tampil extends CI_Model
{
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

    // akun Sekolah
    public function getdata($data)
    {
        $res = $this->db->get($data);
        return $res;
    }

    public function profil($id)
    {
        return $this->db->query("SELECT * FROM sekolah WHERE id_sek = $id ORDER BY id DESC LIMIT 1");
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
    public function siswa($id)
    {
        $res = $this->db->get_where('siswa', array('id_sek' => $id));
        return $res;
    }

    public function edit_siswa($idsek, $id)
    {
        $res = $this->db->get_where('siswa', array('id_sek' => $idsek, 'id' => $id));
        return $res;
    }

    // Soal
    public function soal($id)
    {
        return $this->db->query("SELECT * FROM soal WHERE id_sek = $id");
    }
    public function tampilsoal($idsek, $id)
    {
        $res = $this->db->get_where('soal', array('id_sek' => $idsek, 'id_mapelsoal' => $id));
        return $res;
    }

    // Ujian
    public function ceksoal($sek, $mapel, $siswa)
    {
       $res = $this->db->get_where('ujian', array('id_sek' => $sek, 'id_mapeltukujian' => $mapel, 'id_siswa' => $siswa));
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
            redirect(base_url("Soal/tampil/" . $idsek . '/' . $idmapel));
        } else {
            echo "<script type='text/javascript'>
            window.alert('NIS atau password salah');
            window.location.href='" . base_url('masuk/masuk/' . $idsek . '/' . $idmapel) . "';
            </script>
            ";
        }
    }

}