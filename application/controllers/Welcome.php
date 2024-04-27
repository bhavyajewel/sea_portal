<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
		$this->load->helper(array('form', 'url'));
		$this->load->database();
		$this->load->library(array('session', 'form_validation', 'email'));
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
	public function companyhome()
	{
		$this->load->view('companyhome');
	}
	public function contracthome()
	{
		$this->load->view('contracthome');
	}
	public function admin()
	{
		$this->load->view('admin');
	}
	public function admincomp()
	{
		$data['dis'] = $this->Usermodel->admincomp();
		$this->load->view('admincomp', $data);
	}
	public function admincontra()
	{
		$data['dis'] = $this->Usermodel->admincontra();
		$this->load->view('admincontra', $data);
	}
	public function adminpublic()
	{
		$data['dis'] = $this->Usermodel->adminpublic();
		$this->load->view('adminpublic', $data);
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
		$pass = $this->input->post('password');
		$newpassword = $this->Usermodel->hash_password($pass);
		$data = array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'pincode' => $this->input->post('pincode'),
			'district' => $this->input->post('district'),
			'city' => $this->input->post('city'),
			'gender' => $this->input->post('gender'),
			'contact' => $this->input->post('contact')
		);
		$da = array(
			'email' => $this->input->post('email'),
			'password' => $newpassword,
			'usertype' => '3',



		);


		$result = $this->Usermodel->publicreg($data, $da);
		if ($result) {
			echo "<script>alert('Registration sucessfull')</script>";
			redirect('Welcome/userreg', 'refresh');
		} else {
			echo "<script>alert('Registration unsucessfull')</script>";
		}

	}
	public function companyreg()
	{
		$this->load->view('companyreg');
	}
	public function companyregister()
	{
		$pass = $this->input->post('password');
		$newpassword = $this->Usermodel->hash_password($pass);
		$data = array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'state' => $this->input->post('state'),
			'district' => $this->input->post('district'),
			'contact' => $this->input->post('contact')
		);
		$da = array(
			'email' => $this->input->post('email'),
			'password' => $newpassword,
			'usertype' => '2',



		);


		$result = $this->Usermodel->companyreg($data, $da);
		if ($result) {
			echo "<script>alert('Registration sucessfull')</script>";
			redirect('Welcome/companyreg', 'refresh');
		} else {
			echo "<script>alert('Registration unsucessfull')</script>";
		}
	}
	public function companyupdation_view()
	{
		$this->load->view('companyheader');
		$id = $this->session->userid;
		$data['id'] = $this->session->userid;
		$data['views'] = $this->Usermodel->companyupdation_dataview($id);
		$this->load->view('companyupdation', $data);
		$this->load->view('footer');
	}
	public function companyupdation()
	{
		// $pass=$this->input->post('password');
		// $newpassword=$this->Usermodel->hash_password($pass);
		$id = $this->input->post('hide');
		$data = array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'state' => $this->input->post('state'),
			'district' => $this->input->post('district'),
			'contact' => $this->input->post('contact')
		);
		$da = array(
			'email' => $this->input->post('email'),
			//  'password'=>$newpassword,
			// 'usertype'=>'2',



		);


		$result = $this->Usermodel->companyupdation($data, $id);
		$result1 = $this->Usermodel->companyemailupdate($da, $id);
		if ($result && $result1) {
			echo "<script>alert('Updation sucessfull')</script>";
			redirect('Welcome/companyupdation_view', 'refresh');
		} else {
			echo "<script>alert('Updation unsucessfull')</script>";
		}

	}
	public function contractreg()
	{
		$this->load->view('contractreg');
	}
	public function contractregister()
	{
		$pass = $this->input->post('password');
		$newpassword = $this->Usermodel->hash_password($pass);
		$data = array(
			'name' => $this->input->post('name'),
			'regid' => $this->input->post('regid'),
			'age' => $this->input->post('age'),
			'gender' => $this->input->post('gender'),
			'contact' => $this->input->post('contact')
		);
		$da = array(
			'email' => $this->input->post('email'),
			'password' => $newpassword,
			'usertype' => '3',



		);


		$result = $this->Usermodel->contractreg($data, $da);
		if ($result) {
			echo "<script>alert('Registration sucessfull')</script>";
			redirect('Welcome/contractreg', 'refresh');
		} else {
			echo "<script>alert('Registration unsucessfull')</script>";
		}

	}
	public function contractupdation_view()
	{
		$this->load->view('contractorheader');
		$id = $this->session->userid;
		$data['id'] = $this->session->userid;
		$data['views'] = $this->Usermodel->contractupdation_dataview($id);
		$this->load->view('contractupdation', $data);
		$this->load->view('footer');
	}
	public function contractupdation()
	{
		// $pass=$this->input->post('password');
		// $newpassword=$this->Usermodel->hash_password($pass);
		$id = $this->input->post('hide');
		$data = array(
			'name' => $this->input->post('name'),
			'regid' => $this->input->post('regid'),
			'age' => $this->input->post('age'),
			'gender' => $this->input->post('gender'),
			'contact' => $this->input->post('contact')
		);
		$da = array(
			'email' => $this->input->post('email'),
			//  'password'=>$newpassword,
			// 'usertype'=>'2',



		);


		$result = $this->Usermodel->contractupdation($data, $id);
		$result1 = $this->Usermodel->contractemailupdate($da, $id);
		if ($result && $result1) {
			echo "<script>alert('Updation sucessfull')</script>";
			redirect('Welcome/contractupdation_view', 'refresh');
		} else {
			echo "<script>alert('Updation unsucessfull')</script>";
		}

	}
	public function publicupdation_view()
	{
		$this->load->view('userheader');
		$id = $this->session->userid;
		$data['id'] = $this->session->userid;
		$data['views'] = $this->Usermodel->publicupdation_dataview($id);
		$this->load->view('publicupdation', $data);
		$this->load->view('footer');
	}
	public function publicupdation()
	{
		// $pass=$this->input->post('password');
		// $newpassword=$this->Usermodel->hash_password($pass);
		$id = $this->input->post('hide');
		$data = array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'pincode' => $this->input->post('pincode'),
			'district' => $this->input->post('district'),
			'city' => $this->input->post('city'),
			'gender' => $this->input->post('gender'),
			'contact' => $this->input->post('contact'),
		);
		$da = array(
			'email' => $this->input->post('email'),
			//  'password'=>$newpassword,
			// 'usertype'=>'2',



		);


		$result = $this->Usermodel->publicupdation($data, $id);
		$result1 = $this->Usermodel->publicemailupdate($da, $id);
		if ($result && $result1) {
			echo "<script>alert('Updation sucessfull')</script>";
			redirect('Welcome/publicupdation_view', 'refresh');
		} else {
			echo "<script>alert('Updation unsucessfull')</script>";
		}

	}
	public function companyapproval()
	{
		$get = $this->uri->segment(3);
		$status = array('status' => '1');
		$model = $this->Usermodel->companyapprove($get, $status);
		if ($model) {
			echo "<script>alert('Approval success')</script>";
			redirect('Welcome/admincomp', 'refresh');
		} else {
			echo "<script>alert('Approval unsuccessfull')</script>";
		}
	}
	public function contractapproval()
	{
		$get = $this->uri->segment(3);
		$status = array('status' => '1');
		$model = $this->Usermodel->contractapprove($get, $status);
		if ($model) {
			echo "<script>alert('Approval success')</script>";
			redirect('Welcome/admincontra', 'refresh');
		} else {
			echo "<script>alert('Approval unsuccessfull')</script>";
		}
	}
	public function contractreject()
	{
		$get = $this->uri->segment(3);
		$status = array('status' => '2');
		$model = $this->Usermodel->contractreject($get, $status);
		if ($model) {
			echo "<script>alert('Successfully Rejected')</script>";
			redirect('Welcome/admincontra', 'refresh');
		} else {
			echo "<script>alert('Rejection Unsuccessfull')</script>";
		}
	}
	public function companyreject()
	{
		$get = $this->uri->segment(3);
		$status = array('status' => '2');
		$model = $this->Usermodel->companyreject($get, $status);
		if ($model) {
			echo "<script>alert('Successfully Rejected')</script>";
			redirect('Welcome/admincomp', 'refresh');
		} else {
			echo "<script>alert('Rejection Unsuccessfull')</script>";
		}
	}
	public function login_program()
	{
		$this->load->helper('security');
		$id = $this->input->post('username');
		// echo $id;exit;
		$id1 = $this->input->post('password');
		// echo $id1;exit;
		if ($this->Usermodel->checklogin($id, $id1)) {
			$id2 = $this->Usermodel->getuserid($id);
			$alldetail = $this->Usermodel->getuserdetail($id2);
			$this->session->set_userdata(
				array(
					'userid' => $id2,
					'logined' => (bool) true,
					'usertype' => $alldetail->usertype,
					'status' => $alldetail->status
				)
			);
			if (
				isset($_SESSION['logined']) and ($_SESSION['logined'] === true)
				and ($_SESSION['usertype'] === '0') and ($_SESSION['status'] === '1')
			) {
				redirect('Welcome/admin', 'refresh');

			} else if (
				isset($_SESSION['logined']) and ($_SESSION['logined'] === true)
				and
				($_SESSION['usertype'] === '1') and ($_SESSION['status'] === '1')
			) {
				redirect('Welcome/companyhome', 'refresh');

			} else if (
				isset($_SESSION['logined']) and ($_SESSION['logined'] === true)
				and
				($_SESSION['usertype'] === '2') and ($_SESSION['status'] === '1')
			) {
				redirect('Welcome/contracthome', 'refresh');

			} else if (
				isset($_SESSION['logined']) and ($_SESSION['logined'] === true)
				and
				($_SESSION['usertype'] === '3') and ($_SESSION['status'] === '1')
			) {
				redirect('Welcome/user', 'refresh');

			} else {
				echo "<script>alert('Waiting for admin approval')</script>";
				redirect('Welcome/login', 'refresh');
			}
		} else {
			echo "<script>alert('email or password incorrect')</script>";
			redirect('Welcome/login', 'refresh');
		}
	}
	public function news()
	{
		// $data['dis']=$this->Usermodel->newsupdate();
		$this->load->view('newsupdate');
	}
	public function addnews()
	{
		$this->load->view('news');
	}
	public function newsadd()
	{
		$date = date('Y-m-d');
		$data = array(
			'news' => $this->input->post('news'),
			'currentdate' => $date,
		);


		$result = $this->Usermodel->addnews($data, $da);
		if ($result) {
			echo "<script>alert('News updated')</script>";
			redirect('Welcome/addnews', 'refresh');
		} else {
			echo "<script>alert('News not Updated')</script>";
		}
	}
	public function newstable()
	{
		// $id=$this->session->userid;
		// $data['id']=$this->session->userid;
		$data['dis'] = $this->Usermodel->newstable();
		$this->load->view('newstable', $data);
	}
	public function newsview()
	{
		$this->load->view('updatenews');
	}
	public function newsupdation_dataview()
	{
		
		$this->load->view('userheader');
		$data['id'] = $this->uri->segment(3);
		$id = $this->uri->segment(3);
		$data['views'] = $this->Usermodel->newsupdation_dataview($id);
		$this->load->view('editnews', $data);
		$this->load->view('footer');
	}
	public function newsupdation()
	{
		// $pass=$this->input->post('password');
		// $newpassword=$this->Usermodel->hash_password($pass);
		$id = $this->input->post('hide');
		$date = date('Y-m-d');
		//   echo $id;exit;
		$data = array(
			'news' => $this->input->post('news'),
			'currentdate' => $date,
		);


		$result = $this->Usermodel->newsupdation($data, $id);
		//   $result1=$this->Usermodel->companyemailupdate($da,$id);
		if ($result) {
			echo "<script>alert('Updation sucessfull')</script>";
			redirect('Welcome/newstable', 'refresh');
		} else {
			echo "<script>alert('Updation unsucessfull')</script>";
		}

	}
	public function newsreject()
	{
		$get = $this->uri->segment(3);
		//   $status=array('status'=>'1');
		$model = $this->Usermodel->newsreject($get);
		if ($model) {
			echo "<script>alert('Successfully Rejected')</script>";
			redirect('Welcome/newstable', 'refresh');
		} else {
			echo "<script>alert('Rejection Unsuccessfull')</script>";
		}
	}
	public function newstableviews()
	{
		$this->load->view('userheader');
		$data['dis'] = $this->Usermodel->newstableviews();
		$this->load->view('newstableview', $data);
		$this->load->view('footer');
	}
	public function shipdetails()
	{
		$this->load->view('companyheader');
		$this->load->view('shipdetailsadding');
		$this->load->view('footer');

	}
	public function shipdetailsprocess()
	{
		$loginid = $this->session->userid;
		$data = array(
			'shipcategory' => $this->input->post('shipcategory'),
			'shipname' => $this->input->post('shipname'),
			'source' => $this->input->post('source'),
			'destination' => $this->input->post('destination'),
			'shipdetails' => $this->input->post('shipdetails'),
			'loginid' => $loginid

		);


		$result = $this->Usermodel->shipdetails($data);
		if ($result) {
			echo "<script>alert('Ship details added sucessfully')</script>";
			redirect('Welcome/companyhome', 'refresh');
		} else {
			echo "<script>alert('Ship details adding unsucessfull')</script>";
		}

	}
	public function shipview()
	{
		$this->load->view('companyheader');
		$id = $this->session->userid;
		$data['dis'] = $this->Usermodel->shipdetailsviews($id);
		$this->load->view('shipdetailsview', $data);
		$this->load->view('footer');

	}
	public function ship_edit_view()
	{
		$this->load->view('companyheader');
		$shipid = $this->uri->segment(3);
		$data['id'] = $this->uri->segment(3);
		$data['dis'] = $this->Usermodel->shipupdation_dataview($shipid);
		$this->load->view('shipedit', $data);
		$this->load->view('footer');
	}
	public function shipupdation()
	{

		$id = $this->input->post('hide');
		//   $loginid=$this->session->userid;
		$data = array(
			'shipcategory' => $this->input->post('shipcategory'),
			'shipname' => $this->input->post('shipname'),
			'source' => $this->input->post('source'),
			'destination' => $this->input->post('destination'),
			'shipdetails' => $this->input->post('shipdetails')
		);


		$result = $this->Usermodel->shipupdation($data, $id);

		if ($result) {
			echo "<script>alert('Updation successfull')</script>";
			redirect('Welcome/companyhome', 'refresh');
		} else {
			echo "<script>alert('Updation unsuccessfull')</script>";
		}

	}
	public function ship_delete()
	{
		$get = $this->uri->segment(3);
		//   $status=array('status'=>'1');
		$model = $this->Usermodel->shipdelete($get);
		if ($model) {
			echo "<script>alert('Successfully Rejected')</script>";
			redirect('Welcome/companyhome', 'refresh');
		} else {
			echo "<script>alert('Rejection Unsuccessfull')</script>";
		}
	}
	public function ship_public_view()
	{
		$data['dis'] = $this->Usermodel->shippublic();
		$this->load->view('shippublicview', $data);
	}
	public function exports()
	{
		$this->load->view('userheader');
		$get['shipid'] = $this->uri->segment(3);
		$get['category'] = $this->Usermodel->getcategory();
		$this->load->view('exportdetails', $get);
		$this->load->view('footer');
	}
	public function shipexportprocess()
	{
		$loginid = $this->session->userid;
		$shipid = $this->input->post('hide');
		$category = $this->input->post('productcategory');
		$quantity = $this->input->post('productquantity');
		$priceofitem = $this->Usermodel->getpriceofitem($category);
		$taxofitem = $this->Usermodel->gettaxofitem($category);
		$totalamount = $quantity * $priceofitem * $taxofitem;
		// echo $totalamount;exit;
		$data = array(
			'productcategory' => $this->input->post('productcategory'),
			'productname' => $this->input->post('productname'),
			'productquantity' => $quantity,
			'source' => $this->input->post('source'),
			'destination' => $this->input->post('destination'),
			'date' => $this->input->post('date'),
			'recepientname' => $this->input->post('recepientname'),
			'recepientaddress' => $this->input->post('recepientaddress'),
			'recepientcontact' => $this->input->post('recepientcontact'),
			'loginid' => $loginid,
			'shipid' => $shipid,
		);

		$result = $this->Usermodel->exports($data);
		if ($result) {
			echo "<script>alert('Ship  export details added sucessfully')</script>";
			redirect('Welcome/payment/' . $loginid . '/' . $totalamount);
		} else {
			echo "<script>alert('Ship expot details adding unsucessfull')</script>";
		}
	}
	public function shipexportview()
	{
		$this->load->view('userheader');
		$search = $this->input->post('search');
		// $check=$this->Usermodel->search();
		$get = $this->uri->segment(3);
		$data['dis'] = $this->Usermodel->shipexportviews($search);
		if (empty($data['data'])) {
			$data['search_message'] = 'No results found !!! .';
		}
		$this->load->view('shipexportview', $data);
		$this->load->view('footer');
	}
	public function shipexportedit_view()
	{
		$this->load->view('userheader');
		$shipid = $this->uri->segment(3);
		$data['id'] = $this->uri->segment(3);
		$data['dis'] = $this->Usermodel->exportupdation_dataview($shipid);
		$this->load->view('shipexportedit', $data);
		$this->load->view('footer');
	}
	public function exportupdation()
	{

		$id = $this->input->post('hide');
		//   $loginid=$this->session->userid;
		$data = array(
			'shipcategory' => $this->input->post('shipcategory'),
			'shipname' => $this->input->post('shipname'),
			'source' => $this->input->post('source'),
			'destination' => $this->input->post('destination'),
			'shipdetails' => $this->input->post('shipdetails'),
		);


		$result = $this->Usermodel->exportupdation($data, $id);

		if ($result) {
			echo "<script>alert('Updation successfull')</script>";
			redirect('Welcome/user', 'refresh');
		} else {
			echo "<script>alert('Updation unsuccessfull')</script>";
		}

	}
	public function export_delete()
	{
		$get = $this->uri->segment(3);
		//   $status=array('status'=>'1');
		$model = $this->Usermodel->exportdelete($get);
		if ($model) {
			echo "<script>alert('Successfully Cancelled')</script>";
			redirect('Welcome/user', 'refresh');
		} else {
			echo "<script>alert('Cancellation Unsuccessfull')</script>";
		}
	}
	public function exportdetailsview()
	{
		$this->load->view('companyheader');
		$id = $this->session->userid;
		$data['dis'] = $this->Usermodel->exportdetailsview($id);
		$this->load->view('exportdetailsview', $data);
		$this->load->view('footer');
	}

	public function exportingchannel()
	{
		$this->load->view('companyheader');
		$this->load->view('exportingchannel');
		$this->load->view('footer');
	}
	public function exportchannel()
	{
		$loginid = $this->session->userid;
		$data = array(
			'productcategory' => $this->input->post('productcategory'),
			'product_subcategory' => $this->input->post('product_subcategory'),
			'productname' => $this->input->post('productname'),
			'companyname' => $this->input->post('companyname'),
			'exportingcharge' => $this->input->post('exportingcharge'),
			'taxamount' => $this->input->post('taxamount'),
			//   'loginid'=>$loginid

		);


		$result = $this->Usermodel->exportingchannel($data);
		if ($result) {
			echo "<script>alert('exporting channel details added sucessfully')</script>";
			redirect('Welcome/admin', 'refresh');
		} else {
			echo "<script>alert('exporting channel details adding is unsucessfull')</script>";
		}


	}
	public function payment()
	{
		$data['loginid'] = $this->uri->segment(3);
		$data['amount'] = $this->uri->segment(4);
		$this->load->view('payment', $data);
	}
	public function insertpayment()
	{
		$id = $this->session->userid;
		$loginid = $this->input->post('loginid');
		$amount = $this->input->post('amount');
		// echo $amount;exit;
		$cardno = $this->input->post('cardno');
		$cvv = $this->input->post('cvv');
		$totalamount = $this->Usermodel->gettotalamountbank($cardno, $cvv);
		$balanceamount = $totalamount - $amount;
		$date = date('Y-m-d');
		$data = array(
			'noc' => $this->input->post('noc'),
			'cardno' => $this->input->post('cardno'),
			'cvv' => $this->input->post('cvv'),
			'expiredate' => $this->input->post('expiredate'),
			'totalamount' => $amount,
			'currentdate' => $date,
			'loginid' => $loginid
		);
		$updatebankamount = array('amount' => $balanceamount);
		$paystatus = array('paystatus' => '1');

		$result = $this->Usermodel->insertpayment($data);
		$result1 = $this->Usermodel->updatebalance($cardno, $cvv, $updatebankamount);
		$result2 = $this->Usermodel->updatepaystatus($paystatus, $result);
		if ($result && $result1 && $result2) {
			echo "<script>alert('Payment Successful')</script>";
			redirect('Welcome/payment', 'refresh');
		} else {
			echo "<script>alert('News not Updated')</script>";
		}
	}
	public function userexport()
	{
		$this->load->view('userheader');
		$id = $this->session->userid;
		$data['dis'] = $this->Usermodel->userexport($id);
		$this->load->view('userexportview', $data);
		$this->load->view('footer');
	}
	public function cancelstatus()
	{
		$shipid = $this->uri->segment(3);
		$status = array('cancel_status' => '1');
		$result = $this->Usermodel->cancelstatus($shipid, $status);
		if ($result) {
			echo "<script>alert('cancelled')</script>";
			redirect('Welcome/userexport', 'refresh');
		} else {
			echo "<script>alert('not cancelled')</script>";
			redirect('Welcome/userexport', 'refresh');
		}
	}
	public function shiporders()
	{
		$this->load->view('companyheader');
		$id = $this->uri->segment(3);
		// $data['id']=$this->session->id;
		$data['dis'] = $this->Usermodel->shiporders($id);
		$this->load->view('shiporders', $data);
	}
	public function complaints()
	{
		$get['shipid'] = $this->uri->segment(3);
		$get['exportid'] = $this->uri->segment(4);
		$this->load->view('userheader');
		$this->load->view('complaints', $get);
		$this->load->view('footer');
	}
	public function complaint()
	{
		$loginid = $this->session->userid;
		$shipid = $this->input->post('hide');
		$exportid = $this->input->post('exportid');
		//   echo $shipid;exit;
		$data = array(
			'subject' => $this->input->post('subject'),
			'complaints' => $this->input->post('complaints'),
			'image' => $this->input->post('image'),
			'loginid' => $loginid,
			'shipid' => $shipid,
			'exportid' => $exportid
		);
		$result = $this->Usermodel->complaints($data);
		if ($result) {
			echo "<script>alert('Complaints added sucessfully')</script>";
			redirect('Welcome/user', 'refresh');
		} else {
			echo "<script>alert('Complaints adding unsucessfull')</script>";
		}

	}
	public function complaintsview()
	{
		$this->load->view('companyheader');
		$shipid = $this->uri->segment(3);
		$data['dis'] = $this->Usermodel->complaintsview($shipid);
		$this->load->view('complaintsview', $data);
		$this->load->view('footer');
	}

	public function refunds()
	{
		$get['shipid'] = $this->uri->segment(3);
		$get['exportid'] = $this->uri->segment(4);
		$this->load->view('companyheader');
		$this->load->view('refund', $get);
		$this->load->view('footer');
	}

	public function refund_process()
	{
		$compalaintid = $this->input->post('hide');
		$exportid = $this->input->post('export');
		$refundamount = $this->input->post('refundamount');
		if ($refundamount) {
			echo "<script>alert('Redirecting to payment')</script>";
			redirect('Welcome/refund_payment/' . $compalaintid . '/' . $exportid . '/' . $refundamount);
		} else {
			echo "<script>alert('Complaints adding unsucessfull')</script>";
		}
	}

	public function refund_payment()
	{
		$data['complaintid'] = $this->uri->segment(3);
		$data['exportid'] = $this->uri->segment(4);
		$data['amount'] = $this->uri->segment(5);
		$this->load->view('refundpayment', $data);
	}

	public function refund_payment_process()
	{
		$userid = $this->session->userid;
		$complaintid = $this->input->post('complaintid');
		$refundamount = $this->input->post('amount');
		$exportid = $this->input->post('exportid');
		$cardno = $this->input->post('cardno');
		$cvv = $this->input->post('cvv');
		$totalamount = $this->Usermodel->gettotalamountbank($cardno, $cvv);
		$balanceamount = $totalamount - $refundamount;
		// echo $balanceamount;exit;
		$date = date('Y-m-d');
		$data = array(
			'noc' => $this->input->post('noc'),
			'cardno' => $this->input->post('cardno'),
			'cvv' => $this->input->post('cvv'),
			'expiredate' => $this->input->post('expiredate'),
			'totalamount' => $refundamount,
			'currentdate' => $date,
			'loginid' => $userid
		);
		$updatebankamount = array('amount' => $balanceamount);

		$contactnouser = $this->Usermodel->getcontactno($exportid);
		$totalamountcredit = $this->Usermodel->gettotalamountcredit($contactnouser);
		$credit_amount = $totalamountcredit + $refundamount;
		// echo $credit_amount;exit;
		$refund_status = array('refund_status' => '1');
		
		$credit_amount_update = array('amount' => $credit_amount);

		$result = $this->Usermodel->insertpayment($data);
		$result1 = $this->Usermodel->updatebalance($cardno, $cvv, $updatebankamount);
		$result2 = $this->Usermodel->updatecreditbank($contactnouser, $credit_amount_update);
		$result3 = $this->Usermodel->updaterefundstatus($refund_status, $complaintid);
		if ($result && $result1 && $result2  && $result3 ) {
			echo "<script>alert('Payment Successful')</script>";
			redirect('Welcome/payment', 'refresh');
		} else {
			echo "<script>alert('News not Updated')</script>";
		}
	}
	public function tenderadding()
	{
		$this->load->view('companyheader');
		$this->load->view('tender');
		$this->load->view('footer');

	}
	public function admintenders()
	{
		$this->load->view('admintenderpost');
	}

	public function tender()
	{
		$date = date('Y-m-d');
		$data = array(
			'tendercategory' => $this->input->post('tendercategory'),
			'tendername' => $this->input->post('tendername'),
			'tenderdetails' => $this->input->post('tenderdetails'),
			'amount' => $this->input->post('amount'),
			'lastdate' => $this->input->post('lastdate'),
			'date' => $date,
		);


		$result = $this->Usermodel->admintenders($data);

		if ($result) {
			echo "<script>alert('tender added successfully')</script>";
			redirect('Welcome/admin', 'refresh');
		} else {
			echo "<script>alert('tender adding unsuccessfull')</script>";
		}

	}

	// public function tenderviews($id)
	// {
	// 	// $this->load->view('userheader');
	// 	$data['dis'] = $this->Usermodel->tenderview();
	// 	$this->load->view('tenderadminview',$data);
	// 	// $this->load->view('footer');
	// }

	public function tenderviews()
	{
		// $this->load->view('userheader');
		$data['dis'] = $this->Usermodel->tenderview();
		$this->load->view('tenderadminview', $data);
		// $this->load->view('footer');
	}
	
	public function tenderupdatepage()
	{
		$id = $this->uri->segment(3);
		$data['id'] = $this->uri->segment(3);
		$data['dis']=$this->Usermodel->tenderupdation_view($id);
		$this->load->view('tenderadminedit', $data);
	}

	public function tenderupdations()
	{

		$id = $this->input->post('hide');
		$data = array(
			'tendercategory' => $this->input->post('tendercategory'),
			'tendername' => $this->input->post('tendername'),
			'tenderdetails' => $this->input->post('tenderdetails'),
			'amount' => $this->input->post('amount'),
			'lastdate' => $this->input->post('lastdate'),
			'date' => $this->input->post('date'),
		);


		$result = $this->Usermodel->tenderupdation($data, $id);

		if ($result) {
			echo "<script>alert('Updation successfull')</script>";
			redirect('Welcome/admin', 'refresh');
		} else {
			echo "<script>alert('Updation unsuccessfull')</script>";
		}

	}

	public function tender_delete()
	{
		$get = $this->uri->segment(3);
		$model = $this->Usermodel->tenderdelete($get);
		if ($model) {
			echo "<script>alert(' Tender Successfully Cancelled')</script>";
			redirect('Welcome/admin', 'refresh');
		} else {
			echo "<script>alert(' Tender Cancellation Unsuccessfull')</script>";
		}
	}

	public function tendercontractviews()
	{
		$id = $this->uri->segment(3);
		$this->load->view('companyheader');
		// $this->load->view('tendercontractview');
		$data['dis']=$this->Usermodel->tendercontractview($id);
		$this->load->view('tendercontractview',$data);
		$this->load->view('footer');

	}

	public function tenderapplynow()
	{
		$this->load->view('companyheader');
		$tenderid['tid']=$this->uri->segment(3);
		$this->load->view('tenderapplynow', $tenderid);
		$this->load->view('footer');
	}

	public function tenderapplynow1()
	{
		$id = $this->input->post('hide');
		$loginid = $this->session->userid;
		$date= date('Y-m-d H:i:s');
		$data = array(
			'contract_loginid' => $loginid,
			'tenderid' => $id,
			'amount' => $this->input->post('amount'),
			'currentdate' => $date,

		);


		$result = $this->Usermodel->tenderapplynow_1($data,$id);
		if ($result) {
			echo "<script>alert('tender amount added sucessfully')</script>";
			redirect('Welcome/contracthome', 'refresh');
		} else {
			echo "<script>alert('tender amount addedd unsucessfull')</script>";
		}

	}

	public function tenderviewapply()
	{
		// $this->load->view('companyheader');
		$data['dis'] = $this->Usermodel->tenderapplynow1();
		$this->load->view('tenderapplyview', $data);
		$this->load->view('footer');
	}

	public function tenderapproval()
	{
		$get = $this->uri->segment(3);
		// echo $get;exit;
		$status = array('approve_status' => '1');
		$model = $this->Usermodel->tenderapprove($get,$status);
		if ($model) {
			echo "<script>alert('Approval success')</script>";
			redirect('Welcome/tenderviewapply', 'refresh');
		} else {
			echo "<script>alert('Approval unsuccessfull')</script>";
		}
	}

	public function tenderapprovedview()
	{
		$this->load->view('companyheader');
		$data['dis'] = $this->Usermodel->tenderapproveview1();
		$this->load->view('tenderapproved', $data);
		$this->load->view('footer');
	}

	public function jobss()
	{
		$this->load->view('companyheader');
		$this->load->view('job');
		$this->load->view('footer');
	}

	public function jobdetails()
	{
		$date = date('Y-m-d');
		$loginid = $this->session->userid;
		$data = array(
			'jobcategory' => $this->input->post('jobcategory'),
			'jobname' => $this->input->post('jobname'),
			'jobdetails' => $this->input->post('jobdetails'),
			'qualification' => $this->input->post('qualification'),
			'lastdateforapply' => $this->input->post('lastdateforapply'),
			'loginid' => $loginid,
			'currentdate' => $date,


		);


		$result = $this->Usermodel->job($data);
		if ($result) {
			echo "<script>alert('Job details added sucessfully')</script>";
			redirect('Welcome/admin', 'refresh');
		} else {
			echo "<script>alert('Job details adding unsucessfull')</script>";
		}
}
public function jobviews()
{
	$this->load->view('userheader');
	$data['dis'] = $this->Usermodel->jobview();
	$this->load->view('jobviewuser', $data);
	$this->load->view('footer');
}

