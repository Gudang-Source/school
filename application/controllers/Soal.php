<?php
defined('BASEPATH') or exit ('No direct script access allowed');
/**
 * 
 */
class Soal extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "cool") {
			redirect(base_url("mobile"));
		}

		$this->load->model('M_tampil');
		$this->load->model('M_insert');
	}

	
	public function index()
	{
		$id = $this->session->userdata('id_sek');
		$nis = $this->session->userdata('nis');
		$data["pass"] = $this->input->post('pass');
		$data["mapel"] = $this->input->post('mapel');
		$this->M_tampil->masuksoal($id,$data["mapel"],$nis);
	}

	public function soal($id, $mapel)
	{
		$data = [
			'soal' => $this->M_tampil->cekcek($id, $mapel)

		];
		$this->page("user/soal", $data);
	}

	public function ujian()
	{
		$data["nis"]    = $this->session->userdata('nis');
		$data["idsek"]  = $this->input->post('idsek');
		$data["mapel"]  = $this->input->post('mapel');
		$data["kelas"]  = $this->input->post('kelas');
		$data["nosoal"] = $this->input->post('nosoal');
		$data["tanggal"] = $this->input->post('tanggal');

		$siswa = $this->M_tampil->siswa($data["idsek"], $data["nis"]);
		$soal = $this->M_tampil->cekcek($data["idsek"], $data["mapel"]);

		foreach ($siswa as $n) {
			$na = $n["nama"];
		}

		foreach ($soal as $s) {
			$so = $s["mapel"];
		}

		$con = count($soal);
		$jawaban = array();
		$nomer=array();
        for ($i = 1; $i <= $con; $i++) {
            $jawab = $this->input->post('jawab_' . $i);
            array_push($jawaban, $jawab);
        }

        $suu = array();
        foreach ($soal as $u) {
            $asu = $u["jawaban"];
            array_push($suu, $asu);
        }

        $jawabun = implode("- ", $jawaban);

        $sat = array_diff_assoc($suu, $jawaban);
        $su = count($sat);
        $poin = $con - $su;

        $res = array(
        	'id_sek' => $data["idsek"],
        	'nis' => $data["nis"],
        	'nama' => $na,
        	'mapel' => $so,
        	'kelas' => $data["kelas"],
        	'tanggal' => $data["tanggal"],
        	'jawaban' => $jawabun,
        	'poin' => $poin
        );

        $this->M_insert->data("ujian",$res);
        
        $this->selesai($na, $so);
	}


	public function edit($id)
	{
		$data = [
			'edit' => $this->M_tampil->tampilsoal($id)
		];
		$this->page('content/edit_soal',$data)
	}

	public function selesai($na, $so)
	{
		$data = [
			'nama' => $na,
			'sekolah' => $this->session->userdata('idsek'),
			'mapel' => $so
		];
		$this->page('user/selesai',$data);
	}

	public function page($content = "true",$data = "true")
	{
		$this->load->view('user/header');
		$this->load->view($content,$data);
		$this->load->view('user/footer');

	}
}