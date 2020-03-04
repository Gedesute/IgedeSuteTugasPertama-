<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // syntax ini untuk mencegah akses langsung ke kontroller
 
class Belajar extends CI_Controller { // nama kelas harus sesuai dengan nama file dan harus diawali huruf besar
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');// untuk memnanggil model pada m_data
	}
 
	function user(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php',$data);//
	}
 
}

