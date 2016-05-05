<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorialnolog extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
	}


	public function index(){   
		$this->load->view('consultoria.php');
		$this->load->view('barra.html');
		

		
	}

	public function etapa2(){   
		$this->load->view('consultoria.php');
		$this->load->view('barra2.html');
		

		
	}

}