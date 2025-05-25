<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 25-Apr-19
 * Time: 1:01 PM
 */

class Slider extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->Login_model->is_user_loged_in()){
            redirect('admin');
        }
    }


    /*========
    /*SHOW THE SLIDER ADD FORM
    ================================*/
    public function add_slider()
    {
        $data['getSliderData'] = $this->Slider_model->get_all_slider();
        $data['content'] = "slider/addSlider";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*=========
    /*SAVE THE ADMIN DATA WITH MODEL
    ====================================*/
    public function save_slider()
    {
        $this->form_validation->set_rules('title', 'Slider Title', 'trim|required');
        // $this->form_validation->set_rules('slogan', 'Slider slogan', 'trim|required');

        $config = array(
            'upload_path' => './uploads/slider/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );

        $this->load->library('upload', $config);

        if($this->form_validation->run() == false){
            $data['content'] = "slider/addSlider";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
            if($this->upload->do_upload('image')){
                $file_name = $this->upload->data('file_name');
                if($this->Slider_model->save_slider($file_name)){
                    $data['success'] = 'Slider data save successfully';
                }
                else{
                    $data['error'] = 'Slider data save not successfully';
                }
            }
            else{
                if($this->Slider_model->save_slider()){
                    $data['success'] = 'Slider data save successfully';
                }
                else{
                    $data['error'] = 'Slider data save not successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('add_slider');
        }

    }


    /*========================
    /*SHOW EDIT SLIDER FORM
    =================================*/
    public function edit_slider($id)
    {
        $data['editSlider'] = $this->Slider_model->edit_slider($id);
        $data['content'] = "slider/editSlider";
        $this->load->view('backend/master_dashboard', $data);
    }



    /*========================
    /*UPDATE THE SLIDER DATA WITH SLIDER_MODEL'S UPDATE_SLIDER METHOD
    =================================*/
    public function update_slider($id)
    {
        $this->form_validation->set_rules('title', 'Slider Title', 'trim|required');
        // $this->form_validation->set_rules('slogan', 'Slider slogan', 'trim|required');

        $config = array(
            'upload_path' => './uploads/slider/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );

        $this->load->library('upload', $config);

        if($this->form_validation->run() == false){
            $data['content'] = "slider/addSlider";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
            if($this->upload->do_upload('image')){
                $file_name = $this->upload->data('file_name');
                if($this->Slider_model->update_slider($file_name, $id)){
                    $data['success'] = 'Slider data Update successfully';
                }
                else{
                    $data['error'] = 'Slider data Update not successfully';
                }
            }
            else{
                if($this->Slider_model->update_slider_without_image($id)){
                    $data['success'] = 'Slider data Update successfully';
                }
                else{
                    $data['error'] = 'Slider data Update not successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('add_slider');
        }
    }


    /*========================
    /*SOFT DELETE SLIDER DATA WITHOUT DATABASE
    ==================================================*/
    public function delete_slider($id)
    {
        if($this->Slider_model->soft_delete_slider($id)){
            $data['success'] = "Slider deleted successfully";
        }
        else{
            $data['error'] = "Slider deleted not successfully";
        }
        $this->session->set_flashdata($data);
        redirect('add_slider');
    }


}