<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 29-Apr-19
 * Time: 5:58 PM
 */

class Size extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->Login_model->is_user_loged_in()){
            redirect('admin');
        }
    }


    /*==========================
    /*SHOW THE SIZE ADD FORM
    ==================================*/
    public function add_size()
    {
//        $data['getAllCategory'] = $this->Category_model->get_all_category();
        $data['content'] = "size/addSize";
        $this->load->view('backend/master_dashboard', $data);
    }

}