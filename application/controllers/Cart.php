<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('Product');
    }
    
    function list(){
        $data = array();
        
        // Retrieve cart data from the session

        $data['cartItems'] = $this->cart->contents();
        //echo "<pre>";

        //print_r($data);
        //exit;
        // Load the cart view
        $this->load->view('Admin/Front/cart.php', $data);
    }
    
    function updateItemQty(){
        $update = 0;
        
        // Get cart item info
        $rowid = $this->input->get('rowid');
        $qty = $this->input->get('qty');
        
        // Update item in the cart
        if(!empty($rowid) && !empty($qty)){
            $data = array(
                'rowid' => $rowid,
                'qty'   => $qty
            );
            $update = $this->cart->update($data);
        }
        
        // Return response
        echo $update?'ok':'err';
    }
    
    function removeItem($rowid){
        $data = array(
            'rowid'   => $rowid,
            'qty'     => 0
        );
        $query = $this->cart->update($data);
        redirect('Cart/list');
    }
    
}
