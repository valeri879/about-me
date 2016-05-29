<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('Portfolio_Model', 'portfolio');
    }

    private function BuildPage( $tpl = false, $data = false )
    {
		if ( $tpl )
        {
            $this->load->view($tpl,$data);
        }else
        {
            $this->load->view('content',$data);
        }
    }

    public function index()
    {
        $data["portfolios"] = $this->portfolio->GetPortfolio();
        $this->BuildPage("index",$data);
    }
}
