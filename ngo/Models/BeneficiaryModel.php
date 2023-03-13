<?php
require_once('dbconnection.php');
ini_set("display_errors", "1");
error_reporting(E_ALL);
class beneficiary_model extends dbconnection{
    private $benef_id;
    private $names;
    private $phone;
    private $email;
    private $dob;
    private $ngo_id;

    public function __construct($benef_id=null,$names="",$phone="",$email="",$dob=""){
        parent::__construct();
        $this->benef_id = $benef_id;
        $this->names = $names;
        $this->phone = $phone;
        $this->email = $email;
        $this->dob = $dob;
    }

    public function send_beneficiary($names,$phone,$email,$dob){
        try {
            $stm = $this->db->prepare("INSERT INTO beneficians (names,phone,email,dob,ngo_id) VALUES(?,?,?,?,?)");
            $stm->execute([$names,$phone,$email,$dob,1]);
            return "<h6 style='color:green;'>record success</h6>";
        } catch (Exception $error) {
        return $error->getMessage();
        }
    }
}
?>