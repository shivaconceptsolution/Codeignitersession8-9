<?php

class Calc extends CI_Controller
{
   function index()
   {
   	$this->load->view('calcview');
   }
   function calclogic()
   {
   	 $a = $this->input->post('txtnum1');
   	 $b = $this->input->post('txtnum2');
   	 if($this->input->post('btnadd')!=null)
   	 {
   	 	$c=$a+$b;
   	 }
   	 else if($this->input->post('btnsub')!=null)
   	 {
   	 	$c=$a-$b;
   	 }
   	  else if($this->input->post('btnmulti')!=null)
   	 {
   	 	$c=$a*$b;
   	 }
   	  else if($this->input->post('btndiv')!=null)
   	 {
   	 	$c=$a/$b;
   	 }
   	 $data['a1']=$a;
   	 $data['b1']=$b;
   	 $data['c1']=$c;
   	 $this->load->view('calcview',$data);

   }

}


?>