public function jobedit_view()
	{
		$this->load->view('userheader');
		$jobid = $this->uri->segment(3);
		$data['jobid'] = $this->uri->segment(3);
		$data['dis'] = $this->Usermodel->jobedit_dataview($jobid);
		$this->load->view('jobedit', $data);
		$this->load->view('footer');
	}

public function jobupdations()
	{

		$id = $this->input->post('hide');
		//   $loginid=$this->session->userid;
		$data = array(
			'jobcategory' => $this->input->post('jobcategory'),
			'jobname' => $this->input->post('jobname'),
			'jobdetails' => $this->input->post('jobdetails'),
			'qualification' => $this->input->post('qualification'),
			'lastdateforapply' => $this->input->post('lastdateforapply'),
		);


		$result = $this->Usermodel->jobupdation($data, $id);

		if ($result) {
			echo "<script>alert(' Job Updation successfull')</script>";
			redirect('Welcome/admin', 'refresh');
		} else {
			echo "<script>alert('Job Updation unsuccessfull')</script>";
		}

	}
	public function jobdelete()
	{
		$get = $this->uri->segment(3);
		$model = $this->Usermodel->job_delete($get);
		if ($model) {
			echo "<script>alert('Successfully Rejected')</script>";
			redirect('Welcome/admin', 'refresh');
		} else {
			echo "<script>alert('Rejection Unsuccessfull')</script>";
		}
	}

	public function jobviewadmin1()
{
	// $this->load->view('userheader');
	$data['dis'] = $this->Usermodel->jobviewadmins();
	$this->load->view('jobviewadmin', $data);
	// $this->load->view('footer');
}

