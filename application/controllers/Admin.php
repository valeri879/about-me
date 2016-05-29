<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portfolio_Model', 'portfolio');
    }

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

    public function portfolio()
    {
        $data["portfolios"] = $this->portfolio->GetPortfolio();
        $this->load->view('admin/index');
        $this->load->view('admin/includes/portfolio', $data);
    }


    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }
    }
}
