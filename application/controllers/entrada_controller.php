<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrada_controller extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
	}


	public function index(){   

		$this->load->database();
		$this->load->view('consultoria');
		$this->load->view('entrada_consultoria.html');
		$p=$this->input->post('grabar');



		
	}

}