public function jobapplynow()
	{
		// $id = $this->input->post('hide');
		$jobid = $this->uri->segment(3);
		$loginid = $this->session->userid;

		$date= date('Y-m-d H:i:s');
		$data = array(
			'jobid'=>$jobid,
			'loginid' => $loginid,
			'date' => $date,
          );

		$result = $this->Usermodel->jobapplynow_1($data,$jobid);
		if ($result) {
			echo "<script>alert('job applied sucessfully')</script>";
			redirect('Welcome/user', 'refresh');
		} else {
			echo "<script>alert('job apply is unsucessfull')</script>";
		}

	}

	public function interviewform()
	{
		$this->load->view('companyheader');
		$this->load->view('interviewform');
		$this->load->view('footer');
	}

	public function interview()
	{
		$id = $this->input->post('hide');
		// $loginid = $this->session->userid;
		$date= date('Y-m-d H:i:s');
		$data = array(
			'interview_date' => $this->input->post('interview_date'),
			'time' => $this->input->post('time'),
			'venue' => $this->input->post('venue'),
			'cv' => $this->input->post('cv'),
			// 'loginid' => $loginid,
			'currentdate'=> $date,

		);


		$result = $this->Usermodel->interview1($data,$id);
		if ($result) {
			echo "<script>alert('Interview details added sucessfully')</script>";
			redirect('Welcome/companyhome', 'refresh');
		} else {
			echo "<script>alert('Interview details adding unsucessfull')</script>";
		}

	}
}





