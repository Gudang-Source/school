<?php
defined('BASEPATH') or exit('no direct script access allowed');
class M_insert extends CI_model
{
    //  Profil Sekolah
    public function sekolah($idsek)
    {
        $data["idsek"] = $idsek;
        $cek = $this->db->query("SELECT id FROM sekolah WHERE id_sek = $idsek");


        $data["sekolah"] = $this->input->post('sekolah');
        $data["prov"] = $this->input->post('prov');
        $data["kab"] = $this->input->post('kab');
        $data["kec"] = $this->input->post('kec');
        $data["alamat"] = $this->input->post('alamat');
        $data["email"] = $this->input->post('email');
        $data["kontak"] = $this->input->post('kontak');
        $data["foto"] = $this->addfoto();

        $res = array(
            'id_sek' => $data["idsek"],
            'nama' => $data["sekolah"],
            'provinsi' => $data["prov"],
            'kab' => $data["kab"],
            'kec' => $data["kec"],
            'alamat' => $data["alamat"],
            'email' => $data["email"],
            'kontak' => $data["kontak"],
            'foto' => $data["foto"]
        );

        if ($cek->num_rows() == 0) {
            $res = $this->db->insert("sekolah", $res);
            return $res;
        } else {
            $this->db->where(array('id_sek' => $data["idsek"]));
            $this->db->update('sekolah', $res);
        }
    }

    public function addfoto()
    {
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $fotobaru = date('dmYHis') . $foto;

        $path = "assets/images/sekolah/" . $fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = $fotobaru;
            return $res;
        }

        return "logo.png";
    }

    //  Akun
    public function regis()
    {
        $data["id_sek"] = $this->input->post('id_sek');
        $data["email"] = $this->input->post('email');
        $data["user"] = $this->input->post('user');
        $data["pass"] = md5($this->input->post('confpass'));
        $data["img"] = $this->do_upload();

        $res = array(
            'id_sek' => $data["id_sek"],
            'email' => $data["email"],
            'username' => $data["user"],
            'pass' => $data["pass"],
            'img' => $data["img"]
        );

        $res = $this->db->insert("akun_sekolah", $res);
        return $res;
    }

    public function add_akun($id)
    {
        $idsek = $id;
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

        $res = $this->db->insert("akun_sekolah", $res);
        return $res;
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

    // Kelas
    public function kelas($id)
    {
        $data['idsek'] = $id;
        $data["kelas"] = $this->input->post('kelas');
        $data["ruang"] = $this->input->post('ruang');
        $data["jur"] = $this->input->post('jur');
        $data["idkel"] = strtoupper($data["kelas"] . $data["ruang"] . $data["jur"]);

        $res = array(
            'id_sek' => $data["idsek"],
            'id_kelas' => $data["idkel"],
            'kelas' => $data["kelas"],
            'ruangan' => $data["ruang"],
            'jurusan' => $data["jur"]
        );

        $idkel = $this->db->query("SELECT * FROM kelas_siswa WHERE id_kelas ='" . $data["idkel"] . "'");
        if ($data["idkel"] == $idkel) {
            echo "
            <script type='text/javascript'>
            Swal.fire(
                'The Internet?',
                'That thing is still around?',
                'error'
            )
            </script>
            ";
        } else {
            $res = $this->db->insert("kelas_siswa", $res);
            return $res;
        }
    }

    // Siswa
    public function siswa($idsek)
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

    // Mapel
    public function add_mapel($id)
    {
        $data["idsek"] = $id;
        $data["idmapel"] = $this->input->post('idmapel');
        $data["mapel"] = $this->input->post('mapel');

        $res = array(
            'id_sek' => $data["idsek"],
            'id_mapel' => $data["idmapel"],
            'mapel' => $data["mapel"]
        );

        $res = $this->db->insert("mapel", $res);
        return $res;
    }



    // Mapel Ujian
    public function mapel_ujian($id)
    {
        $data["idsek"] = $id;
        $data["idmapel"] = $this->input->post('mapel');
        $data["idkelas"] = $this->input->post('kelas');
        $data["semester"] = $this->input->post('semester');
        $data["mulai"] = $this->input->post('mulai');
        $data["selesai"] = $this->input->post('selesai');
        $data["tanggal"] = $this->input->post('tanggal');
        $data["pass"] = $this->input->post('pass');
        $data["mapelsoal"] = $data["idkelas"] . $data["idmapel"];

        $res = array(
            'id_sek' => $data["idsek"],
            'id_mapelsoal' => $data["mapelsoal"],
            'id_mapel' => $data["idmapel"],
            'id_kelas' => $data["idkelas"],
            'semester' => $data["semester"],
            'tanggal' => $data["tanggal"],
            'mulai' => $data["mulai"],
            'selesai' => $data["selesai"],
            'pass' => $data["pass"]
        );

        $res = $this->db->insert("mapel_tuksoal", $res);
        return $res;
    }

    // Soal
    public function add_soal($id)
    {
        $data["idsek"] = $id;
        $data["mapel"] = $this->input->post('mapel');
        $data["no"] = $this->input->post('no');
        $data["soal"] = $this->input->post('soal');
        $data["jawaba"] = $this->input->post('jawaba');
        $data["jawabb"] = $this->input->post('jawabb');
        $data["jawabc"] = $this->input->post('jawabc');
        $data["jawabd"] = $this->input->post('jawabd');
        $data["jawaban"] = $this->input->post('jawaban');

        $res = array(
            'id_sek' => $data["idsek"],
            'id_mapelsoal' => $data["mapel"],
            'nomer' => $data["no"],
            'soal' => $data["soal"],
            'jawab_a' => $data["jawaba"],
            'jawab_b' => $data["jawabb"],
            'jawab_c' => $data["jawabc"],
            'jawab_d' => $data["jawabd"],
            'jawaban' => $data["jawaban"]
        );

        $res = $this->db->insert("soal", $res);
        return $res;
    }

    public function ujian($data)
    {
        $this->db->insert("ujian", $data);
    }
}
