<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Network extends CI_Controller {

    /**
     * Created by Josephat Julius
     * Email: josephatjulius24@gmail.com.
     */

    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $userId = $this->uri->segment(3);
        $user_type = $this->uri->segment(4);
        echo $user_type."  ".$userId;
    }
}