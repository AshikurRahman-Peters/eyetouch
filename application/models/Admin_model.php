<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 24-Apr-19
 * Time: 3:51 PM
 */

class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    /*==============
    /*GET ALL ADMIN DATA FROM DATABASE
    ================================================*/
    public function get_all_admin()
    {
        $query = $this->db->order_by('id', 'desc')->where('status', 1)->get('tbl_admin');
        $res = $query->result();
        return $res;
    }


    /*==============
    /*SAVE DATA IN DATABASE FROM ADMIN CONTROLLER'S SAVE_ADMIN METHOD
    =====================================================================*/
    public function save_admin()
    {
        $pass = md5($this->input->post('pass'));
        $data['pass'] = $pass;

        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['username'] = $this->input->post('username');

        $data['created_by'] = $this->session->userdata('user_username');
        $data['created_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;

        $result = $this->db->insert('tbl_admin', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }


    /*==============================
    /*GET ADMIN DATA BY ID
    =======================================*/
    public function edit_admin($id)
    {
        $query = $this->db->order_by('id', 'desc')->where('id', $id)->get('tbl_admin');
        if($query->num_rows() == 1){
            return $query->result();
        }
        else{
            return false;
        }
    }


    /*============================
    /*UPDATE DATA IN DATABASE FROM ADMIN CONTROLLER'S UPDATE_ADMIN METHOD
    ======================================================================*/
    public function update_admin($id)
    {
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['username'] = $this->input->post('username');

        $data['update_by'] = $this->session->userdata('user_username');
        $data['update_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;

        $this->db->where('id', $id)->update('tbl_admin', $data);
        if($this->db->affected_rows()){
            return true;
        }
        else{
            return false;
        }
    }


    /*===========================
    /*SOFT DELETE ADMIN DATA WITHOUT DATABASE
    ==============================================*/
    public function soft_delete_admin($id)
    {
        $this->db
            ->set('update_by', 'liton')
            ->set('update_date', date('Y-m-d H:i:s'))
            ->set('status', 2)
            ->where('id', $id)
            ->update('tbl_admin');
        if($this->db->affected_rows() == 1){
            return true;
        }
        else{
            return false;
        }

    }



}