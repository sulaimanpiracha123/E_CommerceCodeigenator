<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       if(!$this->session->userdata('admininfo')){
        redirect(base_url('index.php/Admin_Login/Admin_Login1'));
       }
        
    }

    public function dashboard()
    {

       // echo "<pre>";
        //print_r($this->session->userdata('admininfo'));
        //exit;
       $this->load->view('Admin/includes/header.php');
       $this->load->view('Admin/dashboard.php');
       $this->load->view('Admin/includes/footer.php');

    }
    public function logout()
    {
        $this->session->unset_userdata('admininfo');
        redirect(base_url('index.php/Admin_Login/Admin_Login1'));
    }
}



?>