<?php
class Login extends CI_Controller
{

    function index()
    {

    	$this->load->view('loginview');
    }

    function logincode()
    {
    	$user = $this->input->post('txtuser');
    	$pass = $this->input->post('txtpass');
    	$this->load->model('loginmodel');

    	$c=$this->loginmodel->login($user,$pass);
    	if($c>0)
    	{
    		$this->session->set_userdata('uid',$user);
    		redirect('student/index');
    	}
    	else
    	{
    		$data['res'] ="invalid userid and password";
    		$this->load->view('loginview',$data);
    	}
    
    }

}






?>