<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Download extends CI_Controller { //terdapat kelas untuk download
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}
 
	public function index(){		
		$this->load->view('v_download'); // untuk mengakses ke dalam file yang akan di download
	}
 
	public function lakukan_download(){				
		force_download('gambar/malasngoding.png',NULL); // untuk langsung mendownload file yang di letakan
	}	
 
}