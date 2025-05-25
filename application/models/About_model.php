<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 28-Apr-19
 * Time: 2:28 PM
 */

class About_model extends CI_Model
{


    /*==============
    /*GET ALL COMONPART DATA FROM DATABASE
    ================================================*/
    public function get_all_about()
    {
        $query = $this->db->order_by('about_id', 'desc')->where('about_status', 1)->get('tbl_about');
        $res = $query->result();
        return $res;
    }

    /*==============
    /*GET COMMONPART DATA BY TYPE FROM DATABASE
    ================================================*/
    public function get_about_by_type($type)
    {
        $query = $this->db->order_by('about_id', 'desc')->where('about_type', $type)->where('about_status', 1)->get('tbl_about');
        $res = $query->result();
        return $res;
    }



    /*==============
    /*SAVE DATA IN DATABASE FROM COMMONPART CONTROLLER'S COMON_SLIDER METHOD
    =====================================================================*/
    public function save_about()
    {
        $data['about_title'] = $this->input->post('about_title');
        $data['about_description'] = $this->input->post('about_description');
        //$data['about_type'] = $this->input->post('about_type');
        $data['about_created_by'] = $this->session->userdata('user_username');
        $data['about_status'] = 1;
        // if($file_name != null){
        //     $data['about_image'] = $file_name;
        // }
        $result = $this->db->insert('tbl_about', $data);
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
    public function edit_about($id)
    {
        $query = $this->db->where('about_id', $id)->get('tbl_about');
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
    public function update_about($id)
    {
        $data['about_title'] = $this->input->post('about_title');
        $data['about_description'] = $this->input->post('about_description');
        //$data['about_update_by'] = $this->session->userdata('user_username');
        $data['about_update_date'] = date('d-m-Y H:i:s');
        $data['about_status'] = 1;
        //$data['about_image'] = $file_name;

        $result = $this->db->where('about_id', $id)->update('tbl_about', $data);
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
    public function update_about_without_image($id)
    {
        $data['about_title'] = $this->input->post('about_title');
        $data['about_description'] = $this->input->post('about_description');
        //$data['about_update_by'] = $this->session->userdata('user_username');
        //$data['about_update_date'] = date('d-m-Y H:i:s');
        $data['about_status'] = 1;
        $result = $this->db->where('about_id', $id)->update('tbl_about', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }



    /*========================
    /*SOFT DELETE aboutmon DATA WITHOUT DATABASE
    ==================================================*/
    public function aboutmon_soft_delete($id)
    {
        $res = $this->db
            ->set('about_update_by', $this->session->userdata('user_username'))
            ->set('about_update_date', date('Y-m-d H:i:s'))
            ->set('about_status','2')
            ->where('about_id', $id)
            ->update("tbl_about");
        if($this->db->affected_rows()==1)
            return true;
        return false;
    }


}