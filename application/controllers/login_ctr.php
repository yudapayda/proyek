<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_ctr extends CI_Controller {

	function __construct(){
		parent::__construct();
		//load sessions adn connect to database
	}

	public function masuk(){
		$username= $_POST['username'];
		$password= $_POST['password'];
		$this->load->model('login_model','login'); //rename login_model jadi login
		$data=$this->login->login($username,$password); //manggil model dan fungsinya

		//direct ke halaman sesuai group usernya
		if($data == "admin"){
			redirect('admin_ctr/view_operator');
		}
		if($data == "operator"){
			redirect('lapangan_crud/view_lap');
		}
		if($data == "user"){
			redirect('page_ctr/index_user');	
		}
		else{
			redirect('page_ctr/index');
		}
		
	}

	public function logout(){
		$this->session->unset_userdata(array('username'=>""));
		$this->session->sess_destroy();
		redirect('page_ctr/index');
	}

	 
}