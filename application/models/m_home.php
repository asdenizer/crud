<?php 

class m_home extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function index(){

    }
    function get_barang()
    {
        $data = $this->db->get('tb_barang');
        return $data->result_array();
    }
    function proces_input()
    {
    	$name_barang = $this->input->post('name_barang');
        $desc_barang  = $this->input->post('desc_barang');
        $price_barang = $this->input->post('price_barang');
        $condition_barang = $this->input->post('condition_barang');
        $kota = $this->input->post('kota');
        $provinsi = $this->input->post('provinsi');
        $stock = $this->input->post('stock');
        $data = array (
            'name_barang' => $name_barang,
            'desc_barang'  => $desc_barang,
            'price_barang'=> $price_barang,
            'condition_barang'=> $condition_barang,
            'kota'=> $kota,
            'provinsi'=> $provinsi,
            'stock' => $stock
        );  
        $this->db->insert('tb_barang',$data);
    }

    function edit_barang()
    {
        $id = $this->uri->segment(3);
		$data = $this->db->query("SELECT * FROM tb_barang WHERE id =".$id);
		return $data->result_array();
    }

    function prosesedit_barang()
    {
    	$id = $this->input->post('id');
    	$name_barang = $this->input->post('name_barang');
        $desc_barang  = $this->input->post('desc_barang');
        $price_barang = $this->input->post('price_barang');
        $condition_barang = $this->input->post('condition_barang');
        $kota = $this->input->post('kota');
        $provinsi = $this->input->post('provinsi');
        $stock = $this->input->post('stock');
        $data = array (
            'name_barang' => $name_barang,
            'desc_barang'  => $desc_barang,
            'price_barang'=> $price_barang,
            'condition_barang'=> $condition_barang,
            'kota'=> $kota,
            'provinsi'=> $provinsi,
            'stock' => $stock
        );
		$this->db->where('id',$this->input->post('id'));
		$edit = $this->db->update('tb_barang',$data);
		return $edit; 
    }

    function hapus_barang()
    {
		$id = $this->uri->segment(3);
		$this->db->delete('tb_barang', array('id' => $id));
    }



}

 ?>