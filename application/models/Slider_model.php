<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 25-Apr-19
 * Time: 1:09 PM
 */

class Slider_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    /*==============
    /*GET ALL slider DATA FROM DATABASE
    ================================================*/
    public function get_all_slider()
    {
        $query = $this->db->order_by('id', 'desc')->where('status', 1)->get('tbl_slider');
        $res = $query->result();
        return $res;
    }



    /*==============
    /*SAVE DATA IN DATABASE FROM SLIDER CONTROLLER'S SAVE_SLIDER METHOD
    =====================================================================*/
    public function save_slider($file_name = null)
    {
        $data['title'] = $this->input->post('title');
        // $data['slogan'] = $this->input->post('slogan');
        $data['created_by'] = $this->session->userdata('user_username');
        $data['created_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;
        if($file_name != null){
            $data['image'] = $file_name;
        }
        $result = $this->db->insert('tbl_slider', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }



    /*==============================
    /*GET SLIDER DATA BY ID
    =======================================*/
    public function edit_slider($id)
    {
        $query = $this->db->where('id', $id)->get('tbl_slider');
        if($query->num_rows() == 1){
            return $query->result();
        }
        else{
            return false;
        }
    }


    /*============================
    /*UPDATE DATA IN DATABASE FROM SLIDER CONTROLLER'S UPDATE_SLIDER METHOD
    ======================================================================*/
    public function update_slider($file_name, $id)
    {
        $data['title'] = $this->input->post('title');
        // $data['slogan'] = $this->input->post('slogan');
        $data['update_by'] = $this->session->userdata('user_username');
        $data['update_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;
        $data['image'] = $file_name;

        $result = $this->db->where('id', $id)->update('tbl_slider', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }


    /*============================
    /*UPDATE DATA IN DATABASE FROM SLIDER CONTROLLER'S UPDATE_SLIDER METHOD
    ======================================================================*/
    public function update_slider_without_image($id)
    {
        $data['title'] = $this->input->post('title');
        // $data['slogan'] = $this->input->post('slogan');
        $data['update_by'] = $this->session->userdata('user_username');
        $data['update_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;
        $result = $this->db->where('id', $id)->update('tbl_slider', $data);
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
    public function soft_delete_slider($id)
    {
        $this->db
            ->set('update_by', 'liton')
            ->set('update_date', date('Y-m-d H:i:s'))
            ->set('status', 2)
            ->where('id', $id)
            ->update('tbl_slider');
        if($this->db->affected_rows() == 1){
            return true;
        }
        else{
            return false;
        }
    }



}