
// class C_view extends CI_Controller
// {
	
// 	function __construct()
// 	{
// 		parent::__construct();
// 		$this->load->model("M_tampil");
// 	}

// 	public function siswa()
// 	{
// 		$data = [
// 			'siswa' => $this->m_tampil->siswa()
// 		];
// 		$this->page("content/siswa")
// 	}

// 	public function page($content = "true" , $data = "true")
// 	{
// 		$this->load->view("content/header");
// 		$this->load->view("content/sidebar");
// 		$this->load->view($content,$data);
// 		$this->load->view("content/footer");
// 	}
// }