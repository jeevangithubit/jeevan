<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

public function __construct(){
        parent::__construct();
      $this->load->library('session');
        $id=$this->session->userdata('login_id');
        // echo $id;
        // die;
        if(empty($id)){
            redirect('auth/login_page');
        }
    }

	public function index()
	{
		$this->load->database();
		
$this->load->model('model');
		// $query="SELECT * FROM `images`";
		// $data['get']=$this->model->getarraybyquery($query);
        $services="SELECT * FROM  `services`";
		$data['ctn1'] = $data['get']=$this->model->getarraybyquery($services);

        $services="SELECT * FROM  `project`";
		$data['ctn2'] = $data['get']=$this->model->getarraybyquery($services);
  
		$query1="SELECT * FROM `contact`";
		$data['cnt'] = $data['get']=$this->model->getarraybyquery($query1);

        $team="SELECT * FROM  `client`";
		$data['ctn3'] = $data['get']=$this->model->getarraybyquery($team);
        

  //       $team="SELECT * FROM  `product`";
		// $data['get']=$this->model->getarraybyquery($team);

		$this->load->view('admin/header');
		$this->load->view('admin/index',$data);
	$this->load->view('admin/footer');
	}
	public function client(){
		$this->load->model('model');
    	$team="SELECT * FROM  `client`";
		$data['get']=$this->model->getarraybyquery($team);
		$this->load->view('admin/header');
		$this->load->view('admin/client',$data);
	}
	public function client_form(){
			$this->load->model('model');
		$image="SELECT * FROM  `client`";
		$data['get']=$this->model->getarraybyquery($image);
		$this->load->view('admin/header');
		$this->load->view('admin/client_form',$data);
	} 
	public function add_client()  
    {  
      $this->load->model('model');  
         if(isset($_FILES["file"]["name"]))  
         {  
              $config['upload_path'] = './assets/uploads/';  
              $config['allowed_types'] = 'png|jpeg|jpg';  
              $this->load->library('upload', $config);  
              if(!$this->upload->do_upload('file'))  
              {  
                  $error =  $this->upload->display_errors(); 
                  echo json_encode(array('msg' => $error, 'success' => false));
              }  
              else 
              {  
                   $data = $this->upload->data();
                   // $img['img'] = $data['file_name'];
                   // $name['name'] = $_POST['name'];
                   // $designation['designation'] = $_POST['designation'];
                   // $qoute['qoute'] = $_POST['qoute'];
                   // $this->db->insert('team_img',$name,$designation,$qoute,$img);
                   // $getId = $this->db->insert_id();
                   $data=array('image' => $data['file_name'],
                   	'client_name' => $_POST ['client'],
					'contante' => $_POST['contante']
						);
                   
                    $insert=$this->model->save('client',$data);  
              // echo 1;
                    $this->session->set_flashdata('success', "<p style='color: green; background: #ceeace; width: 280px; padding: 18px;'>UPLOADED SUCCESSFULLY ..!!</p>");
            						redirect('user/client');

                   // $arr = array('msg' => 'Image has not uploaded successfully', 'success' => false);
 
                   // if($getId){
                   //  $arr = array('msg' => 'Image has been uploaded successfully', 'success' => true);
                   // }
                   // echo json_encode($arr);
              }  
         }  
    }
  public function client_delete(){
		$this->load->model('model');
		$id=$this->uri->segment(3);
		$delete=$this->model->do_delete('client', $id);
		$this->session->set_flashdata('success', "<p style='color:green; background:#ceeace; width:280px; padding:18px;'>delete successfully ..!!</p>");
		redirect('user/client');
	}






	public function team_form(){
		$this->load->model('model');
		$image="SELECT * FROM  `team`";
		$data['get']=$this->model->getarraybyquery($image);
		$this->load->view('admin/header');
		$this->load->view('admin/team_form',$data);
	}


	// public function content()
	// {
	// 	$this->load->model('model');
	// 	$data=array('image' => $_POST['image'],
	// 		        'name' => $_POST ['name'],
	// 				'content' => $_POST['content']
					
	// );
	// 	$insert=$this->model->save('team', $data);

	// 	redirect('user/index_form');
	// }


	public function add_team()  
    {  
      $this->load->model('model');  
         if(isset($_FILES["file"]["name"]))  
         {  
              $config['upload_path'] = './assets/uploads/';  
              $config['allowed_types'] = 'png|jpeg|jpg';  
              $this->load->library('upload', $config);  
              if(!$this->upload->do_upload('file'))  
              {  
                  $error =  $this->upload->display_errors(); 
                  echo json_encode(array('msg' => $error, 'success' => false));
              }  
              else 
              {  
                   $data = $this->upload->data();
                   // $img['img'] = $data['file_name'];
                   // $name['name'] = $_POST['name'];
                   // $designation['designation'] = $_POST['designation'];
                   // $qoute['qoute'] = $_POST['qoute'];
                   // $this->db->insert('team_img',$name,$designation,$qoute,$img);
                   // $getId = $this->db->insert_id();
                   $data=array('image' => $data['file_name'],
			        'name' => $_POST ['name'],
					'Designation' => $_POST['Designation'],
						);
                   
                    $insert=$this->model->save('team',$data);  
              // echo 1;
                    $this->session->set_flashdata('success', "<p style='color: green; background: #ceeace; width: 280px; padding: 18px;'>UPLOADED SUCCESSFULLY ..!!</p>");
            						redirect('user/team');

                   // $arr = array('msg' => 'Image has not uploaded successfully', 'success' => false);
 
                   // if($getId){
                   //  $arr = array('msg' => 'Image has been uploaded successfully', 'success' => true);
                   // }
                   // echo json_encode($arr);
              }  
         }  
    }
    public function team(){
    	$this->load->model('model');
    	$team="SELECT * FROM  `team`";
		$data['get']=$this->model->getarraybyquery($team);
		$this->load->view('admin/header');
		$this->load->view('admin/team',$data);
    }
    public function team_delete(){
		$this->load->model('model');
		$id=$this->uri->segment(3);
		$delete=$this->model->do_delete('team', $id);
		$this->session->set_flashdata('success', "<p style='color:green; background:#ceeace; width:280px; padding:18px;'>delete successfully ..!!</p>");
		redirect('user/team');
	}


	public function about()
	{

		$this->load->view('header');
		$this->load->view('about');
	//	$this->load->view('footer');
	}
	public function contacts()
	{
		$this->load->model('model');
		$query="SELECT * FROM `contact`";
		$data['get']=$this->model->getarraybyquery($query);
		$this->load->view('admin/header');
		$this->load->view('admin/contacts',$data);
		//$this->load->view('admin/footer');
	}
	public function contact_form(){
		$this->load->model('model');
		$address="SELECT * FROM  `address`";
		$data['get']=$this->model->getarraybyquery($address);
		$this->load->view('admin/header');
		$this->load->view('admin/contact_form',$data);
	}
	public function message_delete(){
		$this->load->model('model');
		$id=$this->uri->segment(3);
		$delete=$this->model->do_delete('contact' ,$id);
		$this->session->set_flashdata('success', "<p style='color:green; background:#ceeace; width:280px; padding:18px;'> delete successfully ..!!</p>");
		redirect('user/contacts');
	 }


	public function services()
	{
			$this->load->model('model');
		$services="SELECT * FROM  `services`";
		$data['get']=$this->model->getarraybyquery($services);
		$this->load->view('admin/header');
		$this->load->view('admin/services',$data);
	//	$this->load->view('footer');
	}


	 public function add_services()  
    {  
      $this->load->model('model');  
         if(isset($_FILES["file_name"]["name"]))  
         {  
              $config['upload_path'] = './assets/uploads/';  
              $config['allowed_types'] = 'png|jpeg|jpg';  
              $this->load->library('upload', $config);  
              if(!$this->upload->do_upload('file_name'))  
              {  
                  $error =  $this->upload->display_errors(); 
                  echo json_encode(array('msg' => $error, 'success' => false));
              }  
              else 
              {  
                   $data = $this->upload->data();
                   // $img['img'] = $data['file_name'];
                   // $name['name'] = $_POST['name'];
                   // $designation['designation'] = $_POST['designation'];
                   // $qoute['qoute'] = $_POST['qoute'];
                   // $this->db->insert('team_img',$name,$designation,$qoute,$img);
                   // $getId = $this->db->insert_id();
                   $data=array('image' => $data['file_name'],
			        'service_name' => $_POST ['services'],
					'contante' => $_POST['content']
						);
                   // print_r($data);
                   // dei;
                   
                    $insert=$this->model->save('services',$data);  
              // echo 1;
                    $this->session->set_flashdata('success', "<p style='color: green; background: #ceeace; width: 280px; padding: 18px;'>UPLOADED SUCCESSFULLY ..!!</p>");
            						redirect('user/services');

                   // $arr = array('msg' => 'Image has not uploaded successfully', 'success' => false);
 
                   // if($getId){
                   //  $arr = array('msg' => 'Image has been uploaded successfully', 'success' => true);
                   // }
                   // echo json_encode($arr);
              }  
         }  
    }

	public function service_form(){
		$this->load->model('model');
		$services="SELECT * FROM  `services`";
		$data['get']=$this->model->getarraybyquery($services);
		$this->load->view('admin/header');
		$this->load->view('admin/service_form',$data);
	}

	public function services_delete(){
		$this->load->model('model');
		$id=$this->uri->segment(3);
		$delete=$this->model->do_delete('services', $id);
		$this->session->set_flashdata('success', "<p style='color:green; background:#ceeace; width:280px; padding:18px;'>delete successfully ..!!</p>");
		redirect('user/services');
	}



	// public function save()
	// {
	// 	$this->load->model('model');
	// 	$data=array('service_name' => $_POST['services'],
	// 				'content' => $_POST['content'],
					
	// );
	// 	$insert=$this->model->save('services', $data);

	// 	redirect('user/services');
	// }

	// public function Blog()
	// {
	// 	$this->load->view('header');
	// //	$this->load->view('Blog');
	// 	//$this->load->view('footer');
	// }
	// public function industries()
	// {
	// 	$this->load->view('header');
	// //	$this->load->view('industries');
	// 	//$this->load->view('footer');
	// }
	//data insert
	public function update_address() {
        $data = array(
            'address_one' => $_POST['address1'],
            'address_two' => $_POST['address2'],
            'phone_no'=> $_POST['phone'],
             'whatsapp_no'=> $_POST['whatsapp'],
            'email_address1'=> $_POST['email_address1'],
            'email_address2'=> $_POST['email_address2']
       );
        $this->model->update($data);
        redirect('user/contact_form');
    }
	
	
	// public function add_services() {
 //        $data = array(
 //            'address' => $_POST['services'],
 //            'phone'=> $_POST['content'],
           
 //       );
 //        $this->model->add($data);
 //        echo 'services has successfully been updated';
 //    }


 //    public function testimonials_delete(){
	// 	$this->load->model('model');
	// 	$id=$this->uri->segment(3);
	// 	$delete=$this->model->do_delete('images' ,$id);
	// 	$this->session->set_flashdata('success', "<p style='color:green; background:#ceeace; width:280px; padding:18px;'>delete successfully ..!!</p>");
	// 	redirect('user/testimonials');
	// }



