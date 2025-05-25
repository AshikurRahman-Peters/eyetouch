<?php

/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 24-Apr-19
 * Time: 6:19 PM
 */

class Category extends CI_Controller
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
    public function add_category()
    {
        $data['getAllCategory'] = $this->Category_model->get_all_category();
        $data['content'] = "category/addCategory";
        $this->load->view('backend/master_dashboard', $data);
    }

    // public function image_upload($file_name_get)
    // {
    //     $file_name = $file_name_get['name'];
    //     $file_temp = $file_name_get['tmp_name'];

    //     $div = explode('.', $file_name);
    //     $get_last_e = end($div);
    //     $new_name =  rand() . '.' . $get_last_e;
    //     move_uploaded_file($file_temp, './uploads/product/.' . $new_name);
    //     return $new_name;
    // }

    /*=========
    /*SAVE THE CATEGORY DATA WITH CATEGORY MODEL
    ====================================*/
    public function save_category()
    {
        $this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|is_unique[tbl_category.cat_name]');


        $config = array(
            'upload_path' => './uploads/product/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $data['content'] = "category/addCategory";
            $this->load->view('backend/master_dashboard', $data);
        } else {

            if ($this->Category_model->save_category()) {
                $data['success'] = 'Category data save successfully';
            } else {
                $data['error'] = 'Category data save not successfully';
            }
            $this->session->set_flashdata($data);
            redirect('add_category');
        }
    }


    /*=========
    /*SHOW THE CATEGORY EDIT FORM
    ====================================*/
    public function edit_category($id)
    {
        $data['editCategoryData'] = $this->Category_model->get_category_by_id($id);
        $data['content'] = "category/editCategory";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*=========================
    /*UPDATE THE CATEGORY DATA WITH CATEGORY_MODEL'S UPDATE_CATEGORY METHOD
    ================================================*/
    public function update_category($id)
    {
        $this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|is_unique[tbl_category.cat_name]');

        if ($this->form_validation->run() == false) {
            $data['content'] = "category/addCategory";
            $this->load->view('backend/master_dashboard', $data);
        } else {
            if ($this->Category_model->update_category($id)) {
                $data['success'] = 'Category data update successfully';
            } else {
                $data['error'] = 'Category data update not successfully';
            }
            $this->session->set_flashdata($data);
            redirect('add_category');
        }
    }


    /*========================
    /*SOFT DELETE CATEGORY DATA WITHOUT DATABASE
    ==================================================*/
    public function delete_category($id)
    {
        if ($this->Category_model->soft_delete_admin($id)) {
            $data['success'] = "Category data deleted successfully";
        } else {
            $data['error'] = "Category data deleted not successfully";
        }
        $this->session->set_flashdata($data);
        redirect('add_category');
    }



    
    /*==========================
    /*SHOW THE CATEGORY ADD FORM
    ==================================*/
    public function add_sub_category()
    {
        $data['getAllSubCategory'] = $this->Category_model->get_all_sub_category();
        $data['getAllCategory'] = $this->Category_model->get_all_category();
        $data['content'] = "category/addSubCategory";
        $this->load->view('backend/master_dashboard', $data);
    }

    // public function image_upload($file_name_get)
    // {
    //     $file_name = $file_name_get['name'];
    //     $file_temp = $file_name_get['tmp_name'];

    //     $div = explode('.', $file_name);
    //     $get_last_e = end($div);
    //     $new_name =  rand() . '.' . $get_last_e;
    //     move_uploaded_file($file_temp, './uploads/product/.' . $new_name);
    //     return $new_name;
    // }

    /*=========
    /*SAVE THE CATEGORY DATA WITH CATEGORY MODEL
    ====================================*/
    public function save_sub_category()
    {

       

        // $this->form_validation->set_rules('sub_category_name', 'Category Name', 'trim|required|is_unique[tbl_sub_category.sub_category_name]');


        $config = array(
            'upload_path' => './uploads/product/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );
        $this->load->library('upload', $config);

            print_r($_POST);
            if ($this->Category_model->save_sub_category()) {
                $data['success'] = 'Category data save successfully';
            } else {
                $data['error'] = 'Category data save not successfully';
            }
            $this->session->set_flashdata($data);
            redirect('add_sub_category');
        
    }


    /*=========
    /*SHOW THE CATEGORY EDIT FORM
    ====================================*/
    public function edit_sub_category($id)
    {
        $data['getAllCategory'] = $this->Category_model->get_all_category();
        $data['editSubCategoryData'] = $this->Category_model->get_sub_category_by_id($id);
        $data['content'] = "category/editSubCategory";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*=========================
    /*UPDATE THE CATEGORY DATA WITH CATEGORY_MODEL'S UPDATE_CATEGORY METHOD
    ================================================*/
    public function update_sub_category($id)
    {
  
            if ($this->Category_model->update_sub_category($id)) {
                $data['success'] = 'Category data update successfully';
            } else {
                $data['error'] = 'Category data update not successfully';
            }
            $this->session->set_flashdata($data);
            redirect('add_sub_category');
        
    }


    /*========================
    /*SOFT DELETE CATEGORY DATA WITHOUT DATABASE
    ==================================================*/
    public function delete_sub_category($id)
    {
        if ($this->Category_model->soft_delete_sub_category($id)) {
            $data['success'] = "Category data deleted successfully";
        } else {
            $data['error'] = "Category data deleted not successfully";
        }
        $this->session->set_flashdata($data);
        redirect('add_sub_category');
    }

    public function get_subcategories() {
        $catId = $this->input->post('cat_id');

        // You should replace this with your actual logic to fetch subcategories based on the selected category
        $subcategories = $this->Category_model->get_all_sub_category_by_id($catId);

        echo json_encode($subcategories);
    }
}