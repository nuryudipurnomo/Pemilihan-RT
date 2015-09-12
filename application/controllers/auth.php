<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$data['judul'] = 'Sistem Pemilihan Ketua Pemilihan Ketua RT';
		$data['title'] = 'SPKRT';
		$this->load->view('peserta/index', $data);
	}

	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id_peserta'] = $sess->id_peserta;
				$sess_data['username'] = $sess->username;
				$sess_data['status'] = $sess->status;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('status')=='belum') {
				redirect('member/c_member');
			}
			elseif ($this->session->userdata('status')=='sudah') {
				redirect('pemilihan/suara', 'refresh');
			}
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

	public function cek_login_admin() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_admin_masuk($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id_calon'] = $sess->id_peserta;
				$sess_data['username'] = $sess->username;
				$this->session->set_userdata($sess_data);
				redirect ('sispem/panel_peserta');
			}
		}else{
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

	public function logout_admin() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('pemilihan/login_admin');
	}

}