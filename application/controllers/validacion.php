<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validacion extends CI_Controller 
{

	public function __construct()
	{
		
		parent::__construct();
	}




	public function index()
	{  $this->load->helper('url'); 

		if (isset($_POST['contraseña'])) 
		{
			$this->load->model('validar_Model');
			$username=$this->input->post('ID');
			$password=$this->input->post('contraseña');

			
			if($this->validar_Model->login($username,$password))
			{
				redirect('tutorialnolog');
			}else
			{
				redirect('Validacion#bad_validation');
			}
		}
		
		$this->load->view('consultoria');
		$this->load->view('login.html');
	}

}