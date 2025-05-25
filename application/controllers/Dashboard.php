<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 24-Apr-19
 * Time: 10:43 AM
 */

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->Login_model->is_user_loged_in()){
            redirect('admin');
        }
    }

    public function index()
    {
        $data['content'] = "dashboard_home";
        $this->load->view('backend/master_dashboard', $data);
    }

}