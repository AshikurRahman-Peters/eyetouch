<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 04-May-19
 * Time: 4:19 PM
 */

class Contact_model extends CI_Model
{

    /*==============================
    /*GET ALL CONTACT DATA
    =======================================*/
    public function get_all_contact()
    {
        $query = $this->db->get('tbl_contact');
        if($query->num_rows() == 1){
            return $query->result();
        }
        else{
            return false;
        }
    }


    /*==============================
    /*GET CONTACT DATA BY ID
    =======================================*/
    public function edit_contact($id)
    {
        $query = $this->db->where('id', $id)->get('tbl_contact');
        if($query->num_rows() == 1){
            return $query->result();
        }
        else{
            return false;
        }
    }


    /*============================
    /*UPDATE DATA IN DATABASE FROM CONTACT CONTROLLER'S UPDATE_CONTACT METHOD
    ======================================================================*/
    public function update_contact($id)
    {
        $data['address'] = $this->input->post('address');
        $data['phone'] = $this->input->post('phone');
        $data['phone2'] = $this->input->post('phone2');
        $data['email'] = $this->input->post('email');
        $data['email2'] = $this->input->post('email2');

        $data['update_by'] = $this->session->userdata('user_username');
        $data['update_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;

        $this->db->where('id', $id)->update('tbl_contact', $data);
        if($this->db->affected_rows()){
            return true;
        }
        else{
            return false;
        }
    }
    public function update_message($id)
    {
        $data['update_by'] = $this->session->userdata('user_username');
        $data['update_date'] = date('d-m-Y H:i:s');
        $data['message_status'] = 2;

        $this->db->where('message_id', $id)->update('tbl_message', $data);
        if($this->db->affected_rows()){
            return true;
        }
        else{
            return false;
        }
    }
    public function message_submit(){
        $data['message_name'] = $this->input->post('name');
        $data['message_mail'] = $this->input->post('email');
        $data['message_phone'] = $this->input->post('phone');
        $data['message_sub'] = $this->input->post('subject');
        $data['message'] = $this->input->post('message');
        $data['created_date'] = date('d-m-Y H:i:s');
        $data['message_status'] = 1;
     
        $result = $this->db->insert('tbl_message', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

}