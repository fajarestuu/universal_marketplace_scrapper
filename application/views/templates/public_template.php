<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partial/head', $data, FALSE);

echo $the_view_content;

$this->load->view('_partial/footer', $data, FALSE);
$this->load->view('_partial/secondary_content', $data, FALSE);


?>