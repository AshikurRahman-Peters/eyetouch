<?php

/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 24-Apr-19
 * Time: 6:19 PM
 */

class District extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->Login_model->is_user_loged_in()) {
            redirect('admin');
        }
    }


    /*==========================
    /*SHOW THE CATEGORY ADD FORM
    ==================================*/
    public function add_district()
    {
        $data['getAllDistrict'] = $this->District_model->get_all_district();
        $data['content'] = "district/addDistrict";
        $this->load->view('backend/master_dashboard', $data);
    }

    // public function image_upload($file_name_get){
    //     $file_name = $file_name_get['name'];
    //     $file_temp = $file_name_get['tmp_name'];
 
    //     $div = explode('.', $file_name);
    //     $get_last_e = end($div);
    //     $new_name =  rand().'.'.$get_last_e;
    //     move_uploaded_file($file_temp,'./uploads/product/.'.$new_name);
    //     return $new_name;
    //  }

    /*=========
    /*SAVE THE CATEGORY DATA WITH CATEGORY MODEL
    ====================================*/
    public function save_district()
    {
        $this->form_validation->set_rules('district_name', 'District Name', 'trim|required|is_unique[tbl_district.district_name]');


        $config = array(
            'upload_path' => './uploads/product/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $data['content'] = "district/addDistrict";
            $this->load->view('backend/master_dashboard', $data);
        } else {
       
                if ($this->District_model->save_district()) {
                    $data['success'] = 'District data save successfully';
              
            } else {
                $data['error'] = 'District data save not successfully';
            }
            $this->session->set_flashdata($data);
            redirect('add_district');
        }
    }


    /*=========
    /*SHOW THE CATEGORY EDIT FORM
    ====================================*/
    public function edit_district($id)
    {
        $data['editDistrictData'] = $this->District_model->get_district_by_id($id);
        $data['content'] = "district/editDistrict";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*=========================
    /*UPDATE THE CATEGORY DATA WITH CATEGORY_MODEL'S UPDATE_CATEGORY METHOD
    ================================================*/
    public function update_district($id)
    {
        $this->form_validation->set_rules('district_name', 'District Name', 'trim|required|is_unique[tbl_district.district_name]');

        if ($this->form_validation->run() == false) {
            $data['content'] = "district/addDistrict";
            $this->load->view('backend/master_dashboard', $data);
        } else {
            if ($this->District_model->update_district($id)) {
                $data['success'] = 'District data update successfully';
            } else {
                $data['error'] = 'District data update not successfully';
            }
            $this->session->set_flashdata($data);
            redirect('add_district');
        }
    }


    /*========================
    /*SOFT DELETE CATEGORY DATA WITHOUT DATABASE
    ==================================================*/
    public function delete_district($id)
    {
        if ($this->District_model->soft_delete_admin($id)) {
            $data['success'] = "District data deleted successfully";
        } else {
            $data['error'] = "District data deleted not successfully";
        }
        $this->session->set_flashdata($data);
        redirect('add_district');
    }
}