// 	public function testimonials()
// 	{
// 			$this->load->model('model');
// 		$services="SELECT * FROM  `images`";
// 		$data['get']=$this->model->getarraybyquery($services);
// 		$this->load->view('admin/header');
// 		$this->load->view('admin/testimonials',$data);
// 	//	$this->load->view('footer');
// 	}


	public function logout(){
		$this->session->unset_userdata('login_id', $user[0]['id']);
		redirect('user');
	}



public function project()
	{
		$this->load->model('model');
		$services="SELECT * FROM  `project`";
		$data['get']=$this->model->getarraybyquery($services);
		$this->load->view('admin/header');
		$this->load->view('admin/project',$data);
	//	$this->load->view('footer');
	}


     public function add_project()  
    {  
      $this->load->model('model');  
         if(isset($_FILES["file_name"]["name"]))  
         {  
              $config['upload_path'] = './assets/uploads/';  
              $config['allowed_types'] = 'png|jpeg|jpg';  
              $this->load->library('upload', $config);  
              if(!$this->upload->do_upload('file_name'))  
              {  
                  $error =  $this->upload->display_errors(); 
                  echo json_encode(array('msg' => $error, 'success' => false));
              }  
              else 
              {  
                   $data = $this->upload->data();
                   // $img['img'] = $data['file_name'];
                   // $name['name'] = $_POST['name'];
                   // $designation['designation'] = $_POST['designation'];
                   // $qoute['qoute'] = $_POST['qoute'];
                   // $this->db->insert('team_img',$name,$designation,$qoute,$img);
                   // $getId = $this->db->insert_id();
                   $data=array('image' => $data['file_name'],
			       'project_name' => $_POST['name'],
			       'contante' => $_POST['contante']
						);
                   // print_r($data);
                   // dei;
                   
                    $insert=$this->model->save('project',$data);  
              // echo 1;
                    $this->session->set_flashdata('success', "<p style='color: green; background: #ceeace; width: 280px; padding: 18px;'>UPLOADED SUCCESSFULLY ..!!</p>");
            						redirect('user/project');

                   // $arr = array('msg' => 'Image has not uploaded successfully', 'success' => false);
 
                   // if($getId){
                   //  $arr = array('msg' => 'Image has been uploaded successfully', 'success' => true);
                   // }
                   // echo json_encode($arr);
              }  
         }  
    }
