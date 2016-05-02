<?php  
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
 }  
 ?>  