<?php

/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 27-Apr-19
 * Time: 10:56 AM
 */

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if($this->Login_model->is_user_loged_in()){
        //     redirect('admin');
        //}
        // $this->load->helper('cookie');
    }

    /*========
    /*SHOW THE Slider ADD FORM
    ================================*/
    public function add_product()
    {
        $data['AllProductData'] = $this->Product_model->get_all_product();
        $data['categoryData'] = $this->Category_model->get_all_category();
        $data['content'] = "product/addProduct";
        $this->load->view('backend/master_dashboard', $data);
    }



    /*=========
    /*SAVE THE PRODUCT DATA WITH PRODUCT_MODEL
    ====================================*/
    public function save_product()
    {
        $this->form_validation->set_rules('pro_title', 'Product Title', 'trim|required');
        $this->form_validation->set_rules('pro_price', 'Price', 'trim|required');
        $this->form_validation->set_rules('pro_description', 'Description', 'trim|required');
        $this->form_validation->set_rules('cat_id', 'Category name', 'trim|required');
        
        $config = array(
            'upload_path' => './uploads/product/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );
        
        $this->load->library('upload', $config);
        
        if ($this->form_validation->run() == false) {
            $data['content'] = "product/addProduct";
            $this->load->view('backend/master_dashboard', $data);
        } else {
            if ($this->upload->do_upload('pro_image')) {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
        
                // Resize and compress the uploaded image
                $this->resize_and_compress_image($upload_data['full_path'], $file_name);
        
                if ($this->Product_model->save_product($file_name)) {
                    $data['success'] = 'Product data saved successfully';
                } else {
                    $data['error'] = 'Product data not saved successfully';
                }
            } else {
                if ($this->Product_model->save_product()) {
                    $data['success'] = 'Product data saved successfully';
                } else {
                    $data['error'] = 'Product data not saved successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('add_product');
        }
    }



    

    /*=========
    /*SHOW THE PRODUCT EDIT PAGE
    ====================================*/
    public function edit_product($id)
    {
        $data['editProduct'] = $this->Product_model->edit_product($id);
        $data['content'] = "product/editProduct";
        $this->load->view('backend/master_dashboard', $data);
    }

    /*=========
    /*UPDATE THE PRODUCT DATA WITH PRODUCT_MODEL
    ====================================*/
    public function update_product($id)
    {
        $this->form_validation->set_rules('pro_title', 'Product Title', 'trim|required');
        $this->form_validation->set_rules('pro_price', 'Price', 'trim|required');
        $this->form_validation->set_rules('pro_description', 'Description', 'trim|required');
        //        $this->form_validation->set_rules('cat_id', 'Category name', 'trim|required');

        $config = array(
            'upload_path' => './uploads/product/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );
        
        $this->load->library('upload', $config);
        
        if ($this->form_validation->run() == false) {
            $data['content'] = "product/addProduct";
            $this->load->view('backend/master_dashboard', $data);
        } else {
            // Get the old image file name from the database based on $id
            $old_file_name = $this->Product_model->get_old_product_image_name($id);
        print_r($old_file_name->pro_image);
     
            if ($this->upload->do_upload('pro_image')) {
                // Upload new image
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
        
                // Resize and compress the uploaded image
                $this->resize_and_compress_image($upload_data['full_path'], $file_name);
        
                // Unlink (delete) the old image
                if ($old_file_name->pro_image && file_exists($config['upload_path'] . $old_file_name->pro_image)) {
                    unlink($config['upload_path'] . $old_file_name->pro_image);
                }
        
                // Update the product with the new image
                if ($this->Product_model->update_product($file_name, $id)) {
                    $data['success'] = 'Product data updated successfully';
                } else {
                    $data['error'] = 'Product data not updated successfully';
                }
            } else {
                // If no new image is uploaded, update without changing the image
                if ($this->Product_model->update_product_without_image($id)) {
                    $data['success'] = 'Product data updated successfully';
                } else {
                    $data['error'] = 'Product data not updated successfully';
                }
            }
        
            $this->session->set_flashdata($data);
            redirect('add_product');
        }
    }


    /*=========
    /*UPDATE THE PRODUCT IMAGE WITH PRODUCT_MODEL
    ====================================*/
    public function delete_product($id)
    {
        if ($this->Product_model->soft_delete_product($id)) {
            $data['success'] = "Product deleted successfully";
        } else {
            $data['error'] = "Product deleted not successfully";
        }
        $this->session->set_flashdata($data);
        redirect('add_product');
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


    /*=========
    /*SHOW THE SIZE ADD FORM
    ====================================*/
    public function add_size($id)
    {
        $data['editProduct'] = $this->Product_model->edit_product($id);
        $data['AllSize'] = $this->Product_model->get_all_product_size($id);
        $data['content'] = "size/addSize";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*=========
    /*SAVE THE ADMIN DATA WITH MODEL
    ====================================*/
    public function save_size()
    {
        $this->form_validation->set_rules('size_name', 'Size', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['content'] = "size/addSize";
            $this->load->view('backend/master_dashboard', $data);
        } else {
            if ($this->Product_model->save_size()) {
                $data['success'] = 'Product size save successfully';
            } else {
                $data['error'] = 'Product size save not successfully';
            }
            $this->session->set_flashdata($data);
            echo "<script>window.history.back()</script>";
        }
    }
    /*=========
    /*SHOW THE IMAGE EDIT FORM
    ====================================*/
    public function edit_size($id)
    {
        $data['editSize'] = $this->Product_model->get_size_by_id($id);
        $data['content'] = 'size/editSize';
        $this->load->view('backend/master_dashboard', $data);
    }

    /*=========
    /*Update THE ADMIN DATA WITH MODEL
    ====================================*/
    public function update_size($id)
    {
        $this->form_validation->set_rules('size_name', 'Size', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['content'] = "size/addSize";
            $this->load->view('backend/master_dashboard', $data);
        } else {
            if ($this->Product_model->update_size($id)) {
                $data['success'] = 'Product size Update successfully';
            } else {
                $data['error'] = 'Product size Update not successfully';
            }
            $this->session->set_flashdata($data);
            echo "<script>window.history.back()</script>";
        }
    }
    /*=========
    /*UPDATE THE PRODUCT IMAGE WITH PRODUCT_MODEL
    ====================================*/
    public function delete_size($id)
    {
        if ($this->Product_model->soft_delete_size($id)) {
            $data['success'] = "Size deleted successfully";
        } else {
            $data['error'] = "Size deleted not successfully";
        }
        $this->session->set_flashdata($data);
        //        redirect('add_product');
        echo "<script>window.history.back()</script>";
    }




    /*=========
    /*SHOW THE COLORS ADD FORM
    ====================================*/
    public function add_colors($id)
    {
        $data['editProductColor'] = $this->Product_model->edit_product($id);
        $data['Allcolor'] = $this->Product_model->get_all_product_colors($id);
        $data['content'] = "color/addColor";
        $this->load->view('backend/master_dashboard', $data);
    }

    /*=========
    /*SAVE THE ADMIN DATA WITH MODEL
    ====================================*/
    public function save_color()
    {
        $this->form_validation->set_rules('colors_name', 'Color', 'trim|required');
        $this->form_validation->set_rules('colors_code', 'Color code', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['content'] = "color/addColor";
            $this->load->view('backend/master_dashboard', $data);
        } else {
            if ($this->Product_model->save_color()) {
                $data['success'] = 'Product color save successfully';
            } else {
                $data['error'] = 'Product color save not successfully';
            }
            $this->session->set_flashdata($data);
            echo "<script>window.history.back()</script>";
        }
    }

    public function save_color_update()
    {
        $this->form_validation->set_rules('colors_name', 'Color', 'trim|required');
        $this->form_validation->set_rules('colors_code', 'Color code', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['content'] = "color/addColor";
            $this->load->view('backend/master_dashboard', $data);
        } else {

            $data = array(
                'colors_name' => $this->input->post('colors_name'),
                'colors_code' => $this->input->post('colors_code')
            );
            $this->db->where('colors_id', $this->input->post('my_id'));
            $result = $this->db->update('tbl_colors', $data);
            if ($result) {
                $data['success'] = 'Product color update successfully';
            } else {
                $data['error'] = 'Product   not update';
            }
            $this->session->set_flashdata($data);
            redirect('add_product');
        }
    }

    /*=========
    /*SHOW THE IMAGE EDIT FORM
    ====================================*/
    public function edit_colors($id)
    {
        $data['editColors'] = $this->Product_model->get_color_by_id($id);
        $data['content'] = 'color/editColor';
        $this->load->view('backend/master_dashboard', $data);
    }






    /*=========
    /*SHOW THE IMAGE ADD FORM
    ====================================*/
    public function add_image($id)
    {
        $data['productId'] = $this->Product_model->edit_product($id);
        $data['allImage'] = $this->Product_model->get_all_product_images($id);
        $data['content'] = "image/addImage";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*=========
    /*SAVE THE PRODUCT IMAGE WITH PRODUCT_MODEL
    ====================================*/
    public function save_image()
    {
        $config = array(
            'upload_path' => './uploads/images/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );
        
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('image')) {
            // Get uploaded file information
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
        
            // // Resize the uploaded image before saving
            // $this->load->library('image_lib');
            // $resize_config = array(
            //     'image_library' => 'gd2',
            //     'source_image' => $upload_data['full_path'],
            //     'maintain_ratio' => true,
            //     'width' => 600, // Adjust the width as needed
            //     'height' => 400, // Adjust the height as needed
            // );
            // $this->image_lib->initialize($resize_config);
            // $this->image_lib->resize();
            // $this->image_lib->clear();
        
            // // Set a new config for compressing the image
            // $compress_config = array(
            //     'source_image' => $upload_data['full_path'],
            //     'quality' => '80%', // Adjust the quality as needed (80% is just an example)
            // );
            // $this->image_lib->initialize($compress_config);
            // $this->image_lib->resize();
            // $this->image_lib->clear();
        
            // Move the uploaded file to the folder
            $new_file_path = $config['upload_path'] . $file_name;
            rename($upload_data['full_path'], $new_file_path);
        
            // Save the file name and other details to the database
            if ($this->Product_model->save_image($file_name)) {
                $data['success'] = 'Product Image saved successfully';
            } else {
                $data['error'] = 'Product Image not saved successfully';
            }
        
            $this->session->set_flashdata($data);
            redirect('add_product');
        } else {
            $data['error'] = $this->upload->display_errors();
            $this->session->set_flashdata($data);
            redirect('add_product');
        }
        
    }
    /*=========
    /*SHOW THE IMAGE EDIT FORM
    ====================================*/
    public function edit_image($id)
    {
        $data['editImages'] = $this->Product_model->get_images_by_id($id);
        $data['content'] = 'image/editImage';
        $this->load->view('backend/master_dashboard', $data);
    }
    /*=========
    /*UPDATE THE PRODUCT IMAGE WITH PRODUCT_MODEL
    ====================================*/
    public function update_image($id)
    {
        $config = array(
            'upload_path' => './uploads/images/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );
        
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('image')) {
            // Get uploaded file information
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
        
            // Extract the filename without extension
            // $filename_without_extension = pathinfo($file_name, PATHINFO_FILENAME);
        
            // Create a folder based on the filename (or any unique identifier)
            $folder_path = './uploads/images/';
            if (!is_dir($folder_path)) {
                mkdir($folder_path, 0777, true); // Create the folder if it doesn't exist
            }
        
            // Move the uploaded file to the folder
            $new_file_path = $folder_path . $file_name;
            rename($upload_data['full_path'], $new_file_path);
        
            // Resize the uploaded image before saving
            // $this->load->library('image_lib');
            // $resize_config = array(
            //     'image_library' => 'gd2',
            //     'source_image' => $new_file_path,
            //     'maintain_ratio' => true,
            //     'width' => 600, // Adjust the width as needed
            //     'height' => 400, // Adjust the height as needed
            // );
            // $this->image_lib->initialize($resize_config);
            // $this->image_lib->resize();
            // $this->image_lib->clear();
        
            // // Compress the image to around 100 KB
            // $compress_config = array(
            //     'source_image' => $new_file_path,
            //     'quality' => 80, // Adjust the quality as needed (80 is just an example)
            //     'new_image' => $new_file_path, // Overwrite the source image with the compressed one
            // );
            // $this->image_lib->initialize($compress_config);
            // $this->image_lib->resize();
            // $this->image_lib->clear();
        
            // Get the old image file name from the database based on $id
        $old_file_name = $this->Product_model->get_old_image_name($id);
        
       
            // Unlink (delete) the old image
            if ($old_file_name->image && file_exists($folder_path . $old_file_name->image)) {
                unlink($folder_path . $old_file_name->image);
            }
        
            // Save the new file name and other details to the database
            if ($this->Product_model->update_image($file_name, $id)) {
                $data['success'] = 'Product Image updated successfully';
            } else {
                $data['error'] = 'Product Image not updated successfully';
            }
        
            $this->session->set_flashdata($data);
            redirect('add_product');
        } else {
            $data['error'] = $this->upload->display_errors();
            $this->session->set_flashdata($data);
            redirect('add_product');
        }
        
    }
    /*=========
    /*UPDATE THE PRODUCT IMAGE WITH PRODUCT_MODEL
    ====================================*/
    public function delete_image($id)
    {
        if ($this->Product_model->soft_delete_image($id)) {
            $data['success'] = "Images deleted successfully";
        } else {
            $data['error'] = "Images deleted not successfully";
        }
        $this->session->set_flashdata($data);
        //        redirect('add_product');
        echo "<script>window.history.back()</script>";
    }





    public function productAddTocart()
    {
        $product_id = $this->input->post('product_id');
        $size = $this->input->post('size');
        $pro_color = $this->input->post('color');
        $quantity = $this->input->post('quantity');
        if (isset($quantity)) {
             $quantity;
        }else{
            $quantity = 1;
        }
        $s_id = session_id();
        $stmt1 = "SELECT * FROM tbl_cart WHERE 	pro_id='$product_id' AND s_id='$s_id' AND pro_size = '$size' ";

        $sql1  = $this->db->query($stmt1);
        $result1 = $sql1->num_rows();

        if ($result1 > 0) {
            echo 'alreadyAdded';
        } else {
            /// Add to cart product
            if (isset($product_id)) {
                $stmt = "SELECT * FROM tbl_products WHERE  	pro_id='$product_id'";
                $sql  = $this->db->query($stmt);
                $result = $sql->result_array();

                $data = array(
                    'cat_id' => $result[0]['cat_id'],
                    'pro_id' => $result[0]['pro_id'],
                    'pro_title' => $result[0]['pro_title'],
                    'pro_description' => $result[0]['pro_description'],
                    'pro_image' => $result[0]['pro_image'],
                    'pro_price' => $result[0]['pro_price'],
                    'pro_old_price' => $result[0]['pro_old_price'],
                    'pro_status' => $result[0]['pro_status'],
                    'pro_size' => $size,
                    'pro_color' => $pro_color,
                    's_id' => session_id(),
                    'pro_quantity' => $quantity,
                   
                );
                $added = $this->db->insert('tbl_cart', $data);
                if ($added) {
                    echo "cartAdded";
                }
            }
        }
    }

    public function productAddTocartAno()
    {
        $product_id = $this->input->post('product_id');
        $s_id = session_id();
        $stmt1 = "SELECT * FROM tbl_cart WHERE      pro_id='$product_id' AND    s_id='$s_id'";

        $sql1  = $this->db->query($stmt1);
        $result1 = $sql1->num_rows();

        if ($result1 > 0) {
            echo 'alreadyAdded';
        } else {
            /// Add to cart product
            if (isset($product_id)) {
                $stmt = "SELECT * FROM tbl_products WHERE   pro_id='$product_id'";
                $sql  = $this->db->query($stmt);
                $result = $sql->result_array();

                $data = array(
                    'cat_id' => $result[0]['cat_id'],
                    'pro_id' => $result[0]['pro_id'],
                    'pro_title' => $result[0]['pro_title'],
                    'pro_description' => $result[0]['pro_description'],
                    'pro_image' => $result[0]['pro_image'],
                    'pro_price' => $result[0]['pro_price'],
                    'pro_old_price' => $result[0]['pro_old_price'],
                    'pro_status' => $result[0]['pro_status'],
                    's_id' => session_id(),
                    'pro_quantity' => $this->input->post('q')
                );
                $added = $this->db->insert('tbl_cart', $data);
                if ($added) {
                    echo "cartAdded";
                }
            }
        }
    }



    public function cartLoad()
    {
        $html = '<ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Shopping Cart</a></li>
    </ul>
    
    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td style="width:200px; class="text-center">Image</td>
                            <td class="text-left">Product Name</td>
                            <td class="text-left">Quantity</td>
                            <td class="text-right">Unit Price</td>
                            <td class="text-right">Total</td>
                        </tr>
                    </thead>
         ';



        $s_id = session_id();
       
        $stmt1 = "SELECT * FROM tbl_cart WHERE	s_id='$s_id'";

        $sql1  = $this->db->query($stmt1);
        $items = $sql1->result_array();





        $amountTotal = 0;
        foreach ($items as $key => $value) {


            $amount = $value['pro_price'] * $value['pro_quantity'];
            $amountTotal = $amountTotal + $amount;
            $html .= '
            
            <tbody>
            <tr>
                <td class="text-center"> 
                <a href="' . base_url() . 'single/' . $value["pro_id"] . '"><img style="max-width: 20%;" src="' . base_url() . 'uploads/product/' . $value["pro_image"] . '" alt="' . $value["pro_title"] . '">
                </a> 
                </td>
                <td class="text-left"><a href="' . base_url() . 'single/' . $value["pro_id"] . '">' . $value["pro_title"] . '</a><br>
                </td>
                <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                    <input type="number"  class="quantity-field form-control" value="' . $value["pro_quantity"] . '"  id="quantity_up" data-id="' . $value['cart_id'] . '"  >
                    <span class="input-group-btn">
                    <button type="button"  class="btn btn-danger"  data-original-title="Remove" id="remnoveItem" data-id="' . $value['cart_id'] . '"><i class="fa fa-times-circle"></i></button>
                    </span></div></td>
                <td class="text-right">' . $value['pro_price'] . ' tk</td>
                <td class="text-right">' . $amount . ' tk</td>
      
        ';
        }




        $stmt1 = "SELECT * FROM tbl_cart WHERE  s_id='$s_id'";
        $sql1  = $this->db->query($stmt1);
        $total_cart_ele = $sql1->num_rows();



        $grand = $amountTotal + 50;


        $stmt1 = "SELECT * FROM tbl_cart WHERE  s_id='$s_id'";
        $sql1  = $this->db->query($stmt1);
        $total_cart_ele = $sql1->num_rows();

        if ($total_cart_ele > 0) {
            $html .= '
            </tr>
            </tbody>
            
        </table>
        </div>
        </div>
				<div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-right"><strong>Sub-Total:</strong></td>
                                <td class="text-right">' . $amountTotal . 'Tk</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Delivery Charge:</strong></td>
                                <td class="text-right">50 Tk</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>VAT (0%):</strong></td>
                                <td class="text-right">0 Tk</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Total:</strong></td>
                                <td class="text-right">' . $grand . ' Tk</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="buttons clearfix">
                <div class="pull-left"><a href="' . base_url() . '" class="btn btn-default">Continue Shopping</a></div>
                <div class="pull-right"><a href="' . base_url() . 'add_checkout" class="btn btn-primary">Checkout</a></div>
            </div>
        </div>
        
        
    </div>';
        } else {
            $html .= '
            <span style="text-align:center;color:red">Your Cart is Empty !!</span>
        </div>';
        }


        echo $html;
    }


    public function cartLoadForOrderHome()
    {
        $html = '<ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Shopping Cart</a></li>
    </ul>
    
    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td style="width:150px; class="text-center">Image</td>
                            <td class="text-left">Product Name</td>
                            <td class="text-left">Quantity</td>
                            <td class="text-right">Unit Price</td>
                            <td class="text-right">Total</td>
                        </tr>
                    </thead>';



        $s_id = session_id();
        $stmt1 = "SELECT * FROM tbl_cart WHERE	s_id='$s_id'";

        $sql1  = $this->db->query($stmt1);
        $items = $sql1->result_array();





        $amountTotal = 0;
        foreach ($items as $key => $value) {


            $amount = $value['pro_price'] * $value['pro_quantity'];
            $amountTotal = $amountTotal + $amount;
            $html .= '
            <tbody>
            <tr>
                <td class="text-center"> 
                <a href="' . base_url() . 'single/' . $value["pro_id"] . '"><img style="max-width: 40%;" src="' . base_url() . 'uploads/product/' . $value["pro_image"] . '" alt="' . $value["pro_title"] . '">
                </a> 
                </td>
                <td class="text-left"><a href="' . base_url() . 'single/' . $value["pro_id"] . '">' . $value["pro_title"] . '</a><br>
                </td>
               
                <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                    <input type="number" class="quantity-field form-control" value="' . $value["pro_quantity"] . '"  id="quantity_up" data-id="' . $value['cart_id'] . '"  >
                    <span class="input-group-btn">
                    <button type="button"  class="btn btn-danger"  data-original-title="Remove" id="remnoveItem" data-id="' . $value['cart_id'] . '"><i class="fa fa-times-circle"></i></button>
                    </span></div></td>
                <td class="text-right">' . $value['pro_price'] . ' tk</td>
                <td class="text-right">' . $amount . ' tk</td>
      
        ';
        }



        $grand = $amountTotal + 50;
        $html .= '
        </tr>
        </tbody>
        
    </table>
    </div>
    </div>
            <div class="row">
            <div class="col-sm-4 col-sm-offset-8">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="text-right"><strong>Sub-Total:</strong></td>
                            <td class="text-right">' . $amountTotal . 'Tk</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Delivery Charge:</strong></td>
                            <td class="text-right">50 Tk</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>VAT (0%):</strong></td>
                            <td class="text-right">0 Tk</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Total:</strong></td>
                            <td class="text-right">' . $grand . ' Tk</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    ';

        echo $html;
    }



    public function cartLoadForOrder()
    {
        $html = '    <div class="box-inner">
        <div class="table-responsive checkout-product">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-left name" colspan="2">Product Name</th>
                        <th class="text-center quantity">Quantity</th>
                        <th class="text-center checkout-price">Unit Price</th>
                        <th class="text-right total">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>';



        $s_id = session_id();
        $stmt1 = "SELECT * FROM tbl_cart WHERE	s_id='$s_id'";

        $sql1  = $this->db->query($stmt1);
        $items = $sql1->result_array();
        $amountTotal = 0;
        foreach ($items as $key => $value) {
            $amount = $value['pro_price'] * $value['pro_quantity'];
            $amountTotal = $amountTotal + $amount;
            $html .= '
            
           
                    <td class="text-left name" colspan="2">
                        <a href=""><img style="max-width: 25%;"src="' . base_url() . 'uploads/product/' . $value["pro_image"] . '" alt="' . $value["pro_title"] . '" title="' . $value["pro_title"] . '"></a>
                        <a href="" class="product-name">' . $value["pro_title"] . '</a>
                    </td>
                    <td class="text-left quantity" style="width: 30%;">
                        <div class="input-group">
                        <input type="number" style="width:70%" class="form-control" value="' . $value["pro_quantity"] . '"  id="quantity_up" data-id="' . $value['cart_id'] . '"  >
                            <span class="input-group-btn">
                                <span data-toggle="tooltip" title="" class="btn-delete" data-original-title="Remove" id="remnoveItem" data-id="' . $value['cart_id'] . '" style="font-size:23px"><i class="fa fa-trash-o"></i></span>
                            </span>
                        </div>
                    </td>
                    <td class="text-right price">' . $value['pro_price'] . ' TK</td>
                    <td class="text-right total">' . $amount . ' Tk</td>
                </tr>
            
            ';
        }


        $grand = $amountTotal + 50;
        $delivery = 0;
        $html .= '
        
        </tbody>
            <tfoot>
                <tr>
                <input type="hidden" name="hidden_page_sub_total_amo" id="hidden_page_sub_total_amo" value="' . $amountTotal . '">
                    <td colspan="4" class="text-left">Sub-Total:</td>
                    <td class="text-right">' . $amountTotal . ' TK</td>
                </tr>
                <tr>
                <input type="hidden" name="delivary_charge" id="delivary_charge" value="' . $delivery . '">
                    <td colspan="4" class="text-left">Delivery:</td>
                    <td class="text-right">50 Tk</td>
                </tr>
              
                <tr>
                <input type="hidden" name="hidden_page_total_amount" id="hidden_page_total_amount" value="' . $grand . '">
                    <td colspan="4" class="text-left">Total:</td>
                    <td class="text-right">' . $grand . ' TK</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div id="payment-confirm-button" class="payment-">
        <h2 class="secondary-title"><i class="fa fa-credit-card"></i>Payment Details</h2>
        <div class="checkbox " style="margin:5%">
        <label style="font-weight: 800;">
            <input style="font-weight: 800" type="checkbox" name="shipping_address" value="1" checked="checked"> Cash on Delivery
        </label>
        </div>
        <fieldset id="shipping-address" style="display:none">
        <div class=" checkout-shipping-form">
            <div class="box-inner">
                <p>payment information here</p>
            </div>
        </div>
        <input type="hidden" name="default_zone_id" id="default_zone_id" value="3655">
        </fieldset>
    </div>
</div>

            
         ';
        if (isset($_SESSION['first_name'])) {
            $html .= ' 
            <div class="confirm-order">
            <button id="orderNow" data-loading-text="Loading..." class="btn btn-primary button confirm-button">Confirm Order</button>
        </div>';
        } else {
            $html .= '
            <div class="confirm-order">
            <button id="pleaseLogin" data-loading-text="Loading..." class="btn btn-primary button confirm-button">Confirm Order</button>
        </div>';
        }
        $html .= '
        </div>';


        echo $html;
    }

    public function orderNow()
    {

        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');
        $district_id = $this->input->post('district_id');

        $amount = $this->input->post('sub_total_amo');
        $delivery_charge = $this->input->post('delivary_charge');
        $total_amo = $this->input->post('total_amo');
        /// Order Master Table 
        if (isset($_SESSION['c_id'])) {
            $customer = $_SESSION['c_id'];
            $Login = 'Yes';
            }else{
                $customer = '0';
            $Login = 'No';
            }
        $data = array(
            'order_status' => 'p',
            'order_date' => date('Y-m-d'),
            'order_time' => date('Y-m-d H:m:s'),
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
            'Login' => $Login,
            'district_id' => $district_id,
            'c_id' => $customer,
            'amount' => $amount,
            'delivery_charge' => $delivery_charge,
            'total_amount' => $total_amo
        );
        $this->db->insert('tbl_orders_master', $data);
        $insert_id = $this->db->insert_id();
        if ($insert_id) {
            // Order detail table
            $order_success = '';
            $s_id = session_id();
            $stmt1 = "SELECT * FROM tbl_cart WHERE  s_id='$s_id'";
            $sql1  = $this->db->query($stmt1);
            $total_cart_ele = $sql1->num_rows();

            if ($total_cart_ele > 0) {
                $stmt = "SELECT * FROM tbl_cart WHERE  s_id='$s_id'";
                $sql  = $this->db->query($stmt);
                $dataResult = $sql->result_array();

                if (isset($_SESSION['c_id'])) {
                    $customer = $_SESSION['c_id'];
                    $Login = 'Yes';
                  }else{
                    $customer = '0';
                    $Login = 'No';
                  
                  }
                foreach ($dataResult as $key => $value) {
                    $data = array(
                        'order_pro_id' => $value['pro_id'],
                        'order_c_id' => $customer,
                        'order_time' => date('Y-m-d H:m:s'),
                        'order_date' => date('Y-m-d'),
                        'order_status_order' => 'p',
                        'master_id' => $insert_id,
                        'pro_quantity' => $value['pro_quantity']
                    );
                    $result = $this->db->insert('tbl_orders', $data);
                    if ($result) {
                        $order_success =  "order_success";
                    } else {
                        echo "not_order";
                    }
                }
            } else {
                echo "cart_is_empty";
            }

            if ($order_success == 'order_success') {
                $s_id = session_id();
                $this->db->where('s_id', $s_id);
                $this->db->delete('tbl_cart');


                echo "order_success";
            }
        } else {
            echo "not_order";
        }
    }


    public function view_master_detail($id = 0)
    {
        $stmt1 = "SELECT * FROM tbl_orders_master WHERE  order_m_id='$id' LIMIT 1";
        $sql1  = $this->db->query($stmt1);
        $cu_result = $sql1->result_array();
        $data['customer_html'] = '';

        $c_id = $cu_result[0]['c_id'];
        $stmt11 = "SELECT * FROM tbl_customer WHERE  c_id='$c_id' LIMIT 1";
        $sql1_1  = $this->db->query($stmt11);
        $cu_result_1 = $sql1_1->result_array();



        $data['customer_html'] .= '<td><table width="100%">
    <h4>Customer  Address</h4><hr>
                    <tr>
                        <td><strong>Customer Name </strong></td>
                        <td>:</td>
                        <td>' . $cu_result_1[0]['first_name'] . ' ' . $cu_result_1[0]['last_name'] . '</td>
                    </tr> 
                    <tr>
                        <td width="35%"><strong>Phone or Mobile </strong></td>
                        <td>: </td>
                        <td>' . $cu_result_1[0]['phone'] . '                             
                        </td>
                    </tr> 

                      
                     <tr>
                        <td><strong>Customer Address </strong></td>
                        <td>:</td>
                        <td>' . $cu_result_1[0]['address'] . '                            
                        </td>
                    </tr>
                     <tr>
                        <td><strong>Email </strong></td>
                        <td>:</td>
                        <td>' . $cu_result_1[0]['email'] . '                            
                        </td>
                    </tr>
                           
                </table>
            </td>
            <td>
                <table width="100%">
                <h4>Delivery to Address</h4><hr>
                 <tr>
                        <td><strong> Name </strong></td>
                        <td>:</td>
                        <td>' . $cu_result[0]['name'] . '</td>
                    </tr> 
                    <tr>
                        <td width="35%"><strong>Phone or Mobile </strong></td>
                        <td>: </td>
                        <td>' . $cu_result[0]['phone'] . '                             
                        </td>
                    </tr> 
                     <tr>
                        <td><strong> Address </strong></td>
                        <td>:</td>
                        <td>' . $cu_result[0]['address'] . '                            
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Order time </strong></td>
                        <td>:</td>
                        <td>' . $cu_result[0]['order_time'] . '</td>
                    </tr>    
                     
                </table>
            </td>';
        $data['detail_html'] = '';

        $stmt1 = "SELECT * FROM tbl_orders WHERE  master_id='$id' ORDER BY order_id DESC";
        $sql1  = $this->db->query($stmt1);
        $data_result = $sql1->result_array();
        $pro_prices = 0;

        foreach ($data_result as $key => $value1) {
            $pro_id = $value1['order_pro_id'];
            $stmt1 = "SELECT * FROM tbl_products WHERE  pro_id='$pro_id'";
            $sql1  = $this->db->query($stmt1);
            $data_result = $sql1->result_array();

            foreach ($data_result as $key => $value) {
                $subtotal = $value['pro_price'] * $value1['pro_quantity'];

                $pro_prices = $pro_prices + $subtotal;

                $data['detail_html'] .= '<tr align="center">
            <td>1</td>
            <td colspan="2"><img alt="photo" style="width:40px;height:40px" src="' . base_url() . 'uploads/product/' . $value['pro_image'] . '"></td>
            <td>' . $value['pro_title'] . '</td>
            <td>' . $value1['pro_quantity'] . '</td>
            <td> ' . $value['pro_price'] . '</td>
            <td style=" text-align: right; width: 6%;">' . $subtotal . '</td>
        </tr>';
            }
        }
        $pro_price_g = $pro_prices + 50;
        $data['detail_html'] .= '<tr>
            <td colspan="4" style="border:0px"></td>
            <td style="border:0px">Sub Total : </td>
            <td style="border:0px; text-align: right;">' . $pro_prices . ' TK</td>
        </tr>
        <tr>
            <td colspan="4" style="border:0px"></td>
            <td style="border:0px">Selivary charge :  </td>
            <td style="border:0px; text-align: right;">50 TK  </td>
        </tr>
        <tr>
            <td colspan="4" style="border:0px"></td>
            <td style="border:0px">Grand Total : </td>
            <td style="border:0px; text-align: right;">' . $pro_price_g . ' TK</td>
        </tr>';

        $this->load->view('backend/detail', $data);
    }

    public function  c_cu()
    {
        $first_name = $this->input->post('first_name');
        // $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');
        // $zip_code = $this->input->post('zip_code');
        // $city = $this->input->post('city');
       


        $stmt1 = "SELECT * FROM tbl_customer WHERE    email='$email'";

        $sql1  = $this->db->query($stmt1);
        $result1 = $sql1->num_rows();

        if ($result1 > 0) {
            echo "already exit";
        } else {
            if ($this->input->post('action') == "create") {
                $data = array(
                    'first_name' => $first_name,
                    // 'last_name' => $last_name,
                    'email' => $email,
                    'password' => md5($password),
                    'phone' => $phone,
                    'address' => $address,
                    'status' => 1
                    // 'zip_code' => $zip_code,
                    // 'city' => $city
                );


                $result = $this->db->insert('tbl_customer', $data);
                if ($result) {
                    echo 'created';
                } else {
                    echo 'notLogin';
                }
            }
        }



        if ($this->input->post('action') == "update") {
        }
    }
    public function logout_customer(){
        unset(
            $_SESSION['c_id'],
            $_SESSION['first_name'],
            $_SESSION['email'],
            $_SESSION['phone'],
            $_SESSION['address']
    );

        redirect('home');
      
    }

    public function tbl_orders_master()
    {
        $email  = $this->input->post('email');
        $password  = md5($this->input->post('password'));
        $stmt1 = "SELECT * FROM tbl_customer WHERE  	email='$email' AND  	password='$password'";

        $sql1  = $this->db->query($stmt1);
        $result1 = $sql1->num_rows();

        if ($result1 > 0) {
            echo 'login';
            $stmt1 = "SELECT * FROM tbl_customer WHERE      email='$email' AND      password='$password' LIMIT 1";
            $sql1  = $this->db->query($stmt1);
            $user_data = $sql1->result_array();
             $session_datas=array(
             "c_id"=> $user_data[0]['c_id'],
             "first_name"=> $user_data[0]['first_name'],
             "email"=> $user_data[0]['email'],
             "phone"=> $user_data[0]['phone'],
             "address"=> $user_data[0]['address']
             );
            $this->session->set_userdata($session_datas);
           

            // setcookie("c_id", $user_data[0]['id'], time() + 31556926, '/');
            // setcookie("first_name", $user_data[0]['first_name'], time() + 31556926, '/');
            // //setcookie("last_name", $user_data[0]['last_name'], time() + 31556926, '/');
            // setcookie("email", $user_data[0]['email'], time() + 31556926, '/');
            // setcookie("phone", $user_data[0]['phone'], time() + 31556926, '/');
            // setcookie("loginCheck", true, time() + 31556926, '/');
        } else {
            echo 'Access not match';
        }
    }


    public function removeCart()
    {
        $cart_id = $this->input->post('id');

        //        print_r($cart_id);
        //        exit();
        //        $s_id = session_id();
        //       $this->db->where('cart_id','$cart_id');
        //        $result = $this->db->delete('tbl_cart');

        $sql = "DELETE  FROM tbl_cart WHERE cart_id='$cart_id'";
        $result = $this->db->query($sql);

        if ($result) {
            echo 'deleted';
        } else {
            echo 'noDeleted';
        }
    }


    public function quantiyUpdate()
    {
        $id = $this->input->post('id');
        $qury = $this->input->post('qury');
        $size = $this->input->post('size');
        if ($size) {
            $data = array(
                'pro_size' => $size
            );
        }else {
            $data = array(
                'pro_quantity' => $qury
            );
        }
  
        $this->db->where('cart_id', $id);
        $result = $this->db->update('tbl_cart', $data);

        if ($result) {
            echo 'quantityUpdate';
        } else {
            echo 'NOUpdate';
        }
    }
}