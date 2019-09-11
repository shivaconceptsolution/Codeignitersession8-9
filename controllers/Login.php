<?php
class Login extends CI_Controller
{

    function index()
    {

        $data= array('a'=>$this->input->cookie('cuid'),'b'=>$this->input->cookie('cpwd'));

    	$this->load->view('loginview',$data);
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
            if($this->input->post('chk1')!=null)
            {

                
            $this->input->set_cookie('cuid',$user,3600);
            $this->input->set_cookie('cpwd',$pass,3600);
            }
    		

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