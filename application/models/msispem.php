<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msispem extends CI_Model {

	//kelola peserta
	public function getpeserta($where="")
	{
		$data = $this->db->query('select * from peserta'.$where);
		return $data->result_array();
	}

	public function addpeserta()
	{
		$data = array ( 'id_peserta' => $this->input->post('id_peserta'),
						'no_id' => $this->input->post('no_id', 'required'),
						'password' => md5($this->input->post('no_id', 'required')),
						'username' => $this->input->post('username'),
						'kelamin' => $this->input->post('kelamin'),
						'tempat_lahir' => $this->input->post('tempat_lahir'),
						'tgl_lahir' => $this->input->post('tgl_lahir'),
					  );

		return $this->db->insert('peserta', $data);
	}

	public function delpeserta ($tabel, $where)
	{
		$data = $this->db->delete($tabel, $where);
		return $data;
	}

	public function ubpeserta($tabel, $where)
	{
		$data = $this->db->get_where($tabel, $where);
		return $data->result_array();
	}

	public function do_ubdatepeserta($tabel, $id_peserta, $where)
	{

		$query = $this->db->update($tabel, $id_peserta, $where);
		return $query;
	}


	//kelola calon
	public function getcalon($where="")
	{
		$data = $this->db->query('select * from calon'.$where);
		return $data->result_array();
	}

	public function addcalon()
	{
		$data = array ( 'id_calon' => $this->input->post('id_calon'),
						'nama_calon' => $this->input->post('nama_calon', 'required'),
						'kelamin' => $this->input->post('kelamin'),
						'tempat_lahir' => $this->input->post('tempat_lahir'),
						'tgl_lahir' => $this->input->post('tgl_lahir'),
					  );

		return $this->db->insert('calon', $data);
	}

	public function delcalon($tabel, $where)
	{
		$data = $this->db->delete($tabel, $where);
		return $data;
	}

	public function ubcalon($tabel, $where)
	{
		$data = $this->db->get_where($tabel, $where);
		return $data->result_array();
	}

	public function do_ubdatecalon($tabel, $id_peserta, $where)
	{

		$query = $this->db->update($tabel, $id_peserta, $where);
		return $query;
	}

	//kelola laporan

	public function jml_hdir()
	{
		$data = $this->db->query('select * from peserta');
		return $data->num_rows();
	}

	public function suara()
	{
		$data = $this->db->query("select * from peserta where status='sudah'");
	}

	public function sudah()
	{
	  $this->db->from("peserta");
	  $this->db->where("status", "sudah");
	  return $this->db->count_all_results();
	}


	//kelola pemilihan
	public function cek_user($data){
		$query = $this->db->get_where('peserta', $data);
		return $query;
		}
	public function ubah_session($tablename, $data, $where){
			$query = $this->db->update($tablename, $data, $where);
			return $query;
		}
	public function tampil_jawaban($id)
		{
			$q = $this->db->query("select * from calon where rt=$id");
			return $q;
		}
	public function tampil_soal()
		{
			$q = $this->db->query("select * from fchart where status='Y'");
			return $q;
		}
	public function simpan_poll($id) // simpan
		{
			$q = $this->db->query("update calon set suara=suara+1 where id_calon=$id");
		}
	public function simpan_status($jd)
		{
		$queri = $this->db->query("update peserta set status='sudah' where id_peserta=$jd");
		return $queri;
		}
}

/* End of file msispem.php */
/* Location: ./application/models/msispem.php */