<?php
class Student extends CI_Controller
{
    function __construct()
    {

          parent::__construct();
          if($this->session->userdata('uid')==null)
          {
            redirect('login/index');
          }

    }

	function index()
	{

		$this->load->view('stuview');
	}

    function stuadd()
    {

    	$this->load->model('Stumodel');
    	$r = $this->input->post('txtrno');
    	$s = $this->input->post('txtname');
    	$b = $this->input->post('txtbranch');
    	$f = $this->input->post('txtfees');
    	$res=$this->Stumodel->stuinsert($r,$s,$b,$f);
    	if($res==1)
    	$data['res']= "data inserted successfully";
    	else
    	$data['res']= "problem in insertion";
    	$this->load->view('stuview',$data);
    }
    function stushow()
    {
    	$this->load->model('Stumodel');
    	$data['res']=$this->Stumodel->showstudent();
    	$this->load->view('viewstudent',$data);
    }
    function findstudent($rno)
    {
    	$this->load->model('Stumodel');
    	$data['res']=$this->Stumodel->findstudent($rno);
    	$this->load->view('findstudent',$data);


    }
    function updateadd()
    {
    	$this->load->model('Stumodel');
    	$r = $this->input->post('txtrno');
    	$s = $this->input->post('txtname');
    	$b = $this->input->post('txtbranch');
    	$f = $this->input->post('txtfees');
    	$res=$this->Stumodel->stuupdate($r,$s,$b,$f);
    	if($res==1)
    	redirect('student/stushow');
    	
    	
    }
      function deletestudent($rno)
    {
    	$this->load->model('Stumodel');
    	$res=$this->Stumodel->deletestudent($rno);
    	if($res==1)
    	redirect('student/stushow');


    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('login/index');
    }

}


?>