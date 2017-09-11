<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

    /**
     * Created by Josephat Julius
     * Email: josephatjulius24@gmail.com.
     */

    function __construct(){
        parent::__construct();
        $this->load->model('authenticate_m');
    }


    public function index()
    {
        $userId = $this->uri->segment(3);
        $user_type = $this->uri->segment(4);
        if (isset($_POST) && $userId == '' ) {
//            Check if user exists
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($username === '' || $password === ''){
                $this->data['message'] = 'Namba ya uanachama na Neno la Siri vinahitajika vyote';
                $this->data['requst_link'] = false;
                $this->load->view('authentication/index',$this->data);
            } else {
                $userArr = $this->authenticate_m->authenticateMember($username,$password);
                if (count($userArr) > 0){
                    $id = $userArr[0]->id; $user_type = $userArr[0]->user_type;
                    $this->data['member_info'] = $this->authenticate_m->getBasicMemberInfo($id);
                    $this->data['user_type'] = $user_type;
                    $this->load->view('templates/header',$this->data);
                    $this->load->view('templates/side_menu',$this->data);
                    $this->load->view('templates/footer_buttons',$this->data);
                    $this->load->view('templates/top_bar',$this->data);
                    $this->load->view('profile/index',$this->data);
                    $this->load->view('templates/footer',$this->data);
                }else{
                    $this->data['message'] = 'Hakikisha usahihi wa namba yako na neno la siri';
                    $this->data['requst_link'] = true;
                    $this->load->view('authentication/index',$this->data);
                }
            }
        }else{

            $id = $userId;
            $this->data['member_info'] = $this->authenticate_m->getBasicMemberInfo($id);
            $this->data['user_type'] = $user_type;
            $this->data['user'] = 'Josephat Julius';
            $this->load->view('templates/header',$this->data);
            $this->load->view('templates/side_menu',$this->data);
            $this->load->view('templates/footer_buttons',$this->data);
            $this->load->view('templates/top_bar',$this->data);
            $this->load->view('profile/index',$this->data);
            $this->load->view('templates/footer',$this->data);
        }
    }

}