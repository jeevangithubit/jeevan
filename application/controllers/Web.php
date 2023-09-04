<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{

		$this->load->model('model');
		// $image="SELECT * FROM  `images`";
		// $data['get']=$this->model->getarraybyquery($image);
		// $this->load->model('model');
		// $address1="SELECT * FROM  `services` WHERE id limit 3";
		// $data['get']=$this->model->getarraybyquery($address1);

		// $address2="SELECT * FROM  `product`";
		// $data['get4']=$this->model->getarraybyquery($address2);

		// $address="SELECT * FROM  `address`";
		// $data['get3']=$this->model->getarraybyquery($address);

	 //    $team="SELECT * FROM  `client`";
		// $data['get2']=$this->model->getarraybyquery($team);

		// $address5="SELECT * FROM  `project` WHERE id limit 3";
		// $data['get5']=$this->model->getarraybyquery($address5);
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Web extends CI_Controller {
	
		public function index()
		{
	
			$this->load->model('model');
			$image="SELECT * FROM  `images`";
			$data['get']=$this->model->getarraybyquery($image);
			$this->load->model('model');
			$address="SELECT * FROM  `services`";
			$data['get1']=$this->model->getarraybyquery($address);
			$this->load->view('header');
			$this->load->view('index',$data);
			$this->load->view('footer');
		}
		public function about()
		{
			$this->load->view('header');
			$this->load->view('about');
			$this->load->view('footer');
		}
		public function contacts()
		{
			$this->load->model('model');
			$address="SELECT * FROM  `address`";
			$data['get']=$this->model->getarraybyquery($address);
			$this->load->view('header');
			$this->load->view('contacts', $data);
			$this->load->view('footer');
		}
		public function services()
		{
			$image="SELECT * FROM  `images`";
			$data['get1']=$this->model->getarraybyquery($image);
			$this->load->model('model');
			$address="SELECT * FROM  `services`";
			$data['get']=$this->model->getarraybyquery($address);
			$this->load->view('header');
			$this->load->view('services', $data);
			$this->load->view('footer');
		}
		public function Blog()
		{
			$this->load->view('header');
			$this->load->view('Blog');
			$this->load->view('footer');
		}
		public function industries()
		{
			$this->load->view('header');
			$this->load->view('industries');
			$this->load->view('footer');
		}
		public function save()
		{
			$this->load->model('model');
			$data=array('first_name' => $_POST['fname'],
						'last_name' => $_POST['lname'],
						'mobile' => $_POST['mobile'],
						'email' => $_POST['email'],
						'message' => $_POST['message']
		);
			$insert=$this->model->save('contact', $data);
	
			redirect('web/contacts');
		}
		
			public function update_address(){
			$this->load->model('model');
			$address="SELECT * FROM  `address`";
			$data['get']=$this->model->getarraybyquery($address);
			$this->load->view('admin/header');
			$this->load->view('admin/contacts',$data);
		}
	public function add_services(){
			$this->load->model('model');
			$services="SELECT * FROM  `services`";
			$data['get']=$this->model->getarraybyquery($services);
			$this->load->view('admin/header');
			$this->load->view('admin/services',$data);
	
		}
		public function update_image(){
			$this->load->model('model');
			$image="SELECT * FROM   `images`";
			$data['get']=$this->model->getarraybyquery($image);
			$this->load->view('admin/header');
			$this->load->view('admin/index',$data);
	
		}
	
	}