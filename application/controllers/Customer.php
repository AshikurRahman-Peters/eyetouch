<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 05-May-19
 * Time: 5:27 PM
 */

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }



    /*=========
    /*SAVE THE ADMIN DATA WITH MODEL
    ====================================*/
    public function create_account()
    {
        $response = array('success'=>false, 'message'=>'');

        try{
            if (isset($_POST['action'])) {
                if ($_POST['action'] == 'create') {
                    $table = 'tbl_customer';

                    $data = array(
                        'name' => $_POST['name'],
                        'email' => $_POST['email'],
                        'username' => $_POST['username'],
                        'password' => $_POST['pass'],

                    );
                    $result = $this->Customer_model->createAccount($table, $data);
                }
            }

            $response = array('success'=>true, 'message'=>'Success');
        } catch (Exception $ex){
            $response = array('success'=>false, 'message'=>$ex->getMessage());
        }

        echo json_encode($response);
    }




        /*=========
        /*SAVE THE ADMIN DATA WITH MODEL
        ====================================*/
   public function save_customer()
   {
       $this->form_validation->set_rules('name', 'Name', 'trim|required');
       $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
       $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[tbl_admin.username]|min_length[3]');
       $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
       $this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required|matches[password]');

       if($this->form_validation->run()){
           $this->Customer_model->save_customer();
           redirect('home');
       }
       else{
           echo "invalid";
       }

   }


}