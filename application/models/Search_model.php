<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 05-May-19
 * Time: 11:46 AM
 */

class Search_model extends CI_Model
{

    /*==============
    /*GET ALL SEARCHING DATA FROM DATABASE
    ================================================*/
    public function get_all_searching_data($searching)
    {
        $this->db->like('pro_title', $searching);
        // $this->db->or_like('pro_description', $searching);
        $this->db->or_like('pro_price', $searching);
        $this->db->where('pro_status',1);
        $this->db->where('active',1);
        $query = $this->db->get('tbl_products');
        return $query->result();
    }


}