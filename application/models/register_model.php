<?php  
<<<<<<< HEAD
defined('BASEPATH') OR exit('No direct script access allowed');
class Register_model extends CI_Model 
  {
    function __construct()
    {
      parent::__construct();
      $this->load->database();

    }
    function guardarusuario($dato)
    { $this->load->helper('url'); 
      //metodo para insertar
      $this->db->insert('usuario',array(
        'nombre'=>$dato['Nombre'],
        'email'=>$dato['correo_electronico'],
        'contraseña'=>$dato['Contraseña']
        
        
      )
    
      );
    } 
=======
 class register_model extends CI_Model {  
      function insertdata($options = array()){  
           if(isset($options['name']))  
                $this->db->set('name',strip_tags($options['name']));  
                if(isset($options['email']))  
                $this->db->set('email',strip_tags($options['email']));  
           if(isset($options['password']))  
                $this->db->set('password',strip_tags($options['password']));  
           if(isset($options['city']))  
                $this->db->set('city',($options['city']));  
                $this->db->insert("clist");  
           return $this->db->insert_id();  
      }  
>>>>>>> origin/master
 }  
 ?>  