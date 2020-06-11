<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ujian extends CI_Controller
{
    public function __Construct()
    {
        parent:: __Construct();
        if ($this->session->userdata('status') != "masuk") {
            redirect(base_url("mobile"));
        }

        $this->load->model("M_tampil");
        $this->load->model("M_insert");
    }

    public function index()
    {
        $res = false;
        $siswa = $this->session->userdata('nis');
        $sek = $this->session->userdata('id_sek');
        $mapel = $this->session->userdata('idmapel');

        $pel = $this->M_tampil->tampilsoal($sek, $mapel);
        $hit = $pel->result_array();
        $cek = $this->M_tampil->ceksoal($siswa, $sek, $mapel);

        $count = count($hit);
        $jawaban = array();
        for ($i=1; $i <= $count; $i++) { 
        $jawab = $this->input->post('jawab_' . $i);
        array_push($jawaban , $jawab);
        }
        $jwb = implode("-", $jawaban);


        $jawabun = array();
        foreach ($hit as $jaw) {
            array_push($jawabun, $jaw["jawaban"]);
        }

        print_r($jawabun);
        print_r($jawaban);

        $diff = array_diff_assoc($jawabun,$jawaban);
        $condiff = count($diff);
        $poin = $count - $condiff;

        echo $condiff;
        echo $poin;

        if ($cek->num_rows() == 0) {
            $data = array(
                'id_sek' => $sek,
                'id_mapeltukujian' => $mapel,
                'id_siswa' => $siswa,
                'jawaban' => $jwb,
                'poin' => $poin
            );
            $this->M_insert->ujian($data);

            $res = true;
        }

        if ($res = true){
            redirect("soal/selesai");
        }else{
        echo "<script type='text/javascript'>
        window.alert('Anda sudah melakukan ujian di mapel ini');
        window.location.href='" . base_url('mobile') . "';
        </script>
        ";
        }
    }
}
