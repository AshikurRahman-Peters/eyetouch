<?php

/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 04-May-19
 * Time: 4:10 PM
 */

class contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->Login_model->is_user_loged_in()) {
            redirect('admin');
        }
    }


    /*========================
    /*SHOW EDIT CONTACT FORM
    =================================*/
    public function edit_contact($id)
    {
        $data['editContact'] = $this->Contact_model->edit_contact($id);
        $data['content'] = "contact/editContact";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*=========================
    /*UPDATE THE ADMIN DATA WITH ADMIN_MODEL MODEL
    ================================================*/
    public function update_contact($id)
    {
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[11]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $data['content'] = "contact/editContact";
            $this->load->view('backend/master_dashboard', $data);
        } else {
            if ($this->Contact_model->update_contact($id)) {
                $data['success'] = 'Contact data update successfully';
            } else {
                $data['error'] = 'Contact data update not successfully';
            }
        }
        $this->session->set_flashdata($data);
        redirect(base_url() . 'edit_contact/1');
    }
    public function message_update($id)
    {


        if ($this->Contact_model->update_message($id)) {
            $data['success'] = 'Message update successfully';
        } else {
            $data['error'] = 'Message update not successfully';
        }

        $this->session->set_flashdata($data);
        redirect('message');
    }

    public function message()
    {

        $data['content'] = "message/message";
        $this->load->view('backend/master_dashboard', $data);
    }
}
