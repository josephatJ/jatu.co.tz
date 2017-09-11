<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Authenticate_m extends CI_Model {

    /**
     * Created by PhpStorm.
     * User: josephat
     * Date: 5/9/17
     * Time: 8:10 PM
     */


    public function __construct()	{
        $this->load->database();
    }

    public function authenticateMember($username, $password){
        $query = "SELECT id,user_type FROM member WHERE memberid ='".$username."' AND password = '".$password."'";
        $result = $this->db->query($query)->result();
        return $result;
    }

    public function getBasicMemberInfo($id) {
        $query = "SELECT * from get_basic_member_info_view WHERE id ='".$id."' LIMIT 1";
        $result = $this->db->query($query)->result();
        return $result;
    }
}