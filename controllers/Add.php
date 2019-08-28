<?php

class Add extends CI_Controller
{
   function index()
   {
   	  $a=100;
   	  $b=200;
   	  $c=$a+$b;
   	  $data1['res']=$c;
      $this->load->view('addview',$data1);

   }

}

?>