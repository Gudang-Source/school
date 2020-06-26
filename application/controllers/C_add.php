<?php 
defined("BASEPATH") or exit("No direct script access allowed");
/**
 * 
 */
class C_add extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
		$this->load->model('M_insert');

	}

// profil sekolah
	public function profil()
	{
		$data["id_sek"]   = $this->session->userdata('id_sek');
		$data["nama"]     = $this->input->post('nama');
		$data["alamat"]   = $this->input->post('alamat');
		$data["email"]    = $this->input->post('email');
		$data["telpon"]   = $this->input->post('telpon');

		$res = array(
			'id_sekolah' => $data["id_sek"],
			'nama'       => $data["nama"],
			'alamat'     => $data["alamat"],
			'email'      => $data["email"],
			'telpon'     => $data["telpon"]
		);

		$res = $this->M_insert->data("sekolah", $res);
		redirect(base_url('admin'));
	}
// end Profil Sekolah


// siswa
	public function add_siswa()
	{
		$id = $this->session->userdata('id_sek');
		$data["nama"] = $this->input->post('nama');
		$data["nis"] = $this->input->post('nis');

		$res = array(
			'id_sek' => $id,
			'nama' => $data["nama"],
			'nis' => $data["nis"]
		 );

		$res = $this->M_insert->data("siswa",$res);
		redirect(base_url('admin'));
	}
// end Siswa

