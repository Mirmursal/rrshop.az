<?php

class Product_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

/**   this function to select best seller products */
    public function get_best_sell_product(){

        $sql=<<<SQL
SELECT DISTINCT 
 product.id as 'id',
 product.name as 'name',
 product.active_price as 'price',
 product_img.img_name as 'img'
 FROM `product` 
inner join orders on orders.product_id = product.id
inner join product_img on product_img.product_id = product.id
WHERE product.status = 1

SQL;

        $best_sell_products = $this->db->query($sql);
        return $best_sell_products->result();
    }

    /** This function to sort product by types.Parameter:$id  */
    public function get_products_by_types($id)
    {
        $sql =<<<SQL
SELECT DISTINCT 
product.id as 'id' ,
product.barcode,
 product.name as 'name', 
 product_img.img_name as 'img',
  product.active_price,
  product.old_price 
     FROM `product` 
     INNER join sub_category 
     on sub_category.id = product.sub_cat_id 
     inner join main_category 
     on sub_category.main_cat_id = main_category.id 
     inner join product_img
      on product_img.product_id = product.id
       where main_category.id = $id
SQL;

         $smartphones = $this->db->query($sql) ;
         return $smartphones->result();
    }
/** This function for to choose product by id*/

    public function get_products_by_id($id)
    {
        $sql =<<<SQL
SELECT  
product.id as 'id' ,
product.barcode,
 product.name as 'name', 
 product_img.img_name as 'img',
  product.active_price,
  product.old_price 
     FROM `product` 
     inner join product_img
      on product_img.product_id = product.id
       where product.id = $id
SQL;

        $product = $this->db->query($sql) ;
        return $product->result();
    }
    /** This function for to sorting product by id */

    public function sort_properties_by_id($id){

        $sql=<<<SQL
Select prop_key , prop_val
from product_properties
       where product_properties.product_id = $id and product_properties.status=1
SQL;

 $properties = $this->db->query($sql);

 return $properties->result();
    }

    /** This function choose similar products by id*/
    public function get_similar_product_by_id($id){

        $sql=<<<SQL
  SELECT 
product.id,
product_img.img_name as 'img',
product.active_price,
product.name
FROM  `product` 
inner join product_img 
on product_img.product_id = product.id
 where product.sub_cat_id=(SELECT product.sub_cat_id from product where product.id= $id)
and product.id != $id
SQL;

        $similar_products = $this->db->query($sql);

        return $similar_products->result();
    }

    /** This function adding new customer to customer table and adding order to order table*/
    public function insert_order($data = array())
    {
        return $this->db->insert("orders" ,$data );
    }

    /** This function sort product by sub_category (by marka)*/
    public function get_products_by_marka($id)
    {
        $sql =<<<SQL
SELECT DISTINCT 
product.id as 'id' ,
product.barcode,
 product.name as 'name', 
 product_img.img_name as 'img',
  product.active_price,
  product.old_price ,
  sub_category.name as 'marka_name'
     FROM `product` 
     INNER join sub_category 
     on sub_category.id = product.sub_cat_id 
     inner join product_img
      on product_img.product_id = product.id
       where product.sub_cat_id = $id
SQL;

        $smartphones = $this->db->query($sql) ;
        return $smartphones->result();
    }


}
