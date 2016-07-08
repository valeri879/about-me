<?php

/**
 * Created by PhpStorm.
 * User: valer
 * Date: 5/27/2016
 * Time: 3:46 PM
 */
class Admin_portfolio extends CI_Model
{

    public function GetPortfolio()
    {
        return $this->db->get('portfolio')->result_array();
    }


    public function insertPortfolio()
    {

    }

    public function Update( $data )
    {
        print_r($data);
        echo "Model";

//        $upd = array(
//            'logo' => "",
//            'name' => "",
//            'link' => "",
//            'desktop' => "",
//            'tablet' => "",
//            'mobile' => "",
//        );


    }

    public function Delete($id)
    {
        $this->db->where('id', $id);
        if ($this->db->delete('portfolio')) {
            return true;
        }

        return false;
    }

}
    