// Soal Ujian
	public function soal()
	{
		$id = $this->session->userdata('id_sek');
		$data["mapel"] = $this->input->post('mapel');
		$data["kelas"] = $this->input->post('kelas');
		$data["jurusan"] = $this->input->post('jurusan');
		$data["tgl"] = $this->input->post('tgl');
		$data["mulai"] = $this->input->post('mulai');
		$data["selesai"] = $this->input->post('selesai');
		$data["soal"] = $this->input->post('soal');
		$data["soalimg"] = $this->soalimg();
		$data["jawaba"] = $this->input->post('jawaba');
		$data["jawabaimg"] = $this->jwbaImage();
		$data["jawabb"] = $this->input->post('jawabb');
		$data["jawabbimg"] = $this->jwbbImage();
		$data["jawabc"] = $this->input->post('jawabc');
		$data["jawabcimg"] = $this->jwbcImage();
		$data["jawabd"] = $this->input->post('jawabd');
		$data["jawabdimg"] = $this->jwbdImage();
		$data["jawaban"] = $this->input->post('jawaban');
		$data["idmapel"] = $this->input->post('mapel');
		$data["pass"] = $this->input->post('pass');

		$res = array(
			'id_sek' => $id,
			'id_mapel' => $data["idmapel"],
			'mapel' => $data["mapel"],
			'pass' => $data["pass"],
			'kelas' => $data["kelas"],
			'jurusan' => $data["jurusan"],
			'tanggal' => $data["tgl"],
			'mulai' => $data["mulai"],
			'selesai' => $data["selesai"],
			'soal' => $data["soal"],
			'soalimg' => $data["soalimg"],
			'jawaba' => $data["jawaba"],
			'jawabaimg' => $data["jawabaimg"],
			'jawabb' => $data["jawabb"],
			'jawabbimg' => $data["jawabbimg"],
			'jawabc' => $data["jawabc"],
			'jawabcimg' => $data["jawabcimg"],
			'jawabd' => $data["jawabd"],
			'jawabdimg' => $data["jawabdimg"],
			'jawaban' => $data["jawaban"]
		);

		$res = $this->M_insert->data("soal",$res);
		redirect(base_url('admin'));
	}

	public function soalimg()
    {
        // $id = $this->input->post('id_bimbel');
        $foto = $_FILES['soalimg']['name'];
        $tmp = $_FILES['soalimg']['tmp_name'];
        $fotobaru = date('dmYHis') . $foto;

        $path = "assets/images/soal/" . $fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = $fotobaru;
            return $res;
        }
        // return "logo.png";
    }

    


	public function jwbaImage()
    {
        // $id = $this->input->post('id_bimbel');
        $foto = $_FILES['jawabaimg']['name'];
        $tmp = $_FILES['jawabaimg']['tmp_name'];
        $fotobaru = date('dmYHis') . $foto;

        $path = "assets/images/soal/" . $fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = $fotobaru;
            return $res;
        }
        return "logo.png";
    }

	public function jwbbImage()
    {
        // $id = $this->input->post('id_bimbel');
        $foto = $_FILES['jawabbimg']['name'];
        $tmp = $_FILES['jawabbimg']['tmp_name'];
        $fotobaru = date('dmYHis') . $foto;

        $path = "assets/images/soal/" . $fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = $fotobaru;
            return $res;
        }
        return "logo.png";
    }

	public function jwbcImage()
    {
        // $id = $this->input->post('id_bimbel');
        $foto = $_FILES['jawabcimg']['name'];
        $tmp = $_FILES['jawabcimg']['tmp_name'];
        $fotobaru = date('dmYHis') . $foto;

        $path = "assets/images/soal/" . $fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = $fotobaru;
            return $res;
        }
        return "logo.png";
    }


	public function jwbdImage()
    {
        // $id = $this->input->post('id_bimbel');
        $foto = $_FILES['jawabdimg']['name'];
        $tmp = $_FILES['jawabdimg']['tmp_name'];
        $fotobaru = date('dmYHis') . $foto;

        $path = "assets/images/soal/" . $fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = $fotobaru;
            return $res;
        }
        return "logo.png";
    }


	public function lanjut()
	{
		$id = $this->session->userdata('id_sek');
		$data["mapel"] = $this->input->post('mapel');
		$data["kelas"] = $this->input->post('kelas');
		$data["jurusan"] = $this->input->post('jurusan');
		$data["tgl"] = $this->input->post('tgl');
		$data["mulai"] = $this->input->post('mulai');
		$data["selesai"] = $this->input->post('selesai');
		$data["soal"] = $this->input->post('soal');
		$data["jawaba"] = $this->input->post('jawaba');
		$data["jawabaimg"] = $this->input->post('jawabaimg');
		$data["jawabb"] = $this->input->post('jawabb');
		$data["jawabbimg"] = $this->input->post('jawabbimg');
		$data["jawabc"] = $this->input->post('jawabc');
		$data["jawabcimg"] = $this->input->post('jawabcimg');
		$data["jawabd"] = $this->input->post('jawabd');
		$data["jawabdimg"] = $this->input->post('jawabdimg');
		$data["jawaban"] = $this->input->post('jawaban');
		$data["idmapel"] = $this->input->post('mapel');
		$data["pass"] = $this->input->post('pass');

		$res = array(
			'id_sek' => $id,
			'mapel' => $data["mapel"],
			'kelas' => $data["kelas"],
			'jurusan' => $data["jurusan"],
			'tanggal' => $data["tgl"],
			'mulai' => $data["mulai"],
			'selesai' => $data["selesai"],
			'soal' => $data["soal"],
			'soalimg' => $this->uploadsoalimg(),
			'jawaba' => $data["jawaba"],
			'jawabaimg' => $data["jawabaimg"],
			'jawabb' => $data["jawabb"],
			'jawabbimg' => $data["jawabbimg"],
			'jawabc' => $data["jawabc"],
			'jawabcimg' => $data["jawabcimg"],
			'jawabd' => $data["jawabd"],
			'jawabdimg' => $data["jawabdimg"],
			'jawaban' => $data["jawaban"]
		);

		$res = $this->M_insert->data("tmp_soal",$res);
		redirect(base_url('soal/soal'));
	}

	 private function uploadsoalimg()
	{
	    $config['upload_path']          = 'asset/images/soal/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['file_name']            = $this->input->post('soalimg');
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB
	    // $config['max_width']            = 1024;
	    // $config['max_height']           = 768;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('image')) {
	        return $this->upload->data("file_name");
	    }
	    
	    return "logo.png";
	}

// End Soal Ujian

// Admin
	public function admin()
    {
        $data["id_sek"] = $this->session->userdata('id_sek');
        $data["nama"] = $this->input->post('nama');
        $data["email"] = $this->input->post('email');
        $data["no"] = $this->input->post('no');
        $data["pass"]	= md5($this->input->post('confpass'));
        $data["no"] = $this->input->post('no');
        $data["foto"] = $this->do_upload();

        $res = array(
            'id_sek' => $data["id_sek"],
            'nama' => $data["nama"],
            'email' => $data["email"],
            'no' => $data["no"],
            'pass' => $data["pass"],
            'foto' => $data["foto"]
        );

        $res = $this->db->insert("admin", $res);
        return $res;
        redirect(base_url("admin/akun"));
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
// End Admin
}