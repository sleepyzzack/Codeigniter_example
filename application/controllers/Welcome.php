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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Country');
	}

	public function index()
	{
		$displayData['countries'] = $this->Country->select_all(); 
		$this->load->view('table', $displayData);
	}

	public function add(){
		$data = array(
		"Code"=> $this->input->post('code'),
		"Name" => $this->input->post('name'), 
		"Continent" => $this->input->post('cont'), 
		"Region" => $this->input->post('region'), "SurfaceArea" => $this->input->post('surface'),"IndepYear" => $this->input->post('independency'),
		"Population" => $this->input->post('population'), 
		"LifeExpectancy" => $this->input->post('Life'),
		"GNP" => $this->input->post('gnp'),
		"GNPOld" => $this->input->post('gnpold'),
		"LocalName" => $this->input->post('localname'),
		"GovernmentForm" => $this->input->post('gov'),
		"HeadOfState" => $this->input->post('HeadOfState'),
		"Capital" => $this->input->post('cap'),
		"Code2" => $this->input->post('code2'));

		$this->Country->addQuery($data);
		redirect('welcome');
	}

	public function delete($code){
		$this->Country->Delete($code);
		redirect('welcome');
	}

	public function Edit($code){
		$data = array(
			"Code"=> $this->input->post('code'),
			"Name" => $this->input->post('name'), 
			"Continent" => $this->input->post('cont'), 
			"Region" => $this->input->post('region'), "SurfaceArea" => $this->input->post('surface'),"IndepYear" => $this->input->post('independency'),
			"Population" => $this->input->post('population'), 
			"LifeExpectancy" => $this->input->post('Life'),
			"GNP" => $this->input->post('gnp'),
			"GNPOld" => $this->input->post('gnpold'),
			"LocalName" => $this->input->post('localname'),
			"GovernmentForm" => $this->input->post('gov'),
			"HeadOfState" => $this->input->post('HeadOfState'),
			"Capital" => $this->input->post('cap'),
			"Code2" => $this->input->post('code2'));

			$this->Country->Update($data, $code);
			redirect('welcome');
	}
}
