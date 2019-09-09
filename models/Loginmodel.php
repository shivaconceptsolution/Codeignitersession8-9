<?php
class Loginmodel extends CI_Model
{
    function __construct()
    {
    	parent::__construct();
    	$this->load->database();
    }

    function login($u,$p)
    {
    	 $res=$this->db->get_where('admin',array('username'=>$u,'password'=>$p));
    	 return $res->num_rows();
    }

}





?>