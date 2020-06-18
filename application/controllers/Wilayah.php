<?php
defined('BASEPATH') or exit ('No direct script access allowed');
/**
 * 
 */
class Wilayah extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model("M_wilayah");
	}

	public function index()
	{
		echo "<option value=''>Pilih Provinsi</option>";

		$query = "SELECT * FROM provinsi ORDER BY nama ASC";
		$dewan1 = $db1->prepare($query);
		$dewan1->execute();
		$res1 = $dewan1->get_result();
		while ($row = $res1->fetch_assoc()) {
			echo "<option value='" . $row['id_prov'] . "'>" . $row['nama'] . "</option>";
		}
	}

	public function kabupaten()
	{
		echo "<option value=''>Pilih Kabupaten</option>";

		$query = "SELECT * FROM kabupaten WHERE id_prov=? ORDER BY nama ASC";
		$dewan1 = $db1->prepare($query);
		$dewan1->bind_param("i", $provinsi);
		$dewan1->execute();
		$res1 = $dewan1->get_result();
		while ($row = $res1->fetch_assoc()) {
			echo "<option value='" . $row['id_kab'] . "'>" . $row['nama'] . "</option>";
		}
	}

	public function kecamatan()
	{
		echo "<option value=''>Pilih Kecamatan</option>";

		$query = "SELECT * FROM kecamatan WHERE id_kab=? ORDER BY nama ASC";
		$dewan1 = $db1->prepare($query);
		$dewan1->bind_param("i", $kabupaten);
		$dewan1->execute();
		$res1 = $dewan1->get_result();
		while ($row = $res1->fetch_assoc()) {
			echo "<option value='" . $row['id_kec'] . "'>" . $row['nama'] . "</option>";
		}
	}
}