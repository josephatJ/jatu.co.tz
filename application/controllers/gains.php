<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gains extends CI_Controller {

    /**
     * Created by Josephat Julius
     * Email: josephatjulius24@gmail.com.
     */

    function __construct(){
        parent::__construct();
        $this->load->model('gains_m');
    }

    public function index()
    {
        $userId = $this->uri->segment(3);
        $this->data['user_type'] = $this->uri->segment(4);
        $this->data['member_info'] = $this->authenticate_m->getBasicMemberInfo($userId);
        $this->data['own_income'] =$income = $this->gains_m->incomeByGeneration('0', $userId);
        $this->data['income1'] =$this->gains_m->incomeByGeneration('1', $userId);
        $this->data['income2'] =$this->gains_m->incomeByGeneration('2', $userId);
        $this->data['income3'] =$this->gains_m->incomeByGeneration('3', $userId);
        $this->data['income4'] =$this->gains_m->incomeByGeneration('4', $userId);
        $this->data['income5'] =$this->gains_m->incomeByGeneration('5', $userId);
        $this->data['income6'] =$this->gains_m->incomeByGeneration('6', $userId);
        $this->load->view('templates/header',$this->data);
        $this->load->view('templates/side_menu',$this->data);
        $this->load->view('templates/footer_buttons',$this->data);
        $this->load->view('templates/top_bar',$this->data);
        $this->load->view('gains/index',$this->data);
        $this->load->view('templates/footer',$this->data);
    }
}