<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ngoding extends CI_Controller {
	
	function index(){ // untuk memanggil library yang sudah di buat
		$this->load->library('malasngoding'); // fungsi untuk manggil
		$this->malasngoding->nama_saya(); // di sini untuk menggunakan fungsi/method yang di buat di library
                echo "<br/>";
                $this->malasngoding->nama_kamu("Andi");
	}
 
}