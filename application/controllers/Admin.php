<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 24-Apr-19
 * Time: 12:16 PM
 */

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->Login_model->is_user_loged_in()){
            redirect('admin');
        }
    }

    /*========
    /*SHOW THE ADMIN ADD FORM
    ================================*/
    public function add_admin()
    {
        $data['getAdminData'] = $this->Admin_model->get_all_admin();
        $data['content'] = "admin/addAdmin";
        $this->load->view('backend/master_dashboard', $data);
    }

    public function orders_manage() 
    {
        $data['getAdminData'] = $this->Admin_model->get_all_admin();
        $data['content']      = "admin/orders_master";
        $s_id = session_id();
        $sql = "SELECT * FROM tbl_orders_master ORDER BY order_m_id DESC";
        $re = $this->db->query($sql);
        $data_result = $re->result_array();

        $data['html'] = '';
        $i=0;
        foreach ($data_result as $key => $value) {$i++;


               $order_c_id = $value['c_id'];
                $sql = "SELECT * FROM tbl_customer WHERE c_id='$order_c_id' LIMIT 1";
                $re = $this->db->query($sql);
                $data_results = $re->result_array();
        // if ($data_results) {
        //    echo "yes";
        // }else{
        //     echo "no";
        // }
           

  

            $data['html'] .='<tr>
            <td>'.$i++.'</td>
              
                <td>'.$value['name'].'</td>
                <td>'.$value['phone'].'</td>
                <td>'.$value['address'].'</td>
                <td>'.$value['order_time'].'</td>';

                $data['html'] .=' 
                <td>'.$value['total_amount'].'</td>  
                <td>'.$value['Login'].'</td>  
               ';

            //    <td>'.$data_results[0]['email'].'</td>
              
                
                $data['html'] .='
              
                   <td><button class="btn btn-success btn-sm" id="view_master_detail" data-id="'.$value['order_m_id'].'">view</button></td>';
               

             
               if ($value['order_status']=='p') {
                     $data['html'] .= '<td><button class="btn btn-danger btn-sm" id="" data-id="p">pending</td>';
               }elseif($value['order_status']=='s'){
                 $data['html'] .= '<td><button class="btn btn-primary btn-sm" id="" data-id="s">shipping</td>';
               }elseif($value['order_status']=='r'){
                 $data['html'] .= '<td><button class="btn btn-secondary btn-sm" id="" data-id="r">Return</td>';
               }else{
                 $data['html'] .= '<td><button class="btn btn-success btn-sm" id="" data-id="d">delivered</td>';
               }
               $data['html'] .= '<td><button style="margin: 5px;" class="btn btn-danger btn-sm" id="order_status_action" data-id="p" data-id="p" data-oid="'.$value['order_m_id'].'">pending</button>
              <button style="margin: 5px;" class="btn btn-primary  btn-sm" id="order_status_action" data-id="s" data-oid="'.$value['order_m_id'].'">shipping</button>
               <button style="margin: 5px;" class="btn btn-success  btn-sm" id="order_status_action" data-id="d" data-oid="'.$value['order_m_id'].'">delivered</button>
               <button style="margin: 5px;" class="btn btn-secondary  btn-sm" id="order_status_action" data-id="r" data-oid="'.$value['order_m_id'].'">Return</td>
            </tr>';
     
        }
        
        
       
        $this->load->view('backend/master_dashboard', $data);
    }




     public function orders_detail()
    {
        $data['getAdminData'] = $this->Admin_model->get_all_admin();
        $data['content']      = "admin/orders_master";
        $s_id = session_id();
        $sql = "SELECT * FROM tbl_orders_master ORDER BY order_m_id DESC";
        $re = $this->db->query($sql);
        $data_result = $re->result_array();

        $data['html'] = '';

        foreach ($data_result as $key => $value1) {
        $order_pro_id = $value1['order_pro_id'];
        $sql = "SELECT * FROM tbl_products WHERE pro_id='$order_pro_id' ORDER BY pro_id desc";
        $re = $this->db->query($sql);
        $data_result = $re->result_array();
        $i=0;
        foreach ($data_result as $key => $value) {
            $i++;

            $data['html'] .='<tr>
            <td>'.$i.'</td>
                <td><img style="width:80px;height:80px" src="'.base_url().'uploads/product/'.$value['pro_image'].'" alt="photo"></td>
                <td>'.$value['pro_title'].'</td>
                <td>'.$value['pro_price'].'</td>
               ';

               ///
                $order_c_id = $value1['order_c_id'];
                $sql = "SELECT * FROM tbl_customer WHERE id='$order_c_id' LIMIT 1";
        $re = $this->db->query($sql);
        $data_result = $re->result_array();
                $data['html'] .= ' <td>'.$data_result[0]['first_name'].' '.$data_result[0]['last_name'].'</td><td>'.$value1['order_time'].'</td>';

             
               if ($value1['order_status']=='p') {
                     $data['html'] .= '<td><button class="btn btn-danger btn-sm" id="" data-id="p">pending</td>';
               }else if($value1['order_status']=='s'){
                 $data['html'] .= '<td><button class="btn btn-primary btn-sm" id="" data-id="s">shipping</td>';
               }else{
                 $data['html'] .= '<td><button class="btn btn-success btn-sm" id="" data-id="d">delivered</td>';
               }
               $data['html'] .= '<td><button style="margin: 5px;" class="btn btn-danger btn-sm" id="order_status_action" data-id="p" data-id="p" data-oid="'.$value1['order_id'].'">pending</button>
              <button style="margin: 5px;" class="btn btn-primary  btn-sm" id="order_status_action" data-id="s" data-oid="'.$value1['order_id'].'">shipping</button>
               <button style="margin: 5px;" class="btn btn-success  btn-sm" id="order_status_action" data-id="d" data-oid="'.$value1['order_id'].'">delivered</td>
            </tr>';
        }
        }
       
        $this->load->view('backend/master_dashboard', $data);
    }


   


    /*=========
    /*SAVE THE ADMIN DATA WITH MODEL
    ====================================*/
    public function save_admin()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[tbl_admin.username]|min_length[3]');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('con_pass', 'Confirm Password', 'trim|required|matches[pass]');

        if($this->form_validation->run() == false){
            $data['content'] = "admin/addAdmin";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
            if($this->Admin_model->save_admin()){
                $data['success'] = 'Admin data save successfully';
            }
            else{
                $data['error'] = 'Admin data save not successfully';
            }
            $this->session->set_flashdata($data);
            redirect('add_admin');
        }


    }


    /*========================
    /*SHOW EDIT ADMIN FORM
    =================================*/
    public function edit_admin($id)
    {
        $data['editAdmin'] = $this->Admin_model->edit_admin($id);
        $data['content'] = "admin/editAdmin";
        $this->load->view('backend/master_dashboard', $data);
    }

 public function orderStatusUpdate(){
        $oid = $this->input->post('oid');
        $id  = $this->input->post('id');
        $data = array(
            'order_status'=>$id
        );
        $this->db->where('order_m_id', $oid);
        $result = $this->db->update('tbl_orders_master',$data);
        if ($result) {
            echo "updated";
        }
    }

    /*=========================
    /*UPDATE THE ADMIN DATA WITH ADMIN_MODEL MODEL
    ================================================*/
    public function update_admin($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');

        if($this->form_validation->run() == false){
            $data['content'] = "admin/addAdmin";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
            if($this->Admin_model->update_admin($id)){
                $data['success'] = 'Admin data update successfully';
            }
            else{
                $data['error'] = 'Admin data update not successfully';
            }
        }
        $this->session->set_flashdata($data);
        redirect('add_admin');
    }

    public function logout(){
           setcookie("c_id",'',time()+31556926 ,'/');
            setcookie("first_name",'',time()+31556926 ,'/');
            setcookie("last_name",'',time()+31556926 ,'/');
            setcookie("email",'',time()+31556926 ,'/');
            setcookie("phone",'',time()+31556926 ,'/');
            setcookie("loginCheck",false,time()+31556926 ,'/');

           header("Location:".base_url());

    }


    /*========================
    /*SOFT DELETE ADMIN DATA WITHOUT DATABASE
    ==================================================*/
    public function delete_admin($id)
    {
        if($this->Admin_model->soft_delete_admin($id)){
            $data['success'] = "Admin data deleted successfully";
        }
        else{
            $data['error'] = "Admin data deleted not successfully";
        }
        $this->session->set_flashdata($data);
        redirect('add_admin');
    }


}