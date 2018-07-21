<?php
/**
 * Created by PhpStorm.
 * User: Mursel
 * Date: 7/21/2018
 * Time: 3:54 PM
 */

class Category_model extends CI_Model
{

    protected $table = 'main_category';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_categories()
    {
        $sql=<<<SQL
 SELECT main_category.name ,main_category.id as 'id' from main_category
SQL;

        $cat = $this->db->query($sql);
        return $cat->result();
    }

    public function get_sub_categories()
    {
        $sql=<<<SQL
 SELECT sub_category.main_cat_id , sub_category.name , sub_category.id from sub_category
SQL;

        $sub_cat = $this->db->query($sql);
        return $sub_cat->result();
    }
}