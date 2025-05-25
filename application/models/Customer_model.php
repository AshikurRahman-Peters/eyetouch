<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 05-May-19
 * Time: 5:26 PM
 */

class Customer_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    /*===========================*/
    public function createAccount($table,$data){
        $result = $this->db->insert($table,$data);
        return $result;
    }




    /*==============
    /*SAVE DATA IN DATABASE FROM ADMIN CONTROLLER'S SAVE_ADMIN METHOD
    =====================================================================*/
   public function save_customer()
   {
       $pass = md5($this->input->post('password'));
       $data['password'] = $pass;

       $data['name'] = $this->input->post('name');
       $data['email'] = $this->input->post('email');
       $data['username'] = $this->input->post('username');

       $data['created_by'] = 'liton';
       $data['created_date'] = date('d-m-Y H:i:s');
       $data['status'] = 1;

       $result = $this->db->insert('tbl_customer', $data);
       if($result){
           return true;
       }
       else{
           return false;
       }

   }


}