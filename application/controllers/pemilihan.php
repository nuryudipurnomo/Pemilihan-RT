<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pemilihan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'form', 'text'));
		$this->load->model('msispem');
		$this->load->library('graph');
	}

	public function index()
	{
		$data['judul'] = 'Sistem Pemilihan Ketua RT';
		$data['title'] = 'SPKRT';
		$this->load->view('peserta/index', $data);
	}
	
	public function login()
	{
		$data['judul'] = 'Sistem Pemilihan Ketua RT';
		$data['title'] = 'SPKRT';
		$this->load->view('peserta/login_form', $data);
	}

	public function login_admin()
	{
		$data['judul'] = 'Admin Login Form';
		$data['title'] = 'Admin Login Form';
		$this->load->view('admin/login_form', $data);
	}

	public function suara()
	{
		$data['judul'] = 'Perolehan Suara Masing-masing Calon';
		$data['username'] = $this->session->userdata('username');
		$data['status'] = $this->session->userdata('status');
		$data['judul'] = 'Perolehan Suara Masing-masing Calon';
		//$data['nama'] = $this->session->userdata('username');
		$data['soal'] = $this->msispem->tampil_soal();
		$data['title'] = "Pemilu Online";
		//$data['judul'] = "Pemilu Online Pada rt003/rw012 Tegal Alur";
		foreach($data['soal']->result() as $d)
		{
			$id_soal = $d->id;
			$data['soal'] = $d->soal;
		}
		$data['jawaban'] = $this->msispem->tampil_jawaban($id_soal);
		foreach($data['jawaban']->result() as $j)
		{
			$jwb[] = $j->nama_calon;
			$jum[] = $j->suara;
		}
			$this->graph->set_data( $jum );
			$this->graph->set_data( $jum );
			$this->graph->title("Presentase Hasil Pemilihan",'{font-size: 16px; font-family:Tahoma; color: #800000}');
			$this->graph->bar_glass( 55, '#FF9900', '#C31812', 'Grafik Perbandingan Polling', 11  );
			$this->graph->line_hollow( 3, 5, '#79B900', 'Grafik Polling', 11 );
			$this->graph->set_x_labels( $jwb );
			$this->graph->set_tool_tip( '#x_label# : #val#');
			$this->graph->set_x_label_style( 10, '0×000000', 0 );
			$this->graph->set_y_max( 50 );
			$this->graph->width=800;
			$this->graph->height=400;
			$this->graph->y_label_steps( 10 );
			$this->graph->bg_colour='#ffffff';
			$this->graph->set_x_legend( 'Pemilu Online Pada rt003/rw012 Tegal Alur ', 10, '#736AFF' );
			$this->graph->set_y_legend( ' Hasil Statistik', 12, '#736AFF' );
			$this->graph->set_output_type("js");

		$this->load->view('hasil_suara', $data);
	}

}

/* End of file  */
/* Location: ./application/controllers/ */