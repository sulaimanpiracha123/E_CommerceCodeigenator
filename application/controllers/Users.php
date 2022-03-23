<?php
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    if(!$this->session->userdata('admininfo')){
        redirect(base_url('index.php/Admin_Login/Admin_Login1'));
    }
    }
    public function vendor()
    {$this->db->order_by('id','desc');
        $data['users'] = $this->CM->select_data('users','*',array('access'=>2));
        //echo "<pre>"; 
        //print_r($data['users']);
        //exit;
        $this->load->view('Admin/includes/header.php');
        $this->load->view('Admin/vendor.php',$data);
        $this->load->view('Admin/includes/footer.php');
    }
    public function add_vendor()
    {
        $data = $this->input->post();
        $data['access'] = 2;
        $data['status'] = 1;
        $resp =  $this->CM->insert_data('users',$data);
        if($resp){
            echo json_encode(array('status'=>'true','message'=>'Successfull Added','reload'=>base_url('index.php/Users/vendor')));

        }
        else
        {
            echo json_encode(array('status'=>'false','message'=>'Not Added Try Again'));
        }
       // print_r($data);

       //echo $this->db->insert('users',$data);

    }
    public function Update_vendor($id){
        if($this->input->method()=="post"){
            $data = $_POST;
            if($data['password']==''){
                unset($data['password']);
             }
            $this->CM->Update_user('users',$data,array('id'=>$id));
            echo json_encode(array('status'=>'true','message'=>'Successfull updated','reload'=>base_url('index.php/Users/vendor')));
            }
            else
            {
        $data['user'] = $this->CM->select_data('users','*',array('id'=>$id));
        $this->load->view('Admin/includes/header.php');
        $this->load->view('Admin/Update_vendor.php',$data);
        $this->load->view('Admin/includes/footer.php');


        //echo "<pre>";
       // print_r($user);
        //exit;


        //redirect(base_url('index.php/Users/vendor'));
     }
    }

     
     public function delete_user($id)
     {
           $this->CM->delete_user('users',array('id'=>$id));
           redirect(base_url('index.php/Users/vendor'));

     }
     public function manage_status()
     {

        $this->CM->Check_update('users',array('status'=>$_POST['status']),array('id'=>$_POST['status']));
        
    }
    public function Customer()
    {$this->db->order_by('id','desc');
        $data['Customer'] = $this->CM->select_data('users','*',array('access'=>3));
      
        $this->load->view('Admin/includes/header.php');
        $this->load->view('Admin/Customer.php',$data);
        $this->load->view('Admin/includes/footer.php');

        //echo "Customer";
    }
    public function add_Customer()
    {
        $data = $this->input->post();
        $data['access'] = 3;
        $data['status'] = 1;
        $resp =  $this->CM->insert_data('users',$data);
        if($resp){
            echo json_encode(array('status'=>'true','message'=>'Successfull Added','reload'=>base_url('index.php/Users/Customer')));

        }
        else
        {
            echo json_encode(array('status'=>'false','message'=>'Not Added Try Again'));
        }
       // print_r($data);

       //echo $this->db->insert('users',$data);
    
    }
    public function update_customer($id)
{
    if($this->input->method()=="post")
    {
        $data = $_POST;
        //print_r($data);
        //exit;
        if($data['password']=='')
        {
            unset($data['password']);

        }
        $this->CM->update_customer('users',$data,array('id'=>$id));
        echo json_encode(array('status'=>'true','message'=>'Successfull updated','reload'=>base_url('index.php/Users/Customer')));
        }
        else
        {
    $data['upd_cus'] = $this->CM->select_data('users','*',array('id'=>$id));
    $this->load->view('Admin/includes/header.php');
    $this->load->view('Admin/Update_Customer.php',$data);
    $this->load->view('Admin/includes/footer.php');


    }

  //echo "bghvvgv";
    //echo "<pre>";
   // print_r($user);
    //exit;


    //redirect(base_url('index.php/Users/vendor'));
 }

 public function Delete_Customer($id)
 {
    $this->CM->delete_customer('users',array('id'=>$id));
    redirect(base_url('index.php/Users/Customer'));

 }
}
