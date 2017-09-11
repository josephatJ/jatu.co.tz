<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends CI_Controller {

    /**
     * Created by Josephat Julius
     * Email: josephatjulius24@gmail.com.
     */

    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $userId = '';
        $this->data['message'] = '';
        $this->data['requst_link'] = false;
        $this->data['userId'] = $userId;
        $this->load->view('authentication/index',$this->data);
    }
}