<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Featured_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    /*==============
    /*GET ALL FEATURED DATA FROM DATABASE
    ================================================*/
    public function get_all_featured()
    {
        $query = $this->db->order_by('id', 'desc')->where('status', 1)->get('tbl_featured');
        $res = $query->result();
        return $res;
    }
    
    public function get_old_image_name($id)
    {
        $query = $this->db->query("Select image from tbl_featured where id = '$id'")->row();
        if($query){
            return $query;
        }
        else{
            return false;
        }
    }


    /*==============
    /*GET ALL FEATURED DATA FROM DATABASE
    ================================================*/
    public function get_featured_by_type($type, $limit)
    {
        $query = $this->db->order_by('id', 'desc')->where('type', $type)->where('status', 1)->limit($limit)->get('tbl_featured');
        $res = $query->result();
        return $res;
    }


    /*===========================
    /*SAVE DATA IN DATABASE FROM FEATURED CONTROLLER'S save_featured METHOD
    =====================================================================*/
    public function save_featured($file_name = null)
    {
        $data['title'] = $this->input->post('title');
        //$data['description'] = $this->input->post('description');
        $data['type'] = $this->input->post('type');
        $data['created_by'] = $this->session->userdata('user_username');
        $data['created_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;
        if($file_name != null){
            $data['image'] = $file_name;
        }
        $result = $this->db->insert('tbl_featured', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }


    /*==============================
    /*GET COMMONPART DATA BY ID
    =======================================*/
    public function edit_featured($id)
    {
        $query = $this->db->where('id', $id)->get('tbl_featured');
        if($query->num_rows() == 1){
            return $query->result();
        }
        else{
            return false;
        }
    }


    /*============================
    /*UPDATE DATA IN DATABASE FROM FEATURED CONTROLLER'S update_featured METHOD
    ======================================================================*/
    public function update_featured($file_name, $id)
    {
        $data['title'] = $this->input->post('title');
        //$data['description'] = $this->input->post('description');
        $data['update_by'] = $this->session->userdata('user_username');
        $data['update_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;
        $data['image'] = $file_name;


        $result = $this->db->where('id', $id)->update('tbl_featured', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }

    /*============================
    /*UPDATE DATA IN DATABASE FROM FEATURED CONTROLLER'S update_featured METHOD
    ======================================================================*/
    public function update_featured_without_image($id)
    {
        $data['title'] = $this->input->post('title');
        //$data['description'] = $this->input->post('description');
        $data['update_by'] = $this->session->userdata('user_username');
        $data['update_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;
        $result = $this->db->where('id', $id)->update('tbl_featured', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }


    /*========================
    /*SOFT DELETE common DATA WITHOUT DATABASE
    ==================================================*/
    public function featured_soft_delete($id)
    {
        $res = $this->db
            ->set('update_by', $this->session->userdata('user_username'))
            ->set('update_date', date('Y-m-d H:i:s'))
            ->set('status','2')
            ->where('id', $id)
            ->update("tbl_featured");
        if($this->db->affected_rows()==1)
            return true;
        return false;
    }




}