<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_model extends CI_Model
{

    /*==============
    /*GET ALL slider DATA FROM DATABASE
    ================================================*/
    public function get_all_brand()
    {
        $query = $this->db->order_by('brand_id', 'desc')->where('status', 1)->get('tbl_brand');
        $res = $query->result();
        return $res;
    }


    /*==============
    /*SAVE DATA IN DATABASE FROM BRAND CONTROLLER'S save_brand METHOD
    =====================================================================*/
    public function save_brand($file_name = null)
    {
        $data['title'] = $this->input->post('title');
        $data['created_by'] = $this->session->userdata('user_username');
        $data['created_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;
        if($file_name != null){
            $data['image'] = $file_name;
        }
        $result = $this->db->insert('tbl_brand', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }


    /*==============================
    /*GET BRAND DATA BY ID
    =======================================*/
    public function edit_brand($id)
    {
        $query = $this->db->where('brand_id', $id)->get('tbl_brand');
        if($query->num_rows() == 1){
            return $query->result();
        }
        else{
            return false;
        }
    }



    /*============================
    /*UPDATE DATA IN DATABASE FROM BRAND CONTROLLER'S update_brand METHOD
    ======================================================================*/
    public function update_brand($file_name, $id)
    {
        $data['title'] = $this->input->post('title');
        $data['created_by'] = $this->session->userdata('user_username');
        $data['created_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;
        if($file_name != null){
            $data['image'] = $file_name;
        }
        $result = $this->db->where('brand_id', $id)->update('tbl_brand', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }


    /*============================
    /*UPDATE DATA IN DATABASE FROM BRAND CONTROLLER'S update_brand METHOD
    ======================================================================*/
    public function update_brand_without_image($id)
    {
        $data['title'] = $this->input->post('title');
        $data['created_by'] = $this->session->userdata('user_username');
        $data['created_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;
        $result = $this->db->where('brand_id', $id)->update('tbl_brand', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }


    /*===========================
    /*SOFT DELETE SLIDER DATA WITHOUT DATABASE
    ==============================================*/
    public function soft_delete_brand($id)
    {
        $this->db
            ->set('update_by', $this->session->userdata('user_username'))
            ->set('update_date', date('Y-m-d H:i:s'))
            ->set('status', 2)
            ->where('brand_id', $id)
            ->update('tbl_brand');
        if($this->db->affected_rows() == 1){
            return true;
        }
        else{
            return false;
        }
    }


}