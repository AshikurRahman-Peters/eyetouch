<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 27-Apr-19
 * Time: 10:56 AM
 */

class Product_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /*==============
    /*GET ALL PRODUCT DATA FROM DATABASE
    ================================================*/
    public function get_all_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->join('tbl_category', 'tbl_category.cat_id = tbl_products.cat_id');
        $this->db->join('tbl_sub_category', 'tbl_sub_category.sub_category_id = tbl_products.sub_category_id');
        $this->db->order_by('pro_id', 'desc');
        $this->db->where('pro_status', 1);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }
    public function get_all_product_filter($data)
    {
        $this->db->select('tbl_products.*, tbl_sub_category.*, tbl_category.*');
        $this->db->from('tbl_products');
        $this->db->join('tbl_sub_category', 'tbl_sub_category.sub_category_id = tbl_products.sub_category_id');
        $this->db->join('tbl_category', 'tbl_category.cat_id = tbl_sub_category.category_id');
        $this->db->where('tbl_products.pro_status', 1);
        $this->db->group_start(); // Start OR condition
        $this->db->like('tbl_category.cat_name', $data);
        $this->db->or_like('tbl_sub_category.sub_category_name', $data);
        $this->db->or_like('tbl_sub_category.sub_category_name',);
        $this->db->group_end(); // End OR condition
        $this->db->order_by('tbl_products.pro_id', 'desc');
        
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }


    public function get_product_by_men()
    {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('cat_id', 11);
        $this->db->where('pro_status', 1);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }


    public function get_product_by_women()
    {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('cat_id', 10);
        $this->db->where('pro_status', 1);
        $this->db->where('active', 1);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function get_product_by_garment()
    {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('cat_id', 13);
        $this->db->where('pro_status', 1);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }


    /*==============
    /*GET ALL PRODUCT DATA BY ID FROM DATABASE
    ================================================*/
    public function get_product_by_id($id)
    {
        $query = $this->db->where('pro_id', $id)->get('tbl_products');
        if($query->num_rows() == 1){
            return $query->result();
        }
        else{
            return false;
        }
    }
    public function get_old_product_image_name($id)
    {
        $query = $this->db->query("select pro_image from tbl_products where pro_id = '$id'")->row();
        if($query){
            return $query;
        }
        else{
            return false;
        }
    }



    /*==============
    /*GET PRODUCT DATA BY ID RAND FROM DATABASE
    ================================================*/
    public function get_product_by_id_rand()
    {
        $query = $this->db->order_by('pro_id', 'RANDOM')->limit(4)->get('tbl_products');
        $res = $query->result();
        return $res;
    }



    /*=========
    /*SAVE THE PRODUCT DATA IN DATABASE WITH IMAGE
    ====================================*/
    public function save_product($file_name = null)
    {
        $data['cat_id'] = $this->input->post('cat_id');
        $data['sub_category_id'] = $this->input->post('sub_cat_id');
        $data['pro_title'] = $this->input->post('pro_title');
        $data['pro_price'] = $this->input->post('pro_price');
        $data['pro_old_price'] = $this->input->post('pro_old_price');
        // $data['brand_id'] = $this->input->post('brand_id');
        // $data['size'] = $this->input->post('size');
        $data['pro_description'] = $this->input->post('pro_description');
        $data['pro_created_by'] = $this->session->userdata('user_username');
        $data['pro_created_date'] = date('Y-m-d H:i:s');
        $data['pro_status'] = 1;
        $data['future_product'] = $this->input->post('future_product');
        if($file_name != null){
            $data['pro_image'] = $file_name;
        }
       
        if ($this->input->post('active') == 1){
            $data['active'] = 1;
        }else{
            $data['active'] = 0;
        }
        // print_r($data);
        // exit;

        $res = $this->db->insert('tbl_products', $data);
        if($res){
            return true;
        }
        else{
            return false;
        }
    }


    /*=========
    /*UPDATE THE PRODUCT DATA IN DATABASE WITH IMAGE
    ====================================*/
    public function update_product($file_name, $id)
    {
        $data['cat_id'] = $this->input->post('cat_id');
        $data['sub_category_id'] = $this->input->post('sub_category_id');
        $data['brand_id'] = $this->input->post('brand_id');
        $data['pro_title'] = $this->input->post('pro_title');
        $data['pro_price'] = $this->input->post('pro_price');
        $data['pro_old_price'] = $this->input->post('pro_old_price');
        $data['pro_description'] = $this->input->post('pro_description');
        $data['pro_update_by'] = $this->session->userdata('user_username');
        $data['pro_update_date'] = date('Y-m-d H:i:s');
        $data['pro_status'] = 1;
        $data['pro_image'] = $file_name;
        $data['future_product'] = $this->input->post('future_product');
    
        if ($this->input->post('active') == 1){
            $data['active'] = 1;
        }else{
            $data['active'] = 0;
        }

       
        $result = $this->db->where('pro_id', $id)->update('tbl_products', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    /*=========
    /*UPDATE THE PRODUCT DATA IN DATABASE WITH IMAGE
    ====================================*/
    public function update_product_without_image($id)
    {
        $data['cat_id'] = $this->input->post('cat_id');
        $data['sub_category_id'] = $this->input->post('sub_category_id');
        $data['brand_id'] = $this->input->post('brand_id');
        $data['pro_title'] = $this->input->post('pro_title');
        $data['pro_price'] = $this->input->post('pro_price');
        $data['pro_old_price'] = $this->input->post('pro_old_price');
        $data['pro_description'] = $this->input->post('pro_description');
        $data['pro_update_by'] = $this->session->userdata('user_username');
        $data['pro_update_date'] = date('Y-m-d H:i:s');
        $data['pro_status'] = 1;
        $data['future_product'] = $this->input->post('future_product');
  
        if ($this->input->post('active') == 1){
            $data['active'] = 1;
        }else{
            $data['active'] = 0;
        }

        $result = $this->db->where('pro_id', $id)->update('tbl_products', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    /*=========
    /*Delete THE PRODUCT DATA
    ====================================*/
    public function soft_delete_product($id)
    {
        $qduery = $this->db
            ->set('pro_status', 2)
            ->where('pro_id', $id)
            ->update('tbl_products');
        if($this->db->affected_rows() == 1){
            return true;
        }
        else{
            return false;
        }
    }






    /*==============
    /*GET SIZE DATA BY ID FROM DATABASE
    ================================================*/
    public function edit_product($id)
    {
        $query = $this->db->where('pro_id', $id)->get('tbl_products');
        if($query->num_rows() == 1){
            return $query->result();
        }
        else{
            return false;
        }
    }




    /*==============
    /*GET PRODUCT SIZE BY ID FROM DATABASE
    ================================================*/
    public function get_all_product_size($id)
    {
        $query = $this->db->query("select * from tbl_size where  product_id = '$id' and size_status = 1");

        return $query->result_array();

    }


    /*==============
    /*GET PRODUCT SIZE BY ID FROM DATABASE
    ================================================*/
    public function get_all_product_colors($id)
    {
        $query = $this->db->query("select * from tbl_colors where  product_id = '$id' and colors_status = 1 ");

        return $query->result_array();

    }

    /*==============
    /*GET PRODUCT SIZE BY ID FROM DATABASE
    ================================================*/
    public function get_all_product_images($id)
    {
        $query = $this->db->query("select * from tbl_image where  product_id = '$id' and status = 1 ");

        return $query->result_array();

    }

    /*=================*/
    public function get_size_by_id($id)
    {
        $query = $this->db->where('size_id', $id)->get('tbl_size');
        if($query->num_rows() ==1 ){
            return $query->result();
        }
        else{
            return false;
        }
    }

    /*=================*/
    public function get_color_by_id($id)
    {
        $query = $this->db->where('colors_id', $id)->get('tbl_colors');
        if($query->num_rows() ==1 ){
            return $query->result();
        }
        else{
            return false;
        }
    }


    /*=================*/
    public function get_images_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('tbl_image');
        if($query->num_rows() ==1 ){
            return $query->result();
        }
        else{
            return false;
        }
    }
    public function get_old_image_name($id)
    {
        $query = $this->db->where('id', $id)->get('tbl_image');
        if($query->num_rows() ==1 ){
            return $query->row();
        }
        else{
            return false;
        }
    }

    /*=========
    /*SAVE THE PRODUCT DATA IN DATABASE WITH IMAGE
    ====================================*/
    public function save_size()
    {
        $data['product_id'] = $this->input->post('product_id');
        $data['size_name'] = $this->input->post('size_name');
        $data['available_qty'] = $this->input->post('available_qty');
        $data['size_status'] = 1;

        $res = $this->db->insert('tbl_size', $data);
        if($res){
            return true;
        }
        else{
            return false;
        }
    }
    /*=========
    /*SAVE THE PRODUCT DATA IN DATABASE WITH IMAGE
    ====================================*/
    public function update_size($id)
    {
        $data['size_name'] = $this->input->post('size_name');
        $data['available_qty'] = $this->input->post('available_qty');
        $data['size_status'] = 1;

        $res = $this->db->where('size_id', $id)->update('tbl_size', $data);
        if($res){
            return true;
        }
        else{
            return false;
        }
    }
    /*=========
    /*Delete THE PRODUCT DATA
    ====================================*/
    public function soft_delete_size($id)
    {
        $qduery = $this->db
            ->set('size_status', 2)
            ->where('size_id', $id)
            ->update('tbl_size');
        if($this->db->affected_rows() == 1){
            return true;
        }
        else{
            return false;
        }
    }



    /*=========
    /*SAVE THE PRODUCT DATA IN DATABASE WITH IMAGE
    ====================================*/
    public function save_color()
    {
        $data['product_id'] = $this->input->post('product_id');
        $data['colors_name'] = $this->input->post('colors_name');
        $data['colors_code'] = $this->input->post('colors_code');
        $data['colors_status'] = 1;

        $res = $this->db->insert('tbl_colors', $data);
        if($res){
            return true;
        }
        else{
            return false;
        }
    }



    /*=========
    /*SAVE THE PRODUCT DATA IN DATABASE WITH IMAGE
    ====================================*/
    public function save_image($file_name)
    {
        $data['product_id'] = $this->input->post('product_id');
        $data['status'] = 1;
        $data['image'] = $file_name;


        $res = $this->db->insert('tbl_image', $data);
        if($res){
            return true;
        }
        else{
            return false;
        }
    }

    /*=========
    /*SAVE THE PRODUCT DATA IN DATABASE WITH IMAGE
    ====================================*/
    public function update_image($file_name, $id)
    {
        $data['status'] = 1;
        $data['image'] = $file_name;

        $res = $this->db->where('id', $id)->update('tbl_image', $data);
        if($res){
            return true;
        }
        else{
            return false;
        }
    }
    /*=========
    /*Delete THE PRODUCT DATA
    ====================================*/
    public function soft_delete_image($id)
    {
        $qduery = $this->db
            ->set('status', 2)
            ->where('id', $id)
            ->update('tbl_image');
        if($this->db->affected_rows() == 1){
            return true;
        }
        else{
            return false;
        }
    }


}