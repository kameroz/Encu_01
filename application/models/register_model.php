<?php  
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
 }  
 ?>  