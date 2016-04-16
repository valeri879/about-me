<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/index');
    }

    public function menu()
    {
        $this->load->view('admin/index');
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/menu');
        $this->load->view('admin/includes/footer');
    }

    public function about()
    {
        $this->load->view('admin/index');
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/about-me');
        $this->load->view('admin/includes/footer');
    }
}
