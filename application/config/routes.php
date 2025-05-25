<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'FrontendController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*=======================
/*SHOW FOR FRONTEND PAGE
================================*/
$route['home'] = "FrontendController/index";
$route['about_us'] = "FrontendController/about_us";
$route['Product_page'] = "FrontendController/Product_page";
$route['corporate'] = "FrontendController/corporate";
$route['men'] = "FrontendController/men";
$route['women'] = "FrontendController/women";
$route['page/(:any)'] = "FrontendController/page/$1";
$route['garments'] = "FrontendController/garments";
$route['contact_us'] = "FrontendController/contact_us";
$route['message_submit'] = "FrontendController/message_submit";
$route['My_Account'] = "FrontendController/account";
$route['single/(:any)'] = "FrontendController/single/$1";
$route['category/(:any)'] = "FrontendController/category/$1";
$route['get_product_by_id'] = "FrontendController/get_product_by_id";
$route['get_color_by_id'] = "FrontendController/get_color_by_id";
$route['shop/(:any)'] = "FrontendController/shop/$1";
$route['login'] = "FrontendController/login/";
$route['register'] = "FrontendController/register/";
$route['ordertracking'] = "FrontendController/ordertracking/";



$route['add_cart'] = "FrontendController/add_cart";
$route['add_checkout'] = "FrontendController/add_checkout";
$route['add_success'] = "FrontendController/add_success";


/*=============================================*/
$route['dashboard'] = "Dashboard/index";


/*===========
/*LOGIN CHECK ROUTING
================================*/
$route['admin'] = "Login/admin";
$route['login_data_check'] = "Login/login_data_check";


$route['logout'] = "Login/logout";



/*===========
/*ADMIN/USER ROUTING
================================*/
$route['add_admin'] = "Admin/add_admin";

$route['orders_manage'] = "Admin/orders_manage";

$route['save_admin'] = "Admin/save_admin";
$route['edit_admin/(:any)'] = "Admin/edit_admin/$1";
$route['update_admin/(:any)'] = "Admin/update_admin/$1";
$route['delete_admin/(:any)'] = "Admin/delete_admin/$1";


/*===========
/*CATEGORY ROUTING
================================*/
$route['add_category'] = "Category/add_category";
$route['save_category'] = "Category/save_category";
$route['edit_category/(:any)'] = "Category/edit_category/$1";
$route['update_category/(:any)'] = "Category/update_category/$1";
$route['delete_category/(:any)'] = "Category/delete_category/$1";

/*===========
/*CATEGORY ROUTING
================================*/
$route['add_sub_category'] = "Category/add_sub_category";
$route['save_sub_category'] = "Category/save_sub_category";
$route['edit_sub_category/(:any)'] = "Category/edit_sub_category/$1";
$route['update_sub_category/(:any)'] = "Category/update_sub_category/$1";
$route['delete_sub_category/(:any)'] = "Category/delete_sub_category/$1";
$route['get_subcategories/(:any)'] = "Category/get_subcategories/$1";

/*===========
/*DISTRICT ROUTING
================================*/
$route['add_district'] = "District/add_district";
$route['save_district'] = "District/save_district";
$route['edit_district/(:any)'] = "District/edit_district/$1";
$route['update_district/(:any)'] = "District/update_district/$1";
$route['delete_district/(:any)'] = "District/delete_district/$1";


/*===========
/*SLIDER ROUTING
================================*/
$route['add_slider'] = "Slider/add_slider";
$route['save_slider'] = "Slider/save_slider";
$route['edit_slider/(:any)'] = "Slider/edit_slider/$1";
$route['update_slider/(:any)'] = "Slider/update_slider/$1";
$route['delete_slider/(:any)'] = "Slider/delete_slider/$1";


/*===========
/*PRODUCT ROUTING
================================*/
$route['add_product'] = "Product/add_product";
$route['save_product'] = "Product/save_product";
$route['edit_product/(:any)'] = "Product/edit_product/$1";
$route['update_product/(:any)'] = "Product/update_product/$1";
$route['delete_product/(:any)'] = "Product/delete_product/$1";

$route['add_size/(:any)'] = "Product/add_size/$1";
$route['save_size'] = "Product/save_size";
$route['edit_size/(:any)'] = "Product/edit_size/$1";
$route['update_size/(:any)'] = "Product/update_size/$1";
$route['delete_size/(:any)'] = "Product/delete_size/$1";


$route['add_colors/(:any)'] = "Product/add_colors/$1";
$route['save_color'] = "Product/save_color";
$route['edit_colors/(:any)'] = "Product/edit_colors/$1";



$route['add_image/(:any)'] = "Product/add_image/$1";
$route['save_image'] = "Product/save_image";
$route['edit_image/(:any)'] = "Product/edit_image/$1";
$route['update_image/(:any)'] = "Product/update_image/$1";
$route['delete_image/(:any)'] = "Product/delete_image/$1";


/*===========
/*SEARCING ROUTING
================================*/
$route['check_searching_data'] = "Search/check_searching_data";


/*===========
/*CUSTOMER ROUTING
================================*/
$route['save_customer'] = "Customer/save_customer";


/*===========
/*PRODUCT ROUTING
================================*/
$route['add_comonpart'] = "CommonPart/add_comonpart";
$route['save_commonpart'] = "CommonPart/save_commonpart";
$route['edit_comonpart/(:any)'] = "CommonPart/edit_commonpart/$1";
$route['update_commonpart/(:any)'] = "CommonPart/update_commonpart/$1";
$route['delete_commonpart/(:any)'] = "CommonPart/delete_commonpart/$1";


/*===========
/*PRODUCT ROUTING
================================*/
$route['add_About'] = "About/add_about";
$route['save_About'] = "About/save_about";
$route['edit_About/(:any)'] = "About/edit_about/$1";
$route['update_About/(:any)'] = "About/update_about/$1";
$route['delete_About/(:any)'] = "About/delete_about/$1";


/*===========
/*BRANDS ROUTING
================================*/
$route['add_brand'] = "Brand/add_brand";
$route['save_brand'] = "Brand/save_brand";
$route['edit_brand/(:any)'] = "Brand/edit_brand/$1";
$route['update_brand/(:any)'] = "Brand/update_brand/$1";
$route['delete_brand/(:any)'] = "Brand/delete_brand/$1";


/*===========
/*FEATURED ROUTING
================================*/
$route['add_featured'] = "Featured/add_featured";
$route['save_featured'] = "Featured/save_featured";
$route['edit_featured/(:any)'] = "Featured/edit_featured/$1";
$route['update_featured/(:any)'] = "Featured/update_featured/$1";
$route['delete_featured/(:any)'] = "Featured/delete_featured/$1";


/*===========
/*TEAM ROUTING
================================*/
$route['add_team'] = "Team/add_team";
$route['save_team'] = "Team/save_team";
$route['edit_team/(:any)'] = "Team/edit_team/$1";
$route['update_team/(:any)'] = "Team/update_team/$1";
$route['delete_team/(:any)'] = "Team/delete_team/$1";


/*===========
/*MESSAGE ROUTING
================================*/

$route['message'] = "Contact/message";
$route['message_update/(:any)'] = "Contact/message_update/$1";

/*===========
/*CONTACT ROUTING
================================*/
$route['edit_contact/(:any)'] = "Contact/edit_contact/$1";
$route['update_contact/(:any)'] = "Contact/update_contact/$1";