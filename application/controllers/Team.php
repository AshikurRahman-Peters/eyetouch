<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 06-May-19
 * Time: 11:08 AM
 */

class Team extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->Login_model->is_user_loged_in()){
            redirect('admin');
        }
    }

    /*========
    /*SHOW THE TEAM ADD FORM
    ================================*/
    public function add_team()
    {
        $data['AllTeamMember'] = $this->Team_model->get_all_team();
        $data['content'] = "team/addTeam";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*=========
    /*SAVE THE TEAM DATA WITH Featured_model
    ====================================*/
    public function save_team()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        $config = array(
            'upload_path' => './uploads/team/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );

        $this->load->library('upload', $config);

        if($this->form_validation->run() == false){
            $data['content'] = "team/addTeam";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
            if($this->upload->do_upload('image')){
                $file_name = $this->upload->data('file_name');
                if($this->Team_model->save_team($file_name)){
                    $data['success'] = 'Team data save successfully';
                }
                else{
                    $data['error'] = 'Team data save not successfully';
                }
            }
            else{
                if($this->Team_model->save_team()){
                    $data['success'] = 'Team data save successfully';
                }
                else{
                    $data['error'] = 'Team data save not successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('add_team');
        }

    }


    /*========================
    /*SHOW EDIT Team FORM
    =================================*/
    public function edit_team($id)
    {
        $data['editTeam'] = $this->Team_model->edit_team($id);
        $data['content'] = "team/editTeam";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*========================
   /*UPDATE THE FEATURED DATA WITH featured_model'S update_featured METHOD
   =================================*/
    public function update_team($id)
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        $config = array(
            'upload_path' => './uploads/team/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );

        $this->load->library('upload', $config);

        if($this->form_validation->run() == false){
            $data['content'] = "team/addTeam";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
            if($this->upload->do_upload('image')){
                $file_name = $this->upload->data('file_name');
                if($this->Team_model->update_team($file_name, $id)){
                    $data['success'] = 'Team data Update successfully';
                }
                else{
                    $data['error'] = 'Team data Update not successfully';
                }
            }
            else{
                if($this->Team_model->update_team_without_image($id)){
                    $data['success'] = 'Team data Update successfully';
                }
                else{
                    $data['error'] = 'Team data Update not successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('add_team');
        }
    }



    /*========================
    /*SOFT DELETE FEATURED DATA WITHOUT DATABASE
    ==================================================*/
    public function delete_team($id)
    {
        if($this->Team_model->team_soft_delete($id)){
            $data['success'] = "Team deleted successfully";
        }
        else{
            $data['error'] = "Team deleted not successfully";
        }
        $this->session->set_flashdata($data);
        redirect('add_team');
    }





}