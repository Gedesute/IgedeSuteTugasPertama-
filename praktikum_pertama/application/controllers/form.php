<?php 
 
class Form extends CI_Controller{
 
	function __construct(){ // untuk memasukan parameter dan tinggal mengakses variabelnya
		parent::__construct();
		$this->load->library('form_validation');
	}
 
	function index(){ // fungsinya untuk memanggil pertama kali
		$this->load->view('v_form');
	}
 
	function aksi(){ // di sini untuk tulisan pada tombol aksi
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');
 
		if($this->form_validation->run() != false){ // untuk memanggil library
			echo "Form validation oke";
		}else{
			$this->load->view('v_form');
		}
	}
}