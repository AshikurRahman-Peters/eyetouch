<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 25-Apr-19
 * Time: 11:13 AM
 */

class District_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    /*==============
    /*GET ALL CATEGORY DATA FROM DATABASE
    ================================================*/
    public function get_all_district()
    {
        $query = $this->db->order_by('district_id', 'desc')->where('district_status', 1)->get('tbl_district');
        $res = $query->result();
        return $res;
    }


    /*==============
    /*SAVE DATA IN DATABASE FROM CATEGORY CONTROLLER'S SAVE_CONTROLLER METHOD
    =====================================================================*/
    public function save_district()
    {
        $data['district_name'] = $this->input->post('district_name');
        $data['charge'] = $this->input->post('charge');
        $data['district_created_by'] = $this->session->userdata('user_name');
        $data['district_created_date'] = date('d-m-Y H:i:s');
        $data['district_status'] = 1;
        // if($file_name != null){
        //     $data['district_logo'] = $file_name;
        // }

       
        $result = $this->db->insert('tbl_district', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }


    /*==============
    /*GET CATEGORY DATA FROM DATABASE BY ID FOR EDIT FORM
    ================================================*/
    public function get_district_by_id($id)
    {
        $query = $this->db->where('district_id', $id)->get('tbl_district');
        if($query->num_rows() == 1){
            return $query->result();
        }
        else{
            return false;
        }
    }



    /*============================
    /*UPDATE DATA IN DATABASE FROM CATEGORY CONTROLLER'S UPDATE_CATEGORY METHOD
    ======================================================================*/
    public function update_district($id)
    {
        $data['district_name'] = $this->input->post('district_name');
        $data['charge'] = $this->input->post('charge');

        //$data['district_update_by'] = $this->session->userdata('user_username');
       // $data['district_update_date'] = date('d-m-Y H:i:s');
        //$data['district_status'] = 1;

        $this->db->where('district_id', $id)->update('tbl_district', $data);
        if($this->db->affected_rows() == 1){
            return true;
        }
        else{
            return false;
        }
    }


    /*===========================
    /*SOFT DELETE CATEGORY DATA WITHOUT DATABASE
    ==============================================*/
    public function soft_delete_admin($id)
    {
        $this->db
            ->set('district_status', 2)
            ->where('district_id', $id)
            ->update('tbl_district');
        if($this->db->affected_rows() == 1){
            return true;
        }
        else{
            return false;
        }

    }
}