<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_controller extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('Product');
    }
    
    function shop(){
        $data = array();
        
        // Fetch products from the database
        $data['products'] = $this->Product->getRows();
        
        // Load the product list view
        $this->load->view('Admin/Front/shop', $data);
    }
    
    function addToCart($proID){
        
        // Fetch specific product by ID
        $product = $this->Product->getRows($proID);
       // print_r($product);
        //exit;
        
        // Add product to the cart
        $data = array(
            'id'    => $product['id'],
            'qty'    => 1,
            'price'    => $product['price'],
            'name'    => $product['Prod_Name'],
            'image' => $product['Image']
        );
        //print_r($data);
        //exit;
        $this->cart->insert($data);
        //print_r($resp);
        //exit;
        // Redirect to the cart page
        redirect('Cart/list');
        //$this->load->view('Admin/Front/cart.php',$data);
        //$this->load->view('Admin/Front/cart1.php');
    }
    

public function load()
{
    $this->load->view('Admin/Front/cart.php');
}


}


