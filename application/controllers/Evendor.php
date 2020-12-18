<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evendor extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$url = "https://evendor-api.muhajir.my.id/api/product";
		
		$this->load->view('Home');
	}

	

	public function login()
	{
		$this->load->view('Login');
	}

	// public function proses_login($array){
	// 	if(!empty($array)){
	// 		$data = 
    //     }else{
    //     }
     
    //     $this->response($data, REST_Controller::HTTP_OK);
	// }

	public function cart()
	{
		$this->load->view('Cart');
	}
	
}
