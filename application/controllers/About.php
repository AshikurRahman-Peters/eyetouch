<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 28-Apr-19
 * Time: 1:36 PM
 */

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->Login_model->is_user_loged_in()){
            redirect('admin');
        }
    }


    /*========
    /*SHOW THE COMMONPART ADD FORM
    ================================*/
    public function add_about()
    {
        $data['Allabout'] = $this->About_model->get_all_about();
        $data['content'] = "about/addAbout";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*=========
    /*SAVE THE COMMON PART DATA WITH COMMONPART_MODEL
    ====================================*/
    public function save_about()
    {
        $this->form_validation->set_rules('about_title', 'Title', 'trim|required');
        $this->form_validation->set_rules('about_description', 'Description', 'trim|required');
        //$this->form_validation->set_rules('about_type', 'Type', 'trim|required');

  
        if($this->form_validation->run() == false){
            $data['content'] = "about/addAbout";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
        
                if($this->About_model->save_about()){
                    $data['success'] = 'Common Part data save successfully';
                }
                else{
                    $data['error'] = 'Common Part data save not successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('add_about');
        

    }


    /*========================
    /*SHOW EDIT SLIDER FORM
    =================================*/
    public function edit_about($id)
    {
        $data['editAbout'] = $this->About_model->edit_about($id);
        $data['content'] = "about/editAbout";
        $this->load->view('backend/master_dashboard', $data);
    }



    /*========================
    /*UPDATE THE SLIDER DATA WITH SLIDER_MODEL'S UPDATE_SLIDER METHOD
    =================================*/
    public function update_about($id)
    {
        $this->form_validation->set_rules('about_title', 'Title', 'trim|required');
        $this->form_validation->set_rules('about_description', 'Description', 'trim|required');

   

        if($this->form_validation->run() == false){
            $data['content'] = "about/addAbout";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
           
                if($this->About_model->update_about_without_image($id)){
                    $data['success'] = 'About data update successfully';
                }
                else{
                    $data['error'] = 'About data update not successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('edit_About/1');
        
    }



    /*========================
    /*SOFT DELETE COMMONPART DATA WITHOUT DATABASE
    ==================================================*/
    public function delete_about($id)
    {
        if($this->About_model->aboutmon_soft_delete($id)){
            $data['success'] = "About deleted successfully";
        }
        else{
            $data['error'] = "About deleted not successfully";
        }
        $this->session->set_flashdata($data);
        redirect('add_about');
    }


}