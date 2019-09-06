<?php
class Theme extends CI_Controller
{
    function index()
    {
       $this->load->view('theme/header');
       $this->load->view('theme/home');
       $this->load->view('theme/footer');
    } 
     function features()
    {
       $this->load->view('theme/header');
       $this->load->view('theme/about');
       $this->load->view('theme/footer');
    } 
    function about()
    {
       $this->load->view('theme/header');
       $this->load->view('theme/about');
       $this->load->view('theme/footer');
    } 
    function service()
    {
       $this->load->view('header');
       $this->load->view('service');
       $this->load->view('footer');
    } 
    function gallery()
    {
        $this->load->view('header');
       $this->load->view('gallery');
       $this->load->view('footer');
    } 
    function contact()
    {
       $this->load->view('header');
       $this->load->view('contact');
       $this->load->view('footer');
    } 




}





?>