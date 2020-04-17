<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends Public_Controller {
	

	public function __construct() { 
		parent::__construct();
		$this->load->model('simple_html_dom_helper');
		$this->load->model('scrapping');
		
	 } 
	public function index()
	{
		$this->render('public_view');
	}

	public function getig()
	{
		$scrap = $this->scrapping;

		// file
		$hasil = $scrap->scrape_insta('fajarestuu');
		$follower = $hasil['entry_data']['ProfilePage'][0]['graphql']['user']['edge_followed_by']['count'];
		$following = $hasil['entry_data']['ProfilePage'][0]['graphql']['user']['edge_follow']['count'];

		echo $follower;
		echo "<br>";
		echo $following;
		// $getcont = file_get_contents('http://instagram.com/pillowkarta');
		// $shards = explode('window._sharedData = ', $getcont);
		// $insta_json = explode(';</script>', $shards[1]); 
		// print_r($insta_json);
		// $this->load->view('index.php');
	}

	public function linkinput()
	{
		// echo $this->input->post('link');
		$this->render('product_detail_view');
		
	}
}
