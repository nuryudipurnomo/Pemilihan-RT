<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sispem extends CI_Controller {
	function __construct()
	{
	    parent::__construct();
	    if ($this->session->userdata('username')=="") {
			redirect('pemilihan/login_admin');
		}
	    $this->load->library('graph');
	    $this->load->helper('url', 'form','file', 'date', 'dompdf');
		$this->load->model('msispem');
	}

	public function index()
	{
		//
	}

	// kelola peserta
	public function panel_peserta()
	{
		$data = $this->msispem->getpeserta();
		$this->load->view('admin/content_peserta', array('data'=> $data));
	}

	public function tambah_peserta()
	{
		$data['isi']	= $this->load->view('admin/ctambah_peserta', array(), TRUE);
		$data['title']	= "Panel Admin Kelola Calon";
		$this->load->view('admin/index', $data);
	}

	//tambah peserta
	public function t_pserta()
	{
		$data = $this->msispem->addpeserta();
		if($data>=1){
			$this->session->set_flashdata('pesan', 'tambah data berhasil');
			redirect ('sispem/panel_peserta');
		}else{
			$this->session->set_flashdata('pesan', 'gagal');
			redirect ('sispem/panel_peserta');
		}
	}

	//ambil data peserta untuk diupdate
	public function updatpeserta($id_peserta)
	{
		$where = array('id_peserta'=>$id_peserta);
		$hsl = $this->msispem->ubpeserta('peserta',$where);
		$data = array(
				"id_peserta" => $hsl[0]['id_peserta'],
				"no_id" => $hsl[0]['no_id'],
				"username" => $hsl[0]['username'],
				"kelamin" => $hsl[0]['kelamin'],
				"tempat_lahir" => $hsl[0]['tempat_lahir'],
				"tgl_lahir" => $hsl[0]['tgl_lahir'],
			);
		$res['isi'] = $this->load->view('admin/edit_p',$data, true);
		$this->load->view('admin/index', $res);

	}

	// update peserta
	public function do_updatpeserta()
	{
		$id_peserta		= $_POST['id_peserta'];
		$no_id			= $_POST['no_id'];
		$username			= $_POST['username'];
		$kelamin		= $_POST['kelamin'];
		$tempat_lahir	= $_POST['tempat_lahir'];
		$tgl_lahir		= $_POST['tgl_lahir'];
		$data=array(
			'no_id'=> $no_id,
			'username' => $username,
			'kelamin' => $kelamin,
			'tempat_lahir'=> $tempat_lahir,
			'tgl_lahir' => $tgl_lahir
			);
		$where = array('id_peserta'=> $id_peserta);
		$result = $this->msispem->do_ubdatepeserta('peserta', $data, $where);
		if($result>=1){
			$this->session->set_flashdata('pesan', 'Rubah data berhasil');
			redirect('sispem/panel_peserta');
		}else{
			$this->session->set_flashdata('pesan', 'Rubah data gagal');
			redirect('sispem/panel_peserta');
		}
	}

	//hapus peserta
	public function hapeserta($id_peserta)
	{
		$where = array('id_peserta'=> $id_peserta);
		$res = $this->msispem->delpeserta('peserta', $where);
		if ($res >= 1)
		{
			$this->session->set_flashdata('pesan', 'Hapus data berhasil');
			redirect('sispem/panel_peserta');
		}else{
			$this->session->set_flashdata('pesan', 'Hapus data gagal');
			redirect('sispem/panel_peserta');
		}
	}


	// kelola calon
	public function panel_calon()
	{
		$data['isi']	= $this->icalon();
		$data['title']	= "Panel Admin Kelola Calon";
		$this->load->view('admin/index', $data);
	}

	public function icalon()
	{
		$data	= $this->msispem->getcalon();
		return  $this->load->view('admin/content_calon', array('data' => $data), TRUE);
	}

	public function tambah_calon()
	{
		$data['isi']	= $this->load->view('admin/ctambah_calon', array(), TRUE);
		$data['title']	= "Panel Admin Kelola Calon";
		$this->load->view('admin/index', $data);
	}

	public function tcalon()
	{
		$data = $this->msispem->addcalon();
		if($data>=1){
			$this->session->set_flashdata('pesan', 'tambah data berhasil');
			redirect ('sispem/panel_calon');
		}else{
			$this->session->set_flashdata('pesan', 'gagal');
			redirect ('sispem/panel_calon');
		}
	}

	public function updatcalon($id_calon)
	{
		$where = array('id_calon'=>$id_calon);
		$hsl = $this->msispem->ubcalon('calon',$where);
		$data = array(
				"id_calon" => $hsl[0]['id_calon'],
				"nama_calon" => $hsl[0]['nama_calon'],
				"kelamin" => $hsl[0]['kelamin'],
				"tempat_lahir" => $hsl[0]['tempat_lahir'],
				"tgl_lahir" => $hsl[0]['tgl_lahir'],
			);
		$res['isi'] = $this->load->view('admin/edit_c',$data, true);
		$this->load->view('admin/index', $res);
	}

	public function do_updatcalon()
	{
		$id_calon		= $_POST['id_calon'];
		$nama_calon			= $_POST['nama_calon'];
		$kelamin		= $_POST['kelamin'];
		$tempat_lahir	= $_POST['tempat_lahir'];
		$tgl_lahir		= $_POST['tgl_lahir'];
		$data=array(
			'nama_calon' => $nama_calon,
			'kelamin' => $kelamin,
			'tempat_lahir'=> $tempat_lahir,
			'tgl_lahir' => $tgl_lahir
			);
		$where = array('id_calon'=> $id_calon);
		$result = $this->msispem->do_ubdatecalon('calon', $data, $where);
		if($result>=1){
			$this->session->set_flashdata('pesan', 'Rubah data berhasil');
			redirect('sispem/panel_calon');
		}else{
			$this->session->set_flashdata('pesan', 'Rubah data gagal');
			redirect('sispem/panel_calon');
		}
	}

	public function hapcalon($id_calon)
	{
		$where = array('id_calon'=> $id_calon);
		$res = $this->msispem->delcalon('calon', $where);
		if ($res >= 1)
		{
			$this->session->set_flashdata('pesan', 'Hapus data berhasil');
			redirect('sispem/panel_calon');
		}else{
			$this->session->set_flashdata('pesan', 'Hapus data gagal');
			redirect('sispem/panel_calon');
		}
	}

	// kelola laporan
	public function panel_laporan()
	{
		$data['isi']	= $this->ilap();
		$data['title']	= 'Panel Laporan';
		return $this->load->view('admin/index', $data);
	}

		public function ilap()
	{
		$data	= $this->msispem->getpeserta();
		$data2	= $this->msispem->jml_hdir();
		return  $this->load->view('admin/content_laporan', array(
			'data' => $data,
			'data2' => $data2
			), TRUE);
	}

	public function print_hadir()
	{
		$this->load->helper('dompdf');
		$data	= $this->msispem->getpeserta();
		$data2	= $this->msispem->jml_hdir();
		$html = $this->load->view('admin/output_hadir', array(
			'data' => $data,
			'data2' => $data2
			), TRUE);
		$filename = 'Laporan Hadir Peserta Pemilihan Ketua RT di Kelurahan Tehal Alur';
        $paper = 'F4';
        $orientation = 'landscape';
        pdf_create($html, $filename, $paper, $orientation);
	}

	public function print_hasil()
	{
		$this->load->helper('dompdf');
		$data = $this->msispem->getcalon();
		$data2 = $this->msispem->sudah();
		$data3 = $this->msispem->jml_hdir();
		$html = $this->load->view('admin/output_hasil', array(
			'data' => $data,
			'data2' => $data2,
			'data3' => $data3,
			), TRUE);
		$filename = 'Laporan Hasil Pemilihan Ketua RT di Kelurahan Tehal Alur';
        $paper = 'F4';
        $orientation = 'landscape';
        pdf_create($html, $filename, $paper, $orientation);
	}

	public function print_hdr1()
	{
		$data = $this->msispem->getcalon();
		$data2 = $this->msispem->sudah();
		$data3 = $this->msispem->jml_hdir();
		$this->load->view('admin/output_hadir', array(
			'data' => $data,
			'data2' => $data2,
			'data3' => $data3,
			));
	}

	public function panel_laporan_hasil()
	{
		$data['isi']	= $this->ilap_suara();
		$data['title']	= 'Panel Laporan';
		return $this->load->view('admin/index', $data);
	}

	public function ilap_suara()
	{
		$data1	= $this->msispem->getcalon();
		$data2['soal'] = $this->msispem->tampil_soal();
		$data2['title'] = "Pemilu Online";
		//$data['judul'] = "Pemilu Online Pada rt003/rw012 Tegal Alur";
		foreach($data2['soal']->result() as $d)
		{
			$id_soal = $d->id;
			$data['soal'] = $d->soal;
		}
		$data2['jawaban'] = $this->msispem->tampil_jawaban($id_soal);
		foreach($data2['jawaban']->result() as $j)
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
			return  $this->load->view('admin/content_laporan_hasil', array(
				'data1' => $data1,
				'data2' => $data2,
				), TRUE);
	}




}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */