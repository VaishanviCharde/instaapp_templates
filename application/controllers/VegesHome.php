<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VegesHome extends CI_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	$this->load->model('Home_Model');
	}

	public function index()
	{
		$type = 'user';
		$method = 'GET';
        $url = URL.'restaurant-details/?restaurant_id='.RESTID.'&type='.$type;
        $header = array(
	       'Content-Type: application/json'
        );
        $apiResponse = $this->Home_Model->CallAPI($method, $url, $header);
		$apiDecodedResponse = json_decode($apiResponse);
		$data = array(
			"token" => '',
			"appName" => '',
			"appLogo" => '',
			"appAddress" => '',
			"appCity" => '',
			"appState" => '',
			"appZip" => '',
			"appCountry" => '',
			"appEmail" => '',
			"appPhone" => '',
			"appStatus" => '',
			"appWorking_hours" => '',
			"appCurrency" => '',
			"appCurrencySymbol" => '',
			"appTemplate" => '',
			"appDesc" => '',
			"appCreated_at" => '',
			// "appStripeApiKey" => '',
			// "appPrinter_mac" => '',
			// "appPlan" => '',
			"appAdminIndustType" => '',
			"appAdminUsername" => ''
		);
		if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200) {
			if(isset($apiDecodedResponse->response)) {
				$data = array(
					'token' => $apiDecodedResponse->response->Token,
					'appName' => $apiDecodedResponse->response->compony_name,
					'appLogo' => $apiDecodedResponse->response->compony_image,
					'appAddress' => $apiDecodedResponse->response->address,
					'appCity' => $apiDecodedResponse->response->city,
					'appState' => $apiDecodedResponse->response->state,
					'appZip' => $apiDecodedResponse->response->zip,
					'appCountry' => $apiDecodedResponse->response->country,
					'appEmail' => $apiDecodedResponse->response->email,
					'appPhone' => $apiDecodedResponse->response->phone,
					'appStatus' => $apiDecodedResponse->response->status,
					'appWorking_hours' => $apiDecodedResponse->response->working_hours,
					'appCurrency' => $apiDecodedResponse->response->currency,
					'appCurrencySymbol' => $apiDecodedResponse->response->currency_symbol,
					'appDesc' => $apiDecodedResponse->response->about_us,
					'appTemplate' => $apiDecodedResponse->response->template_details,
					'appCreated_at' => $apiDecodedResponse->response->created_at,
					'appAdminIndustType' => $apiDecodedResponse->response->industry_type,
					'appAdminUsername' => $apiDecodedResponse->response->admin_username,
				);
			}
		}
		$this->session->set_userdata('token_id', $data['token']);
		$this->session->set_userdata('pre_login_data', $data);

		/** Set the default Controller Name */
			$defaultController = $this->uri->rsegment(1);
			define('DE_CONT', $defaultController);
		/** /. Set the default Controller Name */

		/* Get Category */
		$method = 'GET';
		$url = URL.'category/?restaurant_id='.RESTID;

		$header = array(
			'Content-Type: application/json',
			'Authorization:  Token '.$data['token']
		);
		$apiResponse = $this->Home_Model->CallAPI($method, $url, $header);
		$apiDecodedResponse = json_decode($apiResponse);
		$categoryData = array();
		if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != ""){
			$categoryData = $apiDecodedResponse->response;
		}
		$data['categoryData'] = $categoryData;
		// print_r($categoryData);exit;
		/* /.Get Category */

		// print_r($this->session->userdata('pre_login_data'));
		$this->load->view('veges/index', $data);
	}

	/** Login Function */
	public function login() {
		$this->load->view('veges/login');
	}

	/** Register Function */
	public function register() {
		$this->load->view('veges/register');
	}

	/** Guest Login Function */
	public function guestLogin() {
		$this->load->view('veges/guest_login');
	}

	/** Forgot Username Function */
	public function forgotUsername() {
		$this->load->view('veges/forgot_username');
	}

	/** Forgot Password Function */
	public function forgotPassword() {
		$this->load->view('veges/forgot_password');
	}

	/** Product Page Function */
	public function product() {
		$this->load->view('veges/product');
	}

	/** Product Details Page Function */
	public function productDetails() {
		$this->load->view('veges/product_details');
	}

	/** About Us Page Function */
	public function aboutUs() {
		$this->load->view('veges/about_us');
	}

	/** Contact Us Page Function */
	public function contactUs() {
		$this->load->view('veges/contact_us');
	}

	/** Cart Page Function */
	public function cart() {
		$this->load->view('veges/cart');
	}

	/** Checkout Page Function */
	public function checkout() {
		$this->load->view('veges/checkout');
	}

	/** Check API URL and App Id */
	public function checklogin() {
		$restId = RESTID;
		// if($this->input->get('restaurantId') != "") {
		// 	$restId = $this->input->get('restaurantId');
		// }
		$data['url'] = URL;
		$data['restaurantId'] = $restId;
		// $restaurant_id = $this->session->userdata('restaurant_id');

		$type = 'user';
		$method = 'GET';
        $url = URL.'restaurant-details/?restaurant_id='.RESTID.'&type='.$type;
        $header = array(
	       'Content-Type: application/json'
        );
        $apiResponse = $this->Home_Model->CallAPI($method, $url, $header);
		$apiDecodedResponse = json_decode($apiResponse);
		if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200) {
			$data = array(
				"token" => '',
				"appName" => '',
				"appLogo" => '',
				"appAddress" => '',
				"appCity" => '',
				"appState" => '',
				"appZip" => '',
				"appCountry" => '',
				"appEmail" => '',
				"appPhone" => '',
				"appStatus" => '',
				"appWorking_hours" => '',
				"appCurrency" => '',
				"appCurrencySymbol" => '',
				"appTemplate" => '',
				"appDesc" => '',
				"appCreated_at" => '',
				// "appStripeApiKey" => '',
				// "appPrinter_mac" => '',
				// "appPlan" => '',
				"appAdminIndustType" => '',
				"appAdminUsername" => ''
			);
			if(isset($apiDecodedResponse->response)) {
				$data = array(
					'token' => $apiDecodedResponse->response->Token,
					'appName' => $apiDecodedResponse->response->compony_name,
					'appLogo' => $apiDecodedResponse->response->compony_image,
					'appAddress' => $apiDecodedResponse->response->address,
					'appCity' => $apiDecodedResponse->response->city,
					'appState' => $apiDecodedResponse->response->state,
					'appZip' => $apiDecodedResponse->response->zip,
					'appCountry' => $apiDecodedResponse->response->country,
					'appEmail' => $apiDecodedResponse->response->email,
					'appPhone' => $apiDecodedResponse->response->phone,
					'appStatus' => $apiDecodedResponse->response->status,
					'appWorking_hours' => $apiDecodedResponse->response->working_hours,
					'appCurrency' => $apiDecodedResponse->response->currency,
					'appCurrencySymbol' => $apiDecodedResponse->response->currency_symbol,
					'appDesc' => $apiDecodedResponse->response->about_us,
					'appTemplate' => $apiDecodedResponse->response->template_details,
					'appCreated_at' => $apiDecodedResponse->response->created_at,
					'appAdminIndustType' => $apiDecodedResponse->response->industry_type,
					'appAdminUsername' => $apiDecodedResponse->response->admin_username,
				);
			}
			$this->session->set_userdata('token_id', $data['token']);
			$this->session->set_userdata('pre_login_data', $data);

			/** Set the default Controller Name */
				$defaultController = $this->uri->rsegment(1);
				define('DE_CONT', $defaultController);
			/** /. Set the default Controller Name */

			// $this->setAppConfigureData($data);
			return $data;
		}
	}
}
