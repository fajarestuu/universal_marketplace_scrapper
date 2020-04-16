<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partial/head');
$this->load->view('_partial/header');

echo $the_view_content;

$this->load->view('_partial/footer');
$this->load->view('_partial/secondary_content');


?>