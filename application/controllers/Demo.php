<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

	public function index()
	{
		$dt = array(
			'content' => 'demo/home'
		);
		$this->load->view('demo/index',$dt);
	}
	public function dashboardSales()
	{
		$dt = array(
		'content' => 'demo/dashboardSales'
	);
		$this->load->view('demo/index',$dt);
	}

	public function componentButtons()
	{
		$dt = array(
		'content' => 'demo/componentButtons'
	);
		$this->load->view('demo/index',$dt);
	}
	public function componentInteractive()
	{
		$dt = array(
		'content' => 'demo/componentInteractive'
	);
		$this->load->view('demo/index',$dt);
	}
	public function componentText()
	{
		$dt = array(
		'content' => 'demo/componentText'
	);
		$this->load->view('demo/index',$dt);
	}

	public function layoutsTabs()
	{
		$dt = array(
			'content' => 'demo/layoutsTabs'
		);
		$this->load->view('demo/index-tab',$dt);
	}

	public function icoSf()
	{
		$dt = array(
			'content' => 'demo/icoSf'
		);
		$this->load->view('demo/index',$dt);
	}

	public function icoMd()
	{
		$dt = array(
			'content' => 'demo/icoMd'
		);
		$this->load->view('demo/index',$dt);
	}

	public function icoFa()
	{
		$dt = array(
			'content' => 'demo/icoFa'
		);
		$this->load->view('demo/index',$dt);
	}
	
	public function notepad()
	{
		$dt = array(
			'content' => 'demo/notepad'
		);
		$this->load->view('demo/index',$dt);
	}
	public function login()
	{
		$this->load->view('demo/login');
	}

}
