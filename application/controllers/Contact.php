<?php

class Contact extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Category_model');
        $this->load->model('Setting_model');
    }

//    contact page -i load eden action
    public function index(){

        $data['categories'] = $this->Category_model->get_categories();

        $data['sub_categories'] = $this->Category_model->get_sub_categories();


        $data['about_our_company'] = $this->Setting_model->get_about_our_company();

        $this->load->view("contact",$data);


    }

    // Contact sehifesinde form- u  idare eden action
    public function userSuggest(){

        echo "burada conract sehifesindeki istifadecinin mektubunu databasaya gonderen action olacag";

    }

}
