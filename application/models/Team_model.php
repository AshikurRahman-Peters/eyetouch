<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 06-May-19
 * Time: 11:10 AM
 */

class Team_model extends CI_Model
{

    /*==============
    /*GET ALL FEATURED DATA FROM DATABASE
    ================================================*/
    public function get_all_team()
    {
        $query = $this->db->order_by('id', 'ASC')->where('status', 1)->get('tbl_team');
        $res = $query->result();
        return $res;
    }

    /*===========================
    /*SAVE DATA IN DATABASE FROM FEATURED CONTROLLER'S save_featured METHOD
    =====================================================================*/
    public function save_team($file_name = null)
    {
        $data['name'] = $this->input->post('name');
        $data['description'] = $this->input->post('description');
        $data['created_by'] = $this->session->userdata('user_username');
        $data['created_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;
        if($file_name != null){
            $data['image'] = $file_name;
        }
        $result = $this->db->insert('tbl_team', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }

    /*==============================
    /*GET TEAM DATA BY ID
    =======================================*/
    public function edit_team($id)
    {
        $query = $this->db->where('id', $id)->get('tbl_team');
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
    public function update_team($file_name, $id)
    {
        $data['name'] = $this->input->post('name');
        $data['description'] = $this->input->post('description');
        $data['update_by'] = $this->session->userdata('user_username');
        $data['update_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;
        $data['image'] = $file_name;


        $result = $this->db->where('id', $id)->update('tbl_team', $data);
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
    public function update_team_without_image($id)
    {
        $data['name'] = $this->input->post('name');
        $data['description'] = $this->input->post('description');
        $data['update_by'] = $this->session->userdata('user_username');
        $data['update_date'] = date('d-m-Y H:i:s');
        $data['status'] = 1;
        $result = $this->db->where('id', $id)->update('tbl_team', $data);
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
    public function team_soft_delete($id)
    {
        $res = $this->db
            ->set('update_by', $this->session->userdata('user_username'))
            ->set('update_date', date('Y-m-d H:i:s'))
            ->set('status','2')
            ->where('id', $id)
            ->update("tbl_team");
        if($this->db->affected_rows()==1)
            return true;
        return false;
    }


}