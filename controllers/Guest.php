<?php
class Guest extends CI_Controller
{
    function index()
    {
       $this->load->view('header');
       $this->load->view('home');
       $this->load->view('footer');
    } 
    function about()
    {
       $this->load->view('header');
       $this->load->view('about');
       $this->load->view('footer');
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