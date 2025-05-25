<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 28-Apr-19
 * Time: 1:36 PM
 */

class CommonPart extends CI_Controller
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
    public function add_comonpart()
    {
        $data['Allcommonpart'] = $this->Commonpart_model->get_all_commonpart();
        $data['content'] = "commonpart/addCommonpart";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*=========
    /*SAVE THE COMMON PART DATA WITH COMMONPART_MODEL
    ====================================*/
    public function save_commonpart()
    {
        $this->form_validation->set_rules('com_title', 'Title', 'trim|required');
        $this->form_validation->set_rules('com_description', 'Description', 'trim|required');
        $this->form_validation->set_rules('com_type', 'Type', 'trim|required');

        $config = array(
            'upload_path' => './uploads/commonpart/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );

        $this->load->library('upload', $config);

        if($this->form_validation->run() == false){
            $data['content'] = "commonpart/addCommonpart";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
            if($this->upload->do_upload('com_image')){
                $file_name = $this->upload->data('file_name');
                if($this->Commonpart_model->save_commonpart($file_name)){
                    $data['success'] = 'Common Part data save successfully';
                }
                else{
                    $data['error'] = 'Common Part data save not successfully';
                }
            }
            else{
                if($this->Commonpart_model->save_commonpart()){
                    $data['success'] = 'Common Part data save successfully';
                }
                else{
                    $data['error'] = 'Common Part data save not successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('add_comonpart');
        }

    }


    /*========================
    /*SHOW EDIT SLIDER FORM
    =================================*/
    public function edit_commonpart($id)
    {
        $data['editCommon'] = $this->Commonpart_model->edit_commonpart($id);
        $data['content'] = "commonpart/editCommonpart";
        $this->load->view('backend/master_dashboard', $data);
    }



    /*========================
    /*UPDATE THE SLIDER DATA WITH SLIDER_MODEL'S UPDATE_SLIDER METHOD
    =================================*/
    public function update_commonpart($id)
    {
        $this->form_validation->set_rules('com_title', 'Title', 'trim|required');
        $this->form_validation->set_rules('com_description', 'Description', 'trim|required');

        $config = array(
            'upload_path' => './uploads/commonpart/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );

        $this->load->library('upload', $config);

        if($this->form_validation->run() == false){
            $data['content'] = "commonpart/addCommonpart";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
            if($this->upload->do_upload('com_image')){
                $file_name = $this->upload->data('file_name');
                if($this->Commonpart_model->update_commonpart($file_name, $id)){
                    $data['success'] = 'Common Part data Update successfully';
                }
                else{
                    $data['error'] = 'Common Part data Update not successfully';
                }
            }
            else{
                if($this->Commonpart_model->update_commonpart_without_image($id)){
                    $data['success'] = 'Common Part data update successfully';
                }
                else{
                    $data['error'] = 'Common Part data update not successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('add_comonpart');
        }
    }



    /*========================
    /*SOFT DELETE COMMONPART DATA WITHOUT DATABASE
    ==================================================*/
    public function delete_commonpart($id)
    {
        if($this->Commonpart_model->common_soft_delete($id)){
            $data['success'] = "Commonpart deleted successfully";
        }
        else{
            $data['error'] = "Commonpart deleted not successfully";
        }
        $this->session->set_flashdata($data);
        redirect('add_comonpart');
    }


}