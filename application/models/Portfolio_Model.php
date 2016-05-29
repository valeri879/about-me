<?php
/**
 * Created by PhpStorm.
 * User: valer
 * Date: 5/27/2016
 * Time: 3:46 PM
 */

class Portfolio_Model extends CI_Model
{
    
    public function GetPortfolio()
    {
        return $this->db->get('portfolio')->result_array();
    }
    
    
    public function insertPortfolio()
    {
        
    }
    
}
    