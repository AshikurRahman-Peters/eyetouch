<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Featured extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->Login_model->is_user_loged_in()){
            redirect('admin');
        }
    }


    /*========
    /*SHOW THE FEATURED ADD FORM
    ================================*/
    public function add_featured()
    {
        $data['Allfeatured'] = $this->Featured_model->get_all_featured();
        $data['content'] = "featured/addFeatured";
        $this->load->view('backend/master_dashboard', $data);
    }



    /*=========
    /*SAVE THE FEATURED DATA WITH Featured_model
    ====================================*/
    public function save_featured()
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('type', 'Type', 'trim|required');

        $config = array(
            'upload_path' => './uploads/featured/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );
        
        $this->load->library('upload', $config);
        
        if ($this->form_validation->run() == false) {
            $data['content'] = "featured/addFeatured";
            $this->load->view('backend/master_dashboard', $data);
        } else {
            if ($this->upload->do_upload('image')) {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
        
                // Resize and compress the uploaded image
                $this->resize_and_compress_image($upload_data['full_path'], $file_name);
        
                if ($this->Featured_model->save_featured($file_name)) {
                    $data['success'] = 'Featured data saved successfully';
                } else {
                    $data['error'] = 'Featured data not saved successfully';
                }
            } else {
                if ($this->Featured_model->save_featured()) {
                    $data['success'] = 'Featured data saved successfully';
                } else {
                    $data['error'] = 'Featured data not saved successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('add_featured');
        }

    }


    /*========================
    /*SHOW EDIT FEATURED FORM
    =================================*/
    public function edit_featured($id)
    {
        $data['editFeatured'] = $this->Featured_model->edit_featured($id);
        $data['content'] = "featured/editFeatured";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*========================
    /*UPDATE THE FEATURED DATA WITH featured_model'S update_featured METHOD
    =================================*/
    public function update_featured($id)
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        //$this->form_validation->set_rules('description', 'Description', 'trim|required');

        $config = array(
            'upload_path' => './uploads/featured/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );
        
        $this->load->library('upload', $config);
        
        if ($this->form_validation->run() == false) {
            $data['content'] = "featured/addFeatured";
            $this->load->view('backend/master_dashboard', $data);
        } else {
            // Get the old image file name from the database based on $id
            $old_file_name = $this->Featured_model->get_old_image_name($id);
     
            if ($this->upload->do_upload('image')) {
                // Upload new image
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
        
                // Resize and compress the uploaded image
                $this->resize_and_compress_image($upload_data['full_path'], $file_name);
        
                // Unlink (delete) the old image
                if ($old_file_name->image->image && file_exists($config['upload_path'] . $old_file_name->image->image)) {
                    unlink($config['upload_path'] . $old_file_name->image->image);
                }
        
                // Update featured data with the new image
                if ($this->Featured_model->update_featured($file_name, $id)) {
                    $data['success'] = 'Featured data updated successfully';
                } else {
                    $data['error'] = 'Featured data not updated successfully';
                }
            } else {
                // If no new image is uploaded, update without changing the image
                if ($this->Featured_model->update_featured_without_image($id)) {
                    $data['success'] = 'Featured data updated successfully';
                } else {
                    $data['error'] = 'Featured data not updated successfully';
                }
            }
        
            $this->session->set_flashdata($data);
            redirect('add_featured');
        }
    }

    function resize_and_compress_image($source_path, $file_name) {
        $this->load->library('image_lib');
    
        // Resize the image
        $resize_config = array(
            'image_library' => 'gd2',
            'source_image' => $source_path,
            'maintain_ratio' => true,
            'width' => 600, // Adjust the width as needed
            'height' => 400, // Adjust the height as needed
        );
        $this->image_lib->initialize($resize_config);
        $this->image_lib->resize();
        $this->image_lib->clear();
    
        // Compress the image to around 100 KB
        $compress_config = array(
            'source_image' => $source_path,
            'quality' => 80, // Adjust the quality as needed (80 is just an example)
            'new_image' => $source_path, // Overwrite the source image with the compressed one
        );
        $this->image_lib->initialize($compress_config);
        $this->image_lib->resize();
        $this->image_lib->clear();
    }
    /*========================
    /*SOFT DELETE FEATURED DATA WITHOUT DATABASE
    ==================================================*/
    public function delete_featured($id)
    {
        if($this->Featured_model->featured_soft_delete($id)){
            $data['success'] = "Featured deleted successfully";
        }
        else{
            $data['error'] = "Featured deleted not successfully";
        }
        $this->session->set_flashdata($data);
        redirect('add_featured');
    }

}