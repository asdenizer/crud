<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __Construct(){

		parent::__construct();

	}

	public function index()
	{
		$data['data'] = $this->m_home->get_barang();
		$this->load->view('index', $data);
	}

	public function input()
	{
		$this->load->view('input_barang');
	}

	public function proces_input()
	{
		 if($this->input->post('submit')){
            $this->m_home->proces_input();
            redirect('c_home/index');
        }
        $this->load->view('input');
	}

	public function edit_barang()
	{
		$data['edit_barang'] = $this->m_home->edit_barang();
		$this->load->view('edit_barang', $data);
	}

	public function prosesedit_barang()
	{
		$this->m_home->prosesedit_barang();
		redirect('c_home/index');
	}

	public function hapus_barang()
	{
		$this->m_home->hapus_barang();
		redirect('c_home/index');
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */