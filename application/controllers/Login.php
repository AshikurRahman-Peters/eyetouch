<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 02-May-19
 * Time: 11:54 AM
 */

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }


    /*=======================
    /*SHOW THE LOGIN PAGE
    ========================================*/
    public function admin()
    {
        $this->load->view('login_page');
    }



    /*=======================
    /*CHECK THE LOGIN INFORMATION WITH DATADASE
    ========================================================*/
    public function login_data_check()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('pass', 'Passwor', 'required|trim|min_length[6]');

        if($this->form_validation->run() == false){
            $this->load->view('login_page');
        }
        else{
            if($this->Login_model->login_data_check()){
                redirect('dashboard');
            }
            else{
                $data['error_login'] = 'Invalid User Name or Password';
                $this->load->view('login_page', $data);
            }
        }


    }




    /*=======================
    /*CHECK THE LOGOUT INFORMATION WITH DATADASE
    ========================================================*/
    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        redirect('admin');
    }


}