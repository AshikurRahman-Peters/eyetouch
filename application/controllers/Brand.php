<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->Login_model->is_user_loged_in()){
            redirect('admin');
        }
    }

    /*========
    /*SHOW THE BRAND ADD FORM
    ================================*/
    public function add_brand()
    {
        $data['getBrands'] = $this->Brand_model->get_all_brand();
        $data['content'] = "brands/addBrand";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*=========
    /*SAVE THE ADMIN DATA WITH MODEL
    ====================================*/
    public function save_brand()
    {
        $this->form_validation->set_rules('title', 'Slider Title', 'trim|required');

        $config = array(
            'upload_path' => './uploads/brands/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );

        $this->load->library('upload', $config);

        if($this->form_validation->run() == false){
            $data['content'] = "brands/addBrand";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
            if($this->upload->do_upload('image')){
                $file_name = $this->upload->data('file_name');
                if($this->Brand_model->save_brand($file_name)){
                    $data['success'] = 'Brand data save successfully';
                }
                else{
                    $data['error'] = 'Brand data save not successfully';
                }
            }
            else{
                if($this->Brand_model->save_brand()){
                    $data['success'] = 'Brand data save successfully';
                }
                else{
                    $data['error'] = 'Brand data save not successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('add_brand');
        }

    }


    /*========================
    /*SHOW EDIT BRAND FORM
    =================================*/
    public function edit_brand($id)
    {
        $data['editBrand'] = $this->Brand_model->edit_brand($id);
        $data['content'] = "brands/editBrand";
        $this->load->view('backend/master_dashboard', $data);
    }



    /*========================
    /*UPDATE THE BRAND DATA WITH brand_model'S Uupdate_brand METHOD
    =================================*/
    public function update_brand($id)
    {
        $this->form_validation->set_rules('title', 'Slider Title', 'trim|required');

        $config = array(
            'upload_path' => './uploads/brands/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );

        $this->load->library('upload', $config);

        if($this->form_validation->run() == false){
            $data['content'] = "brands/addBrand";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
            if($this->upload->do_upload('image')){
                $file_name = $this->upload->data('file_name');
                if($this->Brand_model->update_brand($file_name, $id)){
                    $data['success'] = 'Brand data Update successfully';
                }
                else{
                    $data['error'] = 'Brand data Update not successfully';
                }
            }
            else{
                if($this->Brand_model->update_brand_without_image($id)){
                    $data['success'] = 'Brand data Update successfully';
                }
                else{
                    $data['error'] = 'Brand data Update not successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('add_brand');
        }
    }


    /*========================
    /*SOFT DELETE BRAND DATA WITHOUT DATABASE
    ==================================================*/
    public function delete_brand($id)
    {
        if($this->Brand_model->soft_delete_brand($id)){
            $data['success'] = "Brand deleted successfully";
        }
        else{
            $data['error'] = "Brand deleted not successfully";
        }
        $this->session->set_flashdata($data);
        redirect('add_brand');
    }


}