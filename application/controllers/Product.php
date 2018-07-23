<?php

class Product extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Category_model');
        $this->load->model('Setting_model');
        $this->load->model('Product_model');
    }
/**    Product sehifesini  ve ancag her zaman bura parametr gelir o parametr ki secilmish mehsulun id -si */
    public function index(){

        $categories = $this->Category_model->get_categories();

        $sub_categories = $this->Category_model->get_sub_categories();


        $about_our_company = $this->Setting_model->get_about_our_company();

        $id = $this->uri->segment(3);

        $product = $this->Product_model->get_products_by_id($id);

        $similar_products = $this->Product_model->get_similar_product_by_id($id);

        $properties = $this->Product_model->sort_properties_by_id($id);



        $viewData = array(

            'categories'=>$categories,

            'sub_categories' => $sub_categories ,

            'about_our_company'=>$about_our_company,

            'properties' =>$properties,

            'product' =>$product,

            'similar_products'=>$similar_products

        );

        $this->load->view("product",$viewData);

    }
    public function order(){

        $fullname =  $this->input->post("fullname");

        $operator =  $this->input->post("operator");

        $address =  $this->input->post("address");

        $number =  $this->input->post("number");

        $product_id = $this->input->post("product_id");

        $insert = $this->Product_model->insert_order(

            array(
                "customer_fullname"=>$fullname,

                "customer_address" => $address,

                "customer_number" => $operator." ".$number,

                "product_id" => $product_id,

                "isCompleted"=>0,

                "status" => 1
            )
        );

        if($insert)
        {
            redirect("");
        }

    }
    /**
     * @param integer $id
     */
    /**secilmish productu ( telefon e.t.c) sifarishin tesdiq eden action*/
    public function comission(){
         echo "burada musterinin sifarishi tesdiq edilecek";
    }
}