<?php
class SI extends CI_Controller
{
    function index()
    {

    	  $this->load->view('siview');

    }
    function silogic()
    {
    	//$p= $_POST['txtp'];
    	//$r= $_POST['txtr'];
    	//$t =$_POST['txtt'];
    	$p=$this->input->post('txtp');
    	$r=$this->input->post('txtr');
    	$t=$this->input->post('txtt');
    	$si = ($p*$r*$t)/100;
    	$data['res']=$si;
    	$data['p1']=$p;
    	$data['r1']=$r;
    	$data['t1']=$t;

    	$this->load->view('siview',$data);
    }


}





?>