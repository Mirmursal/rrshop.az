<?php

class Home extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->model('Setting_model');
        $this->load->model('Product_model');
    }

    /**index.php action*/
    public function index()
    {
        $categories = $this->Category_model->get_categories();

        $sub_categories = $this->Category_model->get_sub_categories();

        $slide_items = $this->Setting_model-> get_slider();

        $about_our_company = $this->Setting_model->get_about_our_company();

        $get_best_seller = $this->Product_model->get_best_sell_product();

        $smartphones = $this->Product_model->get_products_by_types(1);

        $viewData = array(

            'categories' =>$categories,

            'sub_categories'=>$sub_categories,

            'slide_items'=>$slide_items,

            'about_our_company' => $about_our_company,

            'get_best_seller' =>$get_best_seller,

            'smartphones'=>$smartphones

        );

        $this->load->view("index",$viewData);

    }

    /**Haqqimizda sehifesine gonderen action*/
    public function about(){


        $data['categories'] = $this->Category_model->get_categories();

        $data['sub_categories'] = $this->Category_model->get_sub_categories();

        $data['slide_items'] = $this->Setting_model-> get_slider();

        $data['about_our_company'] = $this->Setting_model->get_about_our_company();

        $this->load->view("about",$data);


    }

    /**Navbar da gosterilen kategoriyalar uzre filter eden ve neticeni view -da qaytaran action*/
    public function catFilter(){

        $data['categories'] = $this->Category_model->get_categories();

        $data['sub_categories'] = $this->Category_model->get_sub_categories();

        $id = $this->uri->segment(3);

        $data['product_by_cat'] = $this->Product_model->get_products_by_marka($id);

        $data['about_our_company'] = $this->Setting_model->get_about_our_company();

        $this->load->view("category",$data);

    }

     /**index sehifesinde smartfon buttonu var o buttona esasen yalniz smartfonlari gosteren action*/
    public function showSmartphons(){

        echo "index sehifesinde smartfon buttonu var o buttona esasen yalniz smartfonlari gosteren action";

    }
}