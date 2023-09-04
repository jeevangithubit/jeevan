<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function login_page()
  {

    
      //$this->load->view('header');
    $this->load->view('admin/singin');
    //$this->load->view('footer');
  }
  public function singin(){
      $value;
    $this->load->library('session');
    $this->load->model('model');
    $email=$_POST['email'];
    $password=$_POST['password'];
    $data="SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $user['get']=$this->model->getarraybyquery($data);
        print_r($user);
        if ($user['get']==true) {
            foreach($user['get'] as $value){}
          $this->session->set_userdata('login_id', $value['id']);
          redirect('user');
        }else{
            $this->session->set_flashdata('error', "<p style='color:red; background:#f7d4d4; width:280px; padding:18px;'>Invalide Login Details ..!!</p>");
          redirect('auth/login_page');
        }
}
}


