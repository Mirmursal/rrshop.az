<?php

class Home extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->model('Setting_model');
    }

    //index.php action
    public function index()
    {
        $data['categories'] = $this->Category_model->get_categories();

        $data['sub_categories'] = $this->Category_model->get_sub_categories();

        $data['slide_items'] = $this->Setting_model-> get_slider();

        $data['about_our_company'] = $this->Setting_model->get_about_our_company();

        $this->load->view("index",$data);

    }

    //Haqqimizda sehifesine gonderen action
    public function about(){


        $data['categories'] = $this->Category_model->get_categories();

        $data['sub_categories'] = $this->Category_model->get_sub_categories();

        $data['slide_items'] = $this->Setting_model-> get_slider();

        $data['about_our_company'] = $this->Setting_model->get_about_our_company();

        $this->load->view("about",$data);


    }

    //Navbar da gosterilen kategoriyalar uzre filter eden ve neticeni view -da qaytaran action
    public function catFilter(){

        echo "Navbar da gosterilen kategoriyalar uzre filter eden ve neticeni view -da qaytaran action olacag";

    }

     //index sehifesinde smartfon buttonu var o buttona esasen yalniz smartfonlari gosteren action
    public function showSmartphons(){

        echo "index sehifesinde smartfon buttonu var o buttona esasen yalniz smartfonlari gosteren action";

    }
}