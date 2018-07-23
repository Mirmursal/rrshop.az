<!--/**Saytin butun settingsi bu model uzerinden olacag*/-->

<?php

class Setting_model extends CI_Model{

    protected $table = 'main_slider';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_slider(){

        $sql=<<<SQL
SELECT  img_name from main_slider
SQL;

        $img = $this->db->query($sql);
        return $img->result();

    }

    public function get_about_our_company(){

        $sql=<<<SQL
SELECT description ,address , contact_number , email , facebook_page_link,instagram_page_link FROM `about`
SQL;

        $about = $this->db->query($sql);
        return $about->result();

    }
}