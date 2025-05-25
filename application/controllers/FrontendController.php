<?php

/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 24-Apr-19
 * Time: 9:46 AM
 */

class FrontendController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    /*=================================*/
    public function index()
    {
        $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
        $data['sliderList'] = $this->Slider_model->get_all_slider();
        $data['categoryList'] = $this->Category_model->get_all_sub_category();
        $data['whyChoose'] = $this->Commonpart_model->get_commonpart_by_type('whychoose');
        $data['getFeatured'] = $this->Featured_model->get_featured_by_type('featured', 2);
        $data['specialFeatured'] = $this->Featured_model->get_featured_by_type('special_featured', 3);
        $data['getFeaturedOffer'] = $this->Featured_model->get_featured_by_type('offer', 2);
        $data['AllProductData'] = $this->Product_model->get_all_product();
        $data['getBrand'] = $this->Brand_model->get_all_brand();
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "homepage";
        $this->load->view('frontend/master_layout', $data);
    }



    /*======================
    /*FRONTEND ABOUT US PAGE
    ====================================*/
    public function about_us()
    {
        $data['categoryList'] = $this->Category_model->get_all_category();
        $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
        $data['getTeamData'] = $this->Team_model->get_all_team();
        $data['getFeatured'] = $this->Featured_model->get_featured_by_type('featured', 2);
        $data['whyChoose'] = $this->Commonpart_model->get_commonpart_by_type('whychoose');
        $data['specialFeatured'] = $this->Featured_model->get_featured_by_type('special_featured', 3);
        $data['getFeaturedOffer'] = $this->Featured_model->get_featured_by_type('offer', 2);
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "aboutus";
        $this->load->view('frontend/master_layout', $data);
    }


    /*======================
    /*FRONTEND PRODUCT PAGE
    ====================================*/
    public function login()
    {
        $data['categoryList'] = $this->Category_model->get_all_category();
        $data['AllProductData'] = $this->Product_model->get_all_product();
        $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "login";
        $this->load->view('frontend/master_layout', $data);
    }

    /*======================
    /*FRONTEND PRODUCT PAGE
    ====================================*/
    public function register()
    {
        $data['categoryList'] = $this->Category_model->get_all_category();
        $data['AllProductData'] = $this->Product_model->get_all_product();
        $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "register";
        $this->load->view('frontend/master_layout', $data);
    }


    /*======================
    /*FRONTEND PRODUCT PAGE
    ====================================*/
    public function ordertracking()
    {
        $data['categoryList'] = $this->Category_model->get_all_category();
        $data['AllProductData'] = $this->Product_model->get_all_product();
        $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "track";
        $this->load->view('frontend/master_layout', $data);
    }


    /*======================
    /*FRONTEND CART PAGE
    ====================================*/
    public function page($title)
    {
        $data['Allcommonpart'] = $this->Commonpart_model->get_commonpart_by_type($title);
        $data['content'] = "page";
        $this->load->view('frontend/master_layout', $data);
    }
    public function add_cart()
    {
        $data['categoryList'] = $this->Category_model->get_all_category();
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "cart";
        $this->load->view('frontend/master_layout', $data);
    }



    /*======================
    /*FRONTEND CART PAGE
    ====================================*/
    public function add_checkout()
    {
        $data['categoryList'] = $this->Category_model->get_all_category();
        $s_id = session_id();
        $stmt1 = "SELECT * FROM tbl_cart WHERE  s_id='$s_id'";
        $sql1  = $this->db->query($stmt1);
        $total_cart_ele = $sql1->num_rows();
        if ($total_cart_ele > 0) {
            $data['getContact'] = $this->Contact_model->get_all_contact();
            $data['content'] = "checkout";


            $stmt = "SELECT * FROM tbl_district ";
            $sql  = $this->db->query($stmt);
            $data['district'] = $sql->result_array($sql);
            $this->load->view('frontend/master_layout', $data);
        } else {
            header("Location:" . base_url());
        }
    }


    /*======================
    /*FRONTEND CART PAGE
    ====================================*/
    public function add_success()
    {
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "success";
        $this->load->view('frontend/master_layout', $data);
    }



    /*======================
    /*FRONTEND MEN PAGE
    ====================================*/
    public function men()
    {
        $data['categoryList'] = $this->Category_model->get_all_category();
        $data['menProduct'] = $this->Product_model->get_product_by_men();
        $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "men";
        $this->load->view('frontend/master_layout', $data);
    }


    /*======================
    /*FRONTEND MEN PAGE
    ====================================*/
    public function women()
    {
        $data['categoryList'] = $this->Category_model->get_all_category();
        $data['womenProduct'] = $this->Product_model->get_product_by_women();
        $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "women";
        $this->load->view('frontend/master_layout', $data);
    }
    public function category($id = 0)
    {

        $stmtc = "SELECT * FROM tbl_category WHERE cat_id='$id' LIMIT 1";
        $sqlc = $this->db->query($stmtc);
        $resultc = $sqlc->result_array();

        $data['getCatName'] = $resultc[0]['cat_name'];

        if ($id == 0) {
            header("Location:" . base_url());
        } else {
            $data['categoryList'] = $this->Category_model->get_all_category();
            $data['womenProduct'] = $this->Product_model->get_product_by_women();
            $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
            $data['getContact'] = $this->Contact_model->get_all_contact();




            $stmt = "SELECT tbl_products.*,tbl_category.cat_name FROM tbl_products 
            INNER JOIN tbl_category on tbl_products.cat_id = tbl_category.cat_id
            WHERE tbl_products.cat_id='$id' ORDER BY tbl_products.pro_id DESC";
            $sql = $this->db->query($stmt);
            $result = $sql->result_array();
            $data['content'] = '';
            $data['html']  = ' <!-- Main Container  -->
      
            

<div class="container product-detail">
<div class="row">
    <div id="content" class="col-md-12 col-sm-12 col-xs-12">
        <div class="products-category">
            <div class="products-category">
                <div class="product-filter filters-panel">
                    <div class="row">
                        <div class="col-sm-2 view-mode hidden-sm hidden-xs">
                            <div class="list-view">
                                <button class="btn btn-outline-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i></button>
                                <button class="btn btn-outline-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="products-list grid row number-col-3 so-filter-gird">';

            foreach ($result as $key => $product) {
                $data['html'] .= '
                                <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container  second_img  ">
                                                <a href="' . base_url() . 'single/' . $product['pro_id'] . '" title=' . $product['pro_title'] . '>
                                                    <img src="' . base_url() . 'uploads/product/' . $product['pro_image'] . '" alt=' . $product['pro_title'] . ' " title=' . $product['pro_title'] . ' class="img-2 img-responsive">
                                                </a>
                                            </div>

                                            <div class="box-label">
                                                <span class="label-product label-sale">
                                                    Sale
                                                </span>
                                            </div>
                                        </div>

                                        <div class="right-block">
                                            <div class="caption">
                                                <h4><a href="' . base_url() . 'single/' . $product['pro_id'] . '">' . $product['pro_title'] . '</a></h4>
                                                <div class="total-price">
                                                    <div class="price price-left">
                                                        <span class="price-new">' . $product['pro_price'] . ' TK</span> <span class="price-old">' . $product['pro_old_price'] . ' TK</span>
                                                    </div>
                                                    <div class="price-sale price-right">
                                                        <span class="discount">-20%
                                                            <strong>OFF</strong>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="description item-desc hidden">
                                                    <p>' . $product['pro_description'] . '</p>
                                                </div>
                                                <div class="list-block hidden">
                                                    <form id="addToCartForm" action="post">
                                                    <input type="hidden" name="product_id" id="product_id" value=' . $product['pro_id'] . '>
                                                        <button class="addToCart" name="submit" value="Add to cart" type="submit" title="" Cart id="addToCartProduct" data-id=' . $product['pro_id'] . '><span>Add to Cart </span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <form id="addToCartForm" action="post">
                                                    
                                        <input type="hidden" name="product_id" id="product_id" value=' . $product['pro_id'] . '>
                                                    <button name="submit" value="Add to cart" class="addToCart btn-outline-button" type="submit" id="addToCartProduct" data-id="' . $product['pro_id'] . '" title="" ><span class="hidden">Add to Cart </span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                ';
            }
            $data['html'] .= '
            </div>

                  
            </div>

        </div>
    </div>

</div>
</div>

<!-- //Main Container -->';
            $data['content'] = 'category';
            $this->load->view('frontend/master_layout', $data);
        }
    }


    /*======================
    /*FRONTEND GARMENTS PAGE
    ====================================*/
    public function garments()
    {
        $data['categoryList'] = $this->Category_model->get_all_category();
        $data['garmentProduct'] = $this->Product_model->get_product_by_garment();
        $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "garments";
        $this->load->view('frontend/master_layout', $data);
    }


    /*======================
    /*FRONTEND CONTACT US PAGE
    ====================================*/
    public function contact_us()
    {
        $data['categoryList'] = $this->Category_model->get_all_category();
        $data['getBrand'] = $this->Brand_model->get_all_brand();
        $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "contactus";
        $this->load->view('frontend/master_layout', $data);
    }
    
    public function corporate()
    {
        $data['categoryList'] = $this->Category_model->get_all_category();
        $data['getBrand'] = $this->Brand_model->get_all_brand();
        $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "corporate";
        $this->load->view('frontend/master_layout', $data);
    }

    public function Shop($f_data)
    {
        $data['AllProductData'] = $this->Product_model->get_all_product();
        // $data['AllProductData'] = $this->Product_model->get_all_product_filter($f_data);
        $data['categoryList'] = $this->Category_model->get_all_category();
        $data['getBrand'] = $this->Brand_model->get_all_brand();
        $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "shop";
        $this->load->view('frontend/master_layout', $data);
    }



    /*======================
    /*FRONTEND PRODUCT SINGLE PAGE
    ====================================*/
    public function get_product_by_id()
    {
       $productId = $this->input->post('productId');
       $responseData = $this->db->query("SELECT p.pro_id,p.pro_title,p.pro_image,p.pro_price,s.size_name,s.size_id  FROM tbl_size s
       JOIN tbl_products p  on p.pro_id = s.product_id
       where p.pro_id = $productId and s.size_status =1;")->result();
        $jsonResponse = json_encode($responseData);

        // Set the response content type to JSON
        $this->output->set_content_type('application/json');

        // Print the JSON data
        echo $jsonResponse;
    }

    public function get_color_by_id()
    {
        $productId = $this->input->post('productId');
        $responseData = $this->db->query("SELECT * from tbl_colors where product_id = $productId and colors_status = 1")->result();
      
        $jsonResponse = json_encode($responseData);

        // Set the response content type to JSON
        $this->output->set_content_type('application/json');

        // Print the JSON data
        echo $jsonResponse;
    }

    public function single($id)
    {
        $data['categoryList'] = $this->Category_model->get_all_category();
        $data['product_image'] = $this->Product_model->get_all_product_images($id);
        $data['product_size'] = $this->Product_model->get_all_product_size($id);
        $data['product_colors'] = $this->Product_model->get_all_product_colors($id);
        $data['singleProduct'] = $this->Product_model->get_product_by_id($id);
        $data['randomProduct'] = $this->Product_model->get_product_by_id_rand();
        $data['aboutusData'] = $this->Commonpart_model->get_commonpart_by_type('aboutus');
        $data['getContact'] = $this->Contact_model->get_all_contact();
        $data['content'] = "single";
        $this->load->view('frontend/master_layout', $data);
    }

    /*=========================
    /*UPDATE THE ADMIN DATA WITH ADMIN_MODEL MODEL
    ================================================*/
    public function message_submit()
    {

        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('message', 'message', 'trim|required');


        if ($this->form_validation->run() == false) {
                redirect('contact_us');
        } else {

            if ($this->Contact_model->message_submit()) {
                $data['success'] = 'From submitted  successfully';
            } else {
                $data['error'] = 'From  not submitted  successfully';
            }


            $this->session->set_flashdata($data);
            redirect('contact_us');
        }
    }



    public function account()
    {

        $data['content'] = "account";
        $this->load->view('frontend/master_layout', $data);
    }
}