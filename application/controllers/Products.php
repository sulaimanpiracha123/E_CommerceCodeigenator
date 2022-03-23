<?php
class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function manage_category()
    {
        $this->db->order_by('id', 'desc');
        $data['Manage_cat'] = $this->CM->select_data_category('category', '*', array('status' => 1));
        //echo "<pre>";
        //print_r($data);
        //exit;
        $this->load->view('Admin/includes/header.php');
        $this->load->view('Admin/Manage_category.php', $data);
        $this->load->view('Admin/includes/footer.php');
    }

    public function Add_Category()
    {
        $data = $this->input->post();
        $resp = $this->CM->insert_data('category', $data);
        if ($resp) {
            echo json_encode(array('status' => 'true', 'message' => 'Category Successfull Added', 'reload' => base_url('index.php/Products/manage_category')));
        } else {
            echo json_encode(array('status' => 'false', 'message' => 'Category not Added'));
        }
    }
    public function delete_Category($id)
    {
        $this->CM->delete_cat('category', array('id' => $id));
        redirect(base_url('index.php/Products/manage_category'));
    }
    public function  update_Category($id)
    {
        if ($this->input->method() == "post") {
            //print_r($_POST);
            $data = $this->input->post();
            // print_r($data);

            //exit;

            $resp = $this->CM->update_category('category', $data, array('id' => $id));
            if ($resp) {


                echo json_encode(array('status' => 'true', 'message' => 'Successfull updated', 'reload' => base_url('index.php/Products/manage_category')));
            } else {
                echo json_encode(array('status' => 'true', 'message' => 'Not Successfull updated'));
            }
        } else {
            $data['upd_cat'] = $this->CM->select_data_category('category', '*', array('id' => $id));
            $this->load->view('Admin/includes/header.php');
            $this->load->view('Admin/Update_Category.php', $data);
            $this->load->view('Admin/includes/footer.php');


            // echo "<pre>";
            //print_r($data);
            //exit;


            //redirect(base_url('index.php/Users/vendor'));
        }
    }
    public function Manage_sub_cat()
    {
        $data['Category'] = $this->CM->select_data('category', '*', array('status' => '1'));
        $this->db->join('category', 'Sub_category.category_id = category.id');
        $this->db->order_by('Sub_category.id', 'desc');
        //echo "<pre>";
        //print_r($data['Category']);
        //exit;
        $data['Sub_Cat'] = $this->CM->select_data('Sub_category', 'Sub_category.*,category.cat_name as Name');
        //echo "<pre>";
        //print_r($data['Sub_Cat']);
        //exit;
        $this->load->view('Admin/includes/header.php');
        $this->load->view('Admin/Manage_Sub_Cat.php', $data);
        $this->load->view('Admin/includes/footer.php');
    }
    public function Add_Subcategory(){
            if($this->input->method()=='post'){
              $data = $_POST;
              
    
                $basePath = explode('application', dirname(__FILE__))[0];
    
                $uploadPath = $basePath . 'upload/Brand_Img';
    
                $config['upload_path'] = $uploadPath;
    
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['encrypt_name'] = FALSE;
                $config['max_size']      = 100;
                $config['max_width']  = 1024;
                $config['max_height'] = 768;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('Sub_img')) {
                $uploaddata = $this->upload->data();
                $data['Sub_Image'] = $uploaddata['file_name'];
               
    //print_r($data);exit;




        $resp = $this->CM->insert_data('Sub_category', $data);
        if ($resp) {
            echo json_encode(array('status' => 'true', 'message' => 'Successfull UPdated', 'reload' => base_url('index.php/Products/Manage_sub_cat')));
        } else {
            echo json_encode(array('status' => 'true', 'message' => 'Successfull Not  UPdated'));
        }
    }
}
        else
        {
            echo "jkjn";


        }
    }

    public function Manage_sub_cat_status()
    {
        $data = $this->input->post();
        print_r($data);
        exit;
    }
    public function Update_SubCategory($id)

    {
        if ($this->input->method() == 'post') {
            $data= array();

            $data = $this->input->post();
            $resp = $this->CM->update_Sub_category('Sub_category', $data, array('id' => $id));
            if ($resp) {
                echo json_encode(array('status' => 'true', 'message' => 'Subcategory Successfull Added', 'reload' => base_url('index.php/Products/Manage_sub_cat')));
            } else {

                echo json_encode(array('status' => 'true', 'message' => 'SubcategorySuccess Not Updated'));
            }
        } else {
            $data['Category'] = $this->CM->select_data('category', '*', array('status' => '1'));
            $data['upd_Sub_Cat'] = $this->CM->select_data('Sub_category', '*', array('id' => $id));

            $this->load->view('Admin/includes/header.php');
            $this->load->view('Admin/Update_Sub_Cat.php', $data);
            $this->load->view('Admin/includes/footer.php');
        }
    }
    public function delete_Subcat($id)
    {
        $this->CM->delete_cat('Sub_category', array('id' => $id));
        redirect(base_url('index.php/Products/Manage_sub_cat'));
    }

    public function Manage_Brand()
    {
        $this->db->order_by('id', 'desc');
        $data['M_brand'] = $this->CM->select_data_category('Brands', '*', array('status' => '1'));
        $this->load->view('Admin/includes/header.php');
        $this->load->view('Admin/Manage_brand.php', $data);
        $this->load->view('Admin/includes/footer.php');
    }
    public function add_Brand()
    {
        if($this->input->method()=='post'){
        $data = $_POST;


            $basePath = explode('application', dirname(__FILE__))[0];

            $uploadPath = $basePath . 'upload/Brand_Img';

            $config['upload_path'] = $uploadPath;

            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['encrypt_name'] = FALSE;
            $config['max_size']      = 100;
            $config['max_width']  = 1024;
            $config['max_height'] = 768;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('Brand_image')) {
                $uploaddata = $this->upload->data();
                $data['Brand_image'] = $uploaddata['file_name'];

        
               
                
       // $data['Image'] = $this->input->post('Brand_img');
       
        $resp = $this->CM->insert_data('Brands', $data);
        if ($resp) {
            echo json_encode(array('status' => 'true', 'message' => 'Brand SuccessFull Added', 'reload' => base_url('index.php/Products/Manage_Brand')));
        }
       else {
            echo json_encode(array('status' => 'true', 'message' => 'Brand Not Added'));
        }
     }
    }
    
         else
        {
            echo "dkjhks";

        }
    }
    
    

    public function Delete_Brand($id){
        $this->CM->delete_customer('Brands',array('id'=>$id));
        redirect(base_url('index.php/Products/Manage_Brand'));


    }

    public function Update_Brand($id)
    {
        if ($this->input->method() == 'post') {
            $data = $this->input->post();
            $resp = $this->CM->update_category('Brands', $data, array('id' => $id));
            if ($resp) {
                echo json_encode(array('status' => 'true', 'message' => 'Update Brand', 'reload' => base_url('index.php/Products/Manage_Brand')));
            } else {
                echo json_encode(array('status' => 'true', 'message' => 'UPdate Brand Success fully'));
            }
        } else {
            $data['upd_brand'] = $this->CM->select_data_category('Brands', '*', array('id' => $id));

            $this->load->view('Admin/includes/header.php');
            $this->load->view('Admin/Update_brand.php', $data);
            $this->load->view('Admin/includes/footer.php');
        }
    }
    public function Manage_Product()
    {

        $this->db->order_by('id', 'desc');
        $this->db->join('category', 'Products.Category=category.id');
        $this->db->join('Sub_category', 'Products.Sub_category=Sub_category.id');
        $this->db->join('Brands', 'Products.Brand=Brands.id');
        $this->db->order_by('id', 'desc');

        $data['Manage_Prod'] = $this->CM->select_data_category('Products', 'Products.*,Brands.Brand_name as brand_cat,Sub_category.name as sub_cat,.category.cat_name as Cat_Name');

        //echo "<pre>";
        //print_r($this->db->last_query());
        //exit;
        $this->load->view('Admin/includes/header.php');
        $this->load->view('Admin/Manage_Product.php', $data);
        $this->load->view('Admin/includes/footer.php');
    }
    public function Delete_Product($id)
    {
        $this->CM->delete_cat('Products',array('id' => $id));
        redirect(base_url('index.php/Products/Manage_Product'));


    }

    public function Add_Products()
    {
        // echo $_SERVER['DOCUMENT_ROOT'];exit;
        //    //echo  $basePath = explode('application', dirname(__FILE__))[0];
        // echo     $uploadPath = $basePath . 'uploads';




        if ($this->input->method() == 'post') {
            $data = $_POST;
            $basePath = explode('application', dirname(__FILE__))[0];

            $uploadPath = $basePath . 'upload/Prod_Img';

            $config['upload_path'] = $uploadPath;
            //$config['upload_path']          = '.upload/';

            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['encrypt_name'] = FALSE;
            $config['max_size']      = 100;
            $config['max_width']  = 1024;
            $config['max_height'] = 768;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('Image')) {
            $uploaddata= $this->upload->data();
            $data['Image'] = $uploaddata['file_name'];
          
                          
                $resp = $this->CM->insert_data('Products', $data);
                if ($resp) {
                    echo json_encode(array('status' => 'true', 'message' => 'Update Brand', 'reload' => base_url('index.php/Products/Manage_Product')));
                } else {
                    echo json_encode(array('status' => 'true', 'message' => 'UPdate Brand Success fully'));
                }
            }
        } else {
            $data['Cat_pro'] = $this->CM->select_data('category', '*', array('status' => 1));
            $data['Sub_Cat'] = $this->CM->select_data('Sub_category', '*', array('Status' => 1));
            $data['Cat_brands'] = $this->CM->select_data('Brands', '*', array('status' => 1));
            $this->load->view('Admin/includes/header.php');
            $this->load->view('Admin/Add_Product.php', $data);
            $this->load->view('Admin/includes/footer.php');
        }
    }
}
