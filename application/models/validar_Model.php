<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Validar_model extends CI_Model
{
  public $variable;

  public function __construct()
  {

      parent::__construct();
      $this->load->database();


  }

  public function login($ID,$contraseña)
  {
      $this->db->where('nombre',$ID);
      $this->db->where('contraseña',$contraseña);
      $d = $this->db->get('usuario');
      if ($d->num_rows()>0)
       {
        
        return true;

      }else
      {
        return false;
      }


  }


}