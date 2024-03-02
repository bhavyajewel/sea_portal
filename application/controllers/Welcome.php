<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->library(array('session','form_validation','email'));
		$this->load->model('Usermodel');
	}
	public function index()
	{
		$this->load->view('homepage');
	}
	public function home()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function admin()
	{
		$this->load->view('admin');
	}
	public function admincomp()
	{
		$data['dis']=$this->Usermodel->admincomp();
		  $this->load->view('admincomp',$data);
	}
	public function admincontra()
	{
		$data['dis']=$this->Usermodel->admincontra();
		  $this->load->view('admincontra',$data);
	}
	public function adminpublic()
	{
		$data['dis']=$this->Usermodel->adminpublic();
		  $this->load->view('adminpublic',$data);
	}
	public function user()
	{
		$this->load->view('user');
	}

	public function userreg()
	{
		$this->load->view('publicregister');
	}
	public function publicregister()
    {
		$pass=$this->input->post('password');
		$newpassword=$this->Usermodel->hash_password($pass);
         $data = array(
                        'name' => $this->input->post('name'),
                        'address' => $this->input->post('address'),
						'pincode' => $this->input->post('pincode'),
                        'district' => $this->input->post('district'),
						'city' => $this->input->post('city'),
                        'gender' => $this->input->post('gender'),
                        'contact' => $this->input->post('contact')
						);
					$da=array(
						'email' => $this->input->post('email'),
						'password'=>$newpassword,
					    'usertype'=>'1',
					


					);
					
                    
					$result   = $this->Usermodel->publicreg($data,$da);
					if($result)
					{
						echo"<script>alert('Registration sucessfull')</script>";
						redirect('Welcome/userreg','refresh');
					}
					else
					{
						echo"<script>alert('Registration unsucessfull')</script>";
					}

					}
					public function companyreg()
	{
		$this->load->view('companyreg');
	}
	public function companyregister()
    {
		$pass=$this->input->post('password');
		$newpassword=$this->Usermodel->hash_password($pass);
         $data = array(
                        'name' => $this->input->post('name'),
                        'address' => $this->input->post('address'),
						'state' => $this->input->post('state'),
                        'district' => $this->input->post('district'),
                        'contact' => $this->input->post('contact')
						);
					$da=array(
						'email' => $this->input->post('email'),
						'password'=>$newpassword,
					    'usertype'=>'2',
					


					);
					
                    
					$result   = $this->Usermodel->companyreg($data,$da);
					if($result)
					{
						echo"<script>alert('Registration sucessfull')</script>";
						redirect('Welcome/companyreg','refresh');
					}
					else
					{
						echo"<script>alert('Registration unsucessfull')</script>";
					}

					}
					public function contractreg()
	{
		$this->load->view('contractreg');
	}
	public function contractregister()
    {
		$pass=$this->input->post('password');
		$newpassword=$this->Usermodel->hash_password($pass);
         $data = array(
                        'name' => $this->input->post('name'),
                        'regid' => $this->input->post('regid'),
						'age' => $this->input->post('age'),
                        'gender' => $this->input->post('gender'),
                        'contact' => $this->input->post('contact')
						);
					$da=array(
						'email' => $this->input->post('email'),
						'password'=>$newpassword,
					    'usertype'=>'3',
					


					);
					
                    
					$result   = $this->Usermodel->contractreg($data,$da);
					if($result)
					{
						echo"<script>alert('Registration sucessfull')</script>";
						redirect('Welcome/contractreg','refresh');
					}
					else
					{
						echo"<script>alert('Registration unsucessfull')</script>";
					}

					}
                   
}
