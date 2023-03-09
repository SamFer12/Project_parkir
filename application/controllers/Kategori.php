<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index()
	{
		$this->load->view('kategori');
	}
	
	public function tambah()
	{
		$this->load->view('kategoritambah');
	}
	
	public function tambah_proses()
	{
		$data = $this->input->post();

		$arr = array(
			'nm_kategori' 		=> $data['nm_kategori'],
			'harga_1jam'   => $data['harga_1jam'],
			 
		);

		$result = $this->db->insert('Kategori', $arr);

		redirect("Kategori");
	}

	public function edit($id)
	{
		$data = array(
			'data'	=> $this->db->get_where('kategori', ['nm_kategori' => $id])->row()
		);
		$this->load->view('kategoriedit', $data);
	}
	
	public function edit_proses($id)
	{
		$data = $this->input->post();

		$arr = array(
			'nm_kategori' 		=> $data['nm_kategori'],
			'harga_1jam'   => $data['harga_1jam'],
		);

		$result = $this->db->update('kategori', $arr, ['nm_kategori' => $id]);

		redirect("Kategori");
	}

	public function hapus($id)
	{
		$result = $this->db->delete('kategori', ['nm_kategori' => $id]);

		redirect("Kategori");
	}
}
