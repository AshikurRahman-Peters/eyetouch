<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 02-May-19
 * Time: 11:57 AM
 */

class Login_model extends CI_Model
{

    /*=========================
    /*CHECK LOGIN USER DATA
    ======================================*/
    public function login_data_check()
    {
        $data['username'] = $this->input->post('username');
        $data['pass'] = md5($this->input->post('pass'));

        $query = $this->db->get_where('tbl_admin', $data);
        if($query->num_rows() == 1){
            $res = $query->row();
            $this->session->set_userdata('user_id', $res->id);
            $this->session->set_userdata('user_name', $res->name);
            $this->session->set_userdata('user_email', $res->email);
            $this->session->set_userdata('user_username', $res->username);
            return true;
        }
        else{
            return false;
        }

    }


    /*=======================
    /*CHECK THE USER LOGED IN
    ========================================================*/
    public function is_user_loged_in()
    {
        return $this->session->userdata('user_id') == false;
    }


}