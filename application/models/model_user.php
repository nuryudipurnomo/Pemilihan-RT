<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('peserta', $data);
			return $query;
		}

		public function cek_admin_masuk($data) {
			$query = $this->db->get_where('admin', $data);
			return $query;
		}

	}

?>