public function project_form(){
		$this->load->model('model');
		$services="SELECT * FROM  `project`";
		$data['get']=$this->model->getarraybyquery($services);
		$this->load->view('admin/header');
		$this->load->view('admin/project_form',$data);
	}
public function project_delete(){
		$this->load->model('model');
		$id=$this->uri->segment(3);
		$delete=$this->model->do_delete('project', $id);
		$this->session->set_flashdata('success', "<p style='color:green; background:#ceeace; width:280px; padding:18px;'>delete successfully ..!!</p>");
		redirect('user/project');
	}



public function product(){
		$this->load->model('model');
    	$team="SELECT * FROM  `product`";
		$data['get']=$this->model->getarraybyquery($team);
		$this->load->view('admin/header');
		$this->load->view('admin/product',$data);
	}
	public function product_form(){
			$this->load->model('model');
		$image="SELECT * FROM  `product`";
		$data['get']=$this->model->getarraybyquery($image);
		$this->load->view('admin/header');
		$this->load->view('admin/product_form',$data);
	} 
	public function add_product()  
    {  
      $this->load->model('model');  
         if(isset($_FILES["file"]["name"]))  
         {  
              $config['upload_path'] = './assets/uploads/';  
              $config['allowed_types'] = 'png|jpeg|jpg';  
              $this->load->library('upload', $config);  
              if(!$this->upload->do_upload('file'))  
              {  
                  $error =  $this->upload->display_errors(); 
                  echo json_encode(array('msg' => $error, 'success' => false));
              }  
              else 
              {  
                   $data = $this->upload->data();
                   // $img['img'] = $data['file_name'];
                   // $name['name'] = $_POST['name'];
                   // $designation['designation'] = $_POST['designation'];
                   // $qoute['qoute'] = $_POST['qoute'];
                   // $this->db->insert('team_img',$name,$designation,$qoute,$img);
                   // $getId = $this->db->insert_id();
                   $data=array('image' => $data['file_name'],
                   	'product_name	' => $_POST ['product']
					
						);
                   
                    $insert=$this->model->save('product',$data);  
              // echo 1;
                    $this->session->set_flashdata('success', "<p style='color: green; background: #ceeace; width: 280px; padding: 18px;'>UPLOADED SUCCESSFULLY ..!!</p>");
            						redirect('user/product');

                   // $arr = array('msg' => 'Image has not uploaded successfully', 'success' => false);
 
                   // if($getId){
                   //  $arr = array('msg' => 'Image has been uploaded successfully', 'success' => true);
                   // }
                   // echo json_encode($arr);
              }  
         }  
    }
  public function product_delete(){
		$this->load->model('model');
		$id=$this->uri->segment(3);
		$delete=$this->model->do_delete('product', $id);
		$this->session->set_flashdata('success', "<p style='color:green; background:#ceeace; width:280px; padding:18px;'>delete successfully ..!!</p>");
		redirect('user/product');
	}

}
