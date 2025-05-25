<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 05-May-19
 * Time: 11:45 AM
 */

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }



    /*=======================
    /*CHECK THE SERCHING INFORMATION WITH DATADASE
    ========================================================*/
    public function check_searching_data()
    {
        $this->form_validation->set_rules('search', 'Searcing input is required', 'trim|required');

        if($this->form_validation->run()){
            $searching = $this->input->post('search');
            $data['searchResult'] = $this->Search_model->get_all_searching_data($searching);
            $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
            $data['getContact'] = $this->Contact_model->get_all_contact();
            $data['content'] = 'search';
            $this->load->view('frontend/master_layout', $data);
        }
        else{
            $data['content'] = 'homepage';
            $this->load->view('frontend/master_layout', $data);
        }

    }

}