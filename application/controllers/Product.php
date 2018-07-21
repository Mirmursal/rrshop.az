<?php

class Product extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Category_model');
        $this->load->model('Setting_model');
    }
//    Product sehifesini  ve ancag her zaman bura parametr gelir o parametr ki secilmish mehsulun id -si
    public function index(){

        $data['categories'] = $this->Category_model->get_categories();

        $data['sub_categories'] = $this->Category_model->get_sub_categories();


        $data['about_our_company'] = $this->Setting_model->get_about_our_company();

        $this->load->view("product",$data);

    }
    /**
     * @param integer $id
     */
    //secilmish productu ( telefon e.t.c) sifarishin tesdiq eden action
    public function comission(){
         echo "burada musterinin sifarishi tesdiq edilecek";
    }
}