<?php 
	/**
	 * 
	 */
	class modeldata extends CI_Model
	{
		public function AmbilDataAsset()
		{
			return $this->db->get('tabel_asset')->result();
		}
		public function AmbilDataInvestor()
		{
			return $this->db->get('tabel_investor')->result();
		}
		public function AmbilDataUser()
		{
			return $this->db->get('tabel_user')->result();
		
		}
		public function SimpanAsset($id_asset, $nama_barang, $jumlah, $kondisi, $keterangan)
		{
			$SimpanData = array('id_asset' => $id_asset ,
								'nama_barang' => $nama_barang ,
								'jumlah' => $jumlah ,
								'kondisi' => $kondisi ,
								'keterangan' => $keterangan ,
			 );
			$this->db->insert('tabel_asset', $SimpanData);
		}
		public function SimpanInvestor($id_investor, $nama, $alamat, $keterangan)
		{
			$SimpanData = array('id_investor' => $id_investor ,
								'nama' => $nama ,
								'alamat' => $alamat ,
								'keterangan' => $keterangan ,
			 );
			$this->db->insert('tabel_investor', $SimpanData);
		}
		public function SimpanUser($nama, $username, $password)
		{
			$SimpanData = array('nama' => $nama ,
								'username' => $username ,
								'password' => $password ,
			 );
			$this->db->insert('tabel_user', $SimpanData);
		}
		public function getIdAsset($id)
		{
			$this->db->where('id_asset', $id);
			return $this->db->get('tabel_asset');
		}
		public function hapusDataAsset()
		{
			$hapusData = $this->input->post('id_asset');//true
			$this->db->where('id_asset', $hapusData);
			$this->db->delete('tabel_asset');
		}
		public function getIdInvestor($id)
		{
			$this->db->where('id_investor', $id);
			return $this->db->get('tabel_investor');
		}
		public function hapusDataInvestor()
		{
			$hapusData = $this->input->post('id_investor');//true
			$this->db->where('id_investor', $hapusData);
			$this->db->delete('tabel_investor');
		}
		public function getIdUser($id)
		{
			$this->db->where('id_user', $id);
			return $this->db->get('tabel_user');
		}
		public function hapusDataUser()
		{
			$hapusData = $this->input->post('id_user');//true
			$this->db->where('id_user', $hapusData);
			$this->db->delete('tabel_user');
		}
		public function getIdDataUser($id_user)
		{
			$this->db->where('id_user', $id_user);
			return $this->db->get('tabel_user')->result();
		}
		public function UpdateUser($id_user, $nama, $username, $password)
		{
			$editData = array(
				'nama' => $nama,
				'username' => $username,
				'password' => $password, 
			);
			$this->db->set($editData);
			$this->db->where('id_user', $id_user);
			$this->db->update('tabel_user');
		}
		public function getIdDataAsset($id_asset)
		{
			$this->db->where('id_asset', $id_asset);
			return $this->db->get('tabel_asset')->result();
		}
		public function UpdateAsset($id_asset, $nama_barang, $jumlah, $kondisi, $keterangan)
		{
			$editData = array(
				'nama_barang' => $nama_barang,
				'jumlah' => $jumlah,
				'kondisi' => $kondisi,
				'keterangan' => $keterangan,
			);
			$this->db->set($editData);
			$this->db->where('id_asset', $id_asset);
			$this->db->update('tabel_asset');
		}
		public function getIdDataInvestor($id_investor)
		{
			$this->db->where('id_investor', $id_investor);
			return $this->db->get('tabel_investor')->result();
		}
		public function UpdateInvestor($id_investor, $nama, $alamat, $keterangan)
		{
			$editData = array(
				'id_investor' => $id_investor,
				'nama' => $nama,
				'alamat' => $alamat,
				'keterangan' => $keterangan,
			);
			$this->db->set($editData);
			$this->db->where('id_investor', $id_investor);
			$this->db->update('tabel_investor');
		}
	}
 ?>