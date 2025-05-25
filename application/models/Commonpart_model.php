<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 28-Apr-19
 * Time: 2:28 PM
 */

class Commonpart_model extends CI_Model
{


    /*==============
    /*GET ALL COMONPART DATA FROM DATABASE
    ================================================*/
    public function get_all_commonpart()
    {
        $query = $this->db->order_by('com_id', 'desc')->where('com_status', 1)->get('common_part');
        $res = $query->result();
        return $res;
    }

    /*==============
    /*GET COMMONPART DATA BY TYPE FROM DATABASE
    ================================================*/
    public function get_commonpart_by_type($type)
    {
        $query = $this->db->order_by('com_id', 'desc')->where('com_type', $type)->where('com_status', 1)->get('common_part');
        $res = $query->result();
        return $res;
    }



    /*==============
    /*SAVE DATA IN DATABASE FROM COMMONPART CONTROLLER'S COMON_SLIDER METHOD
    =====================================================================*/
    public function save_commonpart()
    {
        $data['com_title'] = $this->input->post('com_title');
        $data['com_description'] = $this->input->post('com_description');
        $data['com_type'] = $this->input->post('com_type');
        $data['com_created_by'] = $this->session->userdata('user_username');
        $data['com_created_date'] = date('d-m-Y H:i:s');
        $data['com_status'] = 1;
        // if($file_name != null){
        //     $data['com_image'] = $file_name;
        // }
        $result = $this->db->insert('common_part', $data);
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
    public function edit_commonpart($id)
    {
        $query = $this->db->where('com_id', $id)->get('common_part');
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
    public function update_commonpart($id)
    {

    
        $data['com_title'] = $this->input->post('com_title');
        $data['com_description'] = $this->input->post('com_description');
        $data['com_type'] = $this->input->post('com_type');
        $data['com_update_by'] = $this->session->userdata('user_username');
        $data['com_update_date'] = date('d-m-Y H:i:s');
        $data['com_status'] = 1;
        //$data['com_image'] = $file_name;

        $result = $this->db->where('com_id', $id)->update('common_part', $data);
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
    public function update_commonpart_without_image($id)
    {
        $data['com_title'] = $this->input->post('com_title');
        $data['com_description'] = $this->input->post('com_description');
        $data['com_type'] = $this->input->post('com_type');
        $data['com_update_by'] = $this->session->userdata('user_username');
        $data['com_update_date'] = date('d-m-Y H:i:s');
        $data['com_status'] = 1;
        $result = $this->db->where('com_id', $id)->update('common_part', $data);
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
    public function common_soft_delete($id)
    {
        $res = $this->db
            ->set('com_update_by', $this->session->userdata('user_username'))
            ->set('com_update_date', date('Y-m-d H:i:s'))
            ->set('com_status','2')
            ->where('com_id', $id)
            ->update("common_part");
        if($this->db->affected_rows()==1)
            return true;
        return false;
    }


}