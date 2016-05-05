<?php  
<<<<<<< HEAD
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
   
=======
 class register extends CI_Controller {  
      public function __construct(){  
           parent::__construct();  
           $this->load->model("register_model");  
      }       
      public function index()  
      {  
      $this->insert();       
      }  

      
      public function insert()  
      {  
           $this->form_validation->set_rules('name', 'Name', 'required');  
           $this->form_validation->set_rules('email', 'Email', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required|numeric');  
           $this->form_validation->set_rules('city','City','required');  
           if ($this->form_validation->run())  
           {       
           $register=$this->register_model->insertdata($_POST);  
           if($register){  
                     echo "<script>alert('added Sucessfully')</script>";  
                }  
           }  
           $data['title']="Registration";  
        $this->load->view('register_view',$data);       
      }  
 }  
 ?>  
>>>>>>> origin/master
