<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Scrapping extends CI_Model {

    function scrape_insta($username) {
        $insta_source = file_get_contents('http://instagram.com/'.$username);
        $shards = explode('window._sharedData = ', $insta_source);
        $insta_json = explode(';</script>', $shards[1]); 
        $insta_array = json_decode($insta_json[0], TRUE);
        return $insta_array;
    }

}

/* End of file ModelName.php */
