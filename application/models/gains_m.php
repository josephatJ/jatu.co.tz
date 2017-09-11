<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Gains_m extends CI_Model {

    /**
     * Created by PhpStorm.
     * User: josephat
     * Date: 5/9/17
     * Time: 8:10 PM
     */


    public function __construct()	{
        $this->load->database();
    }

    public function incomeByGeneration($gen, $id){
        $query = "SELECT SUM(profit) from division where (generation = '".$gen."' AND member_id = '".$id."')";
        $result = $this->db->query($query)->result();
        return $result;
    }
}