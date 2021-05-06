<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function beranda()
	{
		$this->load->view('beranda');
	}
	public function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$loginsukses=$this->db->get('tabel_user')->row_array();
		if ($loginsukses>0) {
			redirect('Welcome/beranda');
		}else {
			redirect('Welcome/');
		}
	}
	public function Data_Asset()
	{
		$this->load->model('modeldata');
		$data['data_asset']=$this->modeldata->AmbilDataAsset();
		$this->load->view('beranda', $data);
	}
	public function Data_Investor()
	{
		$this->load->model('modeldata');
		$data['data_investor']=$this->modeldata->AmbilDataInvestor();
		$this->load->view('beranda', $data);
	}
	public function Data_User()
	{
		$this->load->model('modeldata');
		$data['data_user']=$this->modeldata->AmbilDataUser();
		$this->load->view('beranda', $data);
	}
	public function TambahDataAsset()
	{
		$this->load->view('beranda');
	}
	public function SimpanAsset()
	{
		$this->load->model('modeldata');
		$id_asset=$this->input->post('id_asset');
		$nama_barang=$this->input->post('nama_barang');
		$jumlah=$this->input->post('jumlah');
		$kondisi=$this->input->post('kondisi');
		$keterangan=$this->input->post('keterangan');
		$this->modeldata->SimpanAsset($id_asset, $nama_barang, $jumlah, $kondisi, $keterangan);
		redirect('Welcome/Data_Asset');
	}
	public function TambahDataInvestor()
	{
		$this->load->view('beranda');
	}
	public function SimpanInvestor()
	{
		$this->load->model('modeldata');
		$id_investor=$this->input->post('id_investor');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$keterangan=$this->input->post('keterangan');
		$this->modeldata->SimpanInvestor($id_investor, $nama, $alamat, $keterangan);
		redirect('Welcome/Data_Investor');
	}
	public function TambahDataUser()
	{
		$this->load->view('beranda');
	}
	public function SimpanUser()
	{
		$this->load->model('modeldata');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->modeldata->SimpanUser($nama, $username, $password);
		redirect('Welcome/Data_User');
	}
	public function getIdAsset($id)
	{
		$this->load->model('modeldata');
		$data = $this->modeldata->getIdAsset($id)->row();
		echo json_encode($data);
	}
	public function hapusDataAsset()
	{
		$this->load->model('modeldata');
		$this->modeldata->hapusDataAsset();
		redirect('Welcome/Data_Asset');
	}
	public function getIdInvestor($id)
	{
		$this->load->model('modeldata');
		$data = $this->modeldata->getIdInvestor($id)->row();
		echo json_encode($data);
	}
	public function hapusDataInvestor()
	{
		$this->load->model('modeldata');
		$this->modeldata->hapusDataInvestor();
		redirect('Welcome/Data_Investor');
	}
	public function getIdUser($id)
	{
		$this->load->model('modeldata');
		$data = $this->modeldata->getIdUser($id)->row();
		echo json_encode($data);
	}
	public function hapusDataUser()
	{
		$this->load->model('modeldata');
		$this->modeldata->hapusDataUser();
		redirect('Welcome/Data_User');
	}
	public function EditDataUser($id_user = null)
	{
		$this->load->model('modeldata');
		$data['getIdDataUser'] = $this->modeldata->getIdDataUser($id_user);
		$this->load->view('beranda', $data);
	}
	public function UpdateUser()
	{
		$this->load->model('modeldata');
		$id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->modeldata->UpdateUser($id_user, $nama, $username, $password);
		redirect('Welcome/Data_User');
	}
	public function EditDataAsset($id_asset = null)
	{
		$this->load->model('modeldata');
		$data['getIdDataAsset'] = $this->modeldata->getIdDataAsset($id_asset);
		$this->load->view('beranda', $data);
	}
	public function UpdateAsset()
	{
		$this->load->model('modeldata');
		$id_asset = $this->input->post('id_asset');
		$nama_barang = $this->input->post('nama_barang');
		$jumlah = $this->input->post('jumlah');
		$kondisi = $this->input->post('kondisi');
		$keterangan = $this->input->post('keterangan');
		$this->modeldata->UpdateAsset($id_asset, $nama_barang, $jumlah, $kondisi, $keterangan);
		redirect('Welcome/Data_Asset');
	}
	public function EditDataInvestor($id_investor = null)
	{
		$this->load->model('modeldata');
		$data['getIdDataInvestor'] = $this->modeldata->getIdDataInvestor($id_investor);
		$this->load->view('beranda', $data);
	}
	public function UpdateInvestor()
	{
		$this->load->model('modeldata');
		$id_investor = $this->input->post('id_investor');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$keterangan = $this->input->post('keterangan');
		$this->modeldata->UpdateInvestor($id_investor, $nama, $alamat, $keterangan);
		redirect('Welcome/Data_Investor');
	}
	
}

