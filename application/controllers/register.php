<?php  
  defined('BASEPATH') or exit('No direct script access allowed');

 class register extends CI_Controller 
 {  
     

     
    function __construct()
    {
      parent::__construct();
      $this->load->helper('form');
      //this->load->helper('libreria_helper');
    }
    function index()
    {
      echo "Hola";
    }

    function insertardatos()
    {
     if (isset($_POST['Password'])) {
    
       $this->load->model('register_model');
      $dato = array(
        'Nombre' =>$this->input->post ('nombre'),
        'correo_electronico' =>$this->input->post ('email'),
        'Contraseña' =>$this->input->post ('Password')
      
      
      );
        $this->register_model->guardarusuario($dato);
     }
     

        $this->load->view('consultoria');
        $this->load->view('register_view'); 

    }


 }  
   