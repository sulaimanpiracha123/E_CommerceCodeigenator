<?php
class Admin_Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function Admin_Login1()
    {

        $this->load->view('Admin/Login.php'); 
    }
    public function login()
    {

        $resp = $this->CM->select_data('users','*',array('email'=>$_POST['email'],'password'=>$_POST['password']));
        if($resp)
        {

            $this->session->set_userdata('admininfo',$resp);
            
            $arr = array('status'=>'true','message'=>'success','data'=>$resp);

        }
        else
        {
            $arr = array('Status'=>'false','message'=>'UserName and Password Not Match');
        }
       // echo "<pre>";
        //print_r($_SESSION);
        //exit;
        
        echo json_encode($arr);
    }
}